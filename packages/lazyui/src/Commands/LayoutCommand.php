<?php

namespace Kodingin\LazyUI\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use function Laravel\Prompts\text;

class LayoutCommand extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lazy:panel
        {path : The path of your layout.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate layout panel.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $path = str()->slug($this->argument('path'));

        $this->generateLayouts($path);
        $this->generateRoute($path);

        $this->newLine();
        $this->components->info("✅ Successfully created layout for '{$path}'.");
    }

    protected function generateLayouts(string $path): void
    {
        $sourceDir = __DIR__ . '/../../stubs/layouts';
        $destDir = resource_path("views/{$path}/layouts");

        // Check if folder already exists
        if (File::isDirectory($destDir)) {
            if (! $this->confirm("The layout folder '{$destDir}' already exists. Overwrite?", false)) {
                $this->components->warn("Skipped layout generation.");
                return;
            }
        } else {
            File::makeDirectory($destDir, 0777, true, true);
        }

        // Copy and replace placeholder
        foreach (File::glob("{$sourceDir}/*.blade.php") as $file) {
            $filename = basename($file);
            $content = str_replace('[path]', $path, File::get($file));

            $destination = $filename === 'example.blade.php'
                ? resource_path("views/{$path}/index.blade.php")
                : "{$destDir}/{$filename}";

            File::put($destination, $content);
        }

        $this->components->info("🧩 Layout files generated in resources/views/{$path}");
    }

    protected function generateRoute(string $path): void
    {
        if (! $this->confirm("Create a new route file for '{$path}'? (routes/{$path}.php)", false)) {
            $this->components->warn("Skipped route generation.");
            return;
        }

        $routePath = base_path("routes/{$path}.php");
        $stubRouteContent = str_replace('[path]', $path, File::get(__DIR__ . '/../../stubs/routes.php'));

        if (File::exists($routePath)) {
            if (! $this->confirm("The route file '{$routePath}' already exists. Overwrite?", false)) {
                return;
            }
        }

        File::put($routePath, $stubRouteContent);

        // Append to web.php
        $webContent = str_replace('[path]', $path, File::get(__DIR__ . '/../../stubs/web.php'));
        File::append(base_path('routes/web.php'), $webContent);

        $this->components->info("📌 Route file created and linked in routes/web.php");
    }

    protected function promptForMissingArguments(InputInterface $input, OutputInterface $output): void
    {
        if ($this->didReceiveOptions($input)) {
            return;
        }

        if (! $input->getArgument('path')) {
            $path = text('What is the name of the layout path you want to generate?', 'admin');
            $input->setArgument('path', $path);
        }
    }
}
