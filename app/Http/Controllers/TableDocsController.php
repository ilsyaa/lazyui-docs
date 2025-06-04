<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension;
use League\CommonMark\Extension\TableOfContents\TableOfContentsExtension;
use League\CommonMark\MarkdownConverter;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class TableDocsController extends Controller
{
    protected $docsPath;
    protected $converter;
    protected $sortMenu;

    public function __construct()
    {
        $this->docsPath = base_path('packages/lazyui-tables/docs');
        $config = [
            'table_of_contents' => [
                'position' => 'top',
                'style' => 'bullet',
                'min_heading_level' => 1,
                'max_heading_level' => 6,
                'normalize' => 'relative',
                'placeholder' => null,
            ],
            'heading_permalink' => [
                'html_class' => 'hash-link',
                'symbol' => '# ',
            ],
        ];
        $environment = new Environment($config);
        $environment->addExtension(new CommonMarkCoreExtension());
        $environment->addExtension(new HeadingPermalinkExtension());
        $environment->addExtension(new TableOfContentsExtension());
        $this->converter = new MarkdownConverter($environment);

        $this->sortMenu = collect(File::allFiles($this->docsPath))
            ->filter(fn ($file) => $file->getFilename() === '_index.md')
            ->map(function ($file) {
                $document = YamlFrontMatter::parseFile($file->getRealPath());
                $relativePath = Str::after($file->getPath(), $this->docsPath . DIRECTORY_SEPARATOR);
                $title = $document->matter('title') ?? '-';
                return [
                    'title' => $title,
                    'weight' => (int) $document->matter('weight') ?? 999,
                    'type' => 'section',
                    'slug' => $title == 'index' ? 'index' : $relativePath,
                    'svg' => $document->matter('svg') ?? null,
                    'pages' => collect(File::files($file->getPath()))
                        ->filter(fn ($file) => $file->getFilename() !== '_index.md')
                        ->map(function ($file) use ($relativePath, $title) {
                            $pageDocument = YamlFrontMatter::parseFile($file->getRealPath());
                            if ($title == 'index') {
                                $url = route('docs.section', [ 'section' => 'index', 'page' => explode('.', $file->getFilename())[0] ]);
                            } else {
                                $url = route('docs.section', [ 'section' => $relativePath, 'page' => explode('.', $file->getFilename())[0] ]);
                            }
                            return [
                                'title' => $pageDocument->matter('title') ?? '-',
                                'weight' => (int) $pageDocument->matter('weight') ?? 999,
                                'url' => $url,
                                'slug' => explode('.', $file->getFilename())[0],
                                'svg' => $pageDocument->matter('svg') ?? null,
                                'type' => 'page',
                                'content' => $this->converter->convert($pageDocument->body()),
                            ];
                        })->sortBy('weight')->values(),
                ];
            })
            ->sortBy('weight')
            ->values();
    }

    public function show($section, $page = null)
    {
        if($section == 'index') {
            $path = $this->docsPath . '/' . $page . '.md';
        } else {
            $path = $this->docsPath . '/' . $section . '/' . $page . '.md';
        }
        $document = YamlFrontMatter::parseFile($path);

        return view('tables.show', [
            'title' => $document->matter('title') ?? '-',
            'content' => $this->converter->convert($document->body()),
            'section' => $section,
            'page' => $page,
            'menuStructure' => $this->sortMenu,
        ]);
    }
}
