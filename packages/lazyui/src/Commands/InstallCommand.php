<?php

namespace Kodingin\LazyUI\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lazy:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install LazyUI to your application.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->publishAssets();

        $this->newLine();
        $this->components->success('LazyUI installed successfully');
        $this->components->bulletList([
            'resources/css/lazy',
            'resources/js/lazy',
            'public/assets/lazy',
        ]);
        $this->newLine();
    }

    protected function publishAssets(): void
    {
        $this->createDirectories();
        $this->copyFiles();
    }

    protected function createDirectories(): void
    {
        collect([
            resource_path('css/lazy'),
            resource_path('js/lazy'),
            public_path('assets/lazy'),
        ])->each(function ($path) {
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true);
            }
        });
    }

    protected function copyFiles(): void
    {
        $stubs = realpath(__DIR__ . '/../../stubs');

        File::copyDirectory("$stubs/resources/css", resource_path('css/lazy'));
        File::copyDirectory("$stubs/resources/js", resource_path('js/lazy'));
        File::copyDirectory("$stubs/assets-vendor", public_path('assets/lazy'));
    }
}
