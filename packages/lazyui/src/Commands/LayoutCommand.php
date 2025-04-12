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

        $this->genereateLayouts($path);
        $this->generateRoute($path);

        $this->info('Successfully creating a layout for '. $path .'.');
    }

    public function genereateLayouts($path) {
        $sourceDir = __DIR__ . '/../../stubs/layouts';
        $destDir = resource_path("views/{$path}/layouts");

        if (! File::isDirectory($destDir)) {
            File::makeDirectory($destDir, 0777, true, true);
        } else {
            $overwrite = $this->confirm('The path already exists, do you want to overwrite?', false);
            if (! $overwrite) {
                return;
            }
        }

        $files = File::glob("{$sourceDir}/*.blade.php");

        foreach ($files as $file) {
            $filename = basename($file);
            $destination = "{$destDir}/{$filename}";
            $content = File::get($file);
            $content = str_replace('[path]', $path, $content);

            if($filename == 'example.blade.php') {
                File::put($destDir.'/../index.blade.php', $content);
                continue;
            }

            File::put($destination, $content);
        }
    }

    public function generateRoute($path) {
        $confirm = $this->confirm('Do you want to create a special route file for '. $path .' (such as routes/'. $path .'.php)?', false);

        if (! $confirm) {
            return;
        }

        $content = File::get(__DIR__ . '/../../stubs/routes.php');
        $content = str_replace('[path]', $path, $content);
        if(File::isFile(base_path('routes/'. $path .'.php'))) {
            $overwrite = $this->confirm('The route file already exists, do you want to overwrite?', false);
            if (! $overwrite) {
                return;
            }
        }

        File::put(base_path('routes/'. $path .'.php'), $content);

        //append to web.php
        $web = File::get(__DIR__ . '/../../stubs/web.php');
        $web = str_replace('[path]', $path, $web);
        File::append(base_path('routes/web.php'), $web);
    }

    protected function promptForMissingArguments(InputInterface $input, OutputInterface $output): void
    {
        if ($this->didReceiveOptions($input)) {
            return;
        }

        if (trim($this->argument('path')) === '') {
            $path = text('What is the name of the path you want to make?', 'admin');

            if ($path) {
                $input->setArgument('path', $path);
            }
        }
    }
}
