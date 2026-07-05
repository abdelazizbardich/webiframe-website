<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Demo;
use App\Models\Project;

class sitemapController extends Controller
{
    public function index()
    {
        $projects = Project::select('slug', 'updated_at')->orderByDesc('updated_at')->get();
        $demos = Demo::select('slug', 'updated_at')->orderByDesc('updated_at')->get();

        $latestProject = $projects->first()?->updated_at;
        $latestDemo = $demos->first()?->updated_at;

        $staticPages = [
            ['loc' => url('/'),           'lastmod' => collect([$latestProject, $latestDemo])->filter()->max(), 'changefreq' => 'weekly',  'priority' => '1.0'],
            ['loc' => url('/projects'),   'lastmod' => $latestProject,                                          'changefreq' => 'weekly',  'priority' => '0.8'],
            // ['loc' => url('/demos'),      'lastmod' => $latestDemo,                                             'changefreq' => 'weekly',  'priority' => '0.8'],
            ['loc' => url('/contact'),    'lastmod' => null,                                                    'changefreq' => 'monthly', 'priority' => '0.5'],
            ['loc' => url('/quotation'),  'lastmod' => null,                                                    'changefreq' => 'monthly', 'priority' => '0.5'],
        ];

        $content = view('sitemap', compact('staticPages', 'projects', 'demos'))->render();

        return response($content, 200)->header('Content-Type', 'application/xml');
    }
}
