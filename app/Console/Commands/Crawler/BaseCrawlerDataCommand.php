<?php

namespace App\Console\Commands\Crawler;

use Illuminate\Console\Command;

class BaseCrawlerDataCommand extends Command
{
    protected $url = 'https://lamchame.vn/nghien-om-con-khi-ngu-coi-chung-hai-con-100164.html';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Crawler Data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->warn("init Crawler data");
        $html       = file_get_html($this->url);
        $category   = $html->find(".heading-page h2 a", 0)->plaintext ?? '';
        $title      = $html->find('.detail-main h1', 0)->plaintext ?? '';
        $content    = $html->find('.content-detail', 0)->outertext ?? '';
        $tags       = $html->find(".content-detail .tag a") ?? '';
        $contentTag = [];
        if ($tags) {
            foreach ($tags as $tag) {
                $contentTag[] = $tag->plaintext ?? '';
            }
        }
        $data = [
            'c_category' => $category,
            'title'      => $title,
            'content'    => $content,
            'tags'       => $contentTag
        ];

        print_r($data);
    }
}
