<?php

namespace App\Console\Commands;

use App\Models\Airport;
use App\Models\Post;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class SiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sm = SitemapGenerator::create('https://darkwinginflight.com/')
            ->getSitemap();
        foreach (Airport::all() as $a){
            $sm = $sm->add(Url::create('https://darkwinginflight.com/airports/'.$a->slug)->setPriority(0.8));
        }
        foreach (Post::all() as $a){
            $sm = $sm->add(Url::create('https://darkwinginflight.com/news/'.$a->seo_url)->setPriority(0.8));
        }

        $sm->writeToFile("sitemap.xml");
        return 0;
    }
}
