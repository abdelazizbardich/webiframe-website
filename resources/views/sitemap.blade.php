<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    @foreach ($staticPages as $page)
    <url>
        <loc>{{ $page['loc'] }}</loc>
        @if ($page['lastmod'])
        <lastmod>{{ \Carbon\Carbon::parse($page['lastmod'])->toAtomString() }}</lastmod>
        @endif
        <changefreq>{{ $page['changefreq'] }}</changefreq>
        <priority>{{ $page['priority'] }}</priority>
    </url>
    @endforeach

    @foreach ($projects as $project)
    <url>
        <loc>{{ url('/project/' . $project->slug) }}</loc>
        <lastmod>{{ $project->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach

    @foreach ($demos as $demo)
    <url>
        <loc>{{ url('/demo/' . $demo->slug) }}</loc>
        <lastmod>{{ $demo->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach

</urlset>
