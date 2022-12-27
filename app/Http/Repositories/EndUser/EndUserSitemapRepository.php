<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserSitemapInterface;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use App\Models\Course;

class EndUserSitemapRepository implements EndUserSitemapInterface
{
    public function index()
    {
        $sitemap = App::make("sitemap");
        $courses = Course::select('slug','updated_at')->get();

        $sitemap->add(URL::to(Lang::locale().'/'),'2022-01-01T00:00:00+00:00',1,'daily');
        $sitemap->add(URL::to(Lang::locale().'/courses'),'2022-01-01T00:00:00+00:00',0.7,'weekly');
        $sitemap->add(URL::to(Lang::locale().'/login'),'2022-01-01T00:00:00+00:00',0.5,'weekly');

        foreach($courses as $course)
        {
            $sitemap->add(URL::to(Lang::locale()).'/courses'.'/'.$course->slug,$course->updated_at,0.7,'monthly');
        }


        $sitemap->store('xml','mysitemap');

        return redirect(url('mysitemap.xml'));
    }
}
