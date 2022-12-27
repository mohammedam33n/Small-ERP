<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\EndUserSitemapInterface;

class EndUserSitemapController extends Controller
{
    private $sitemapInterface;

    public function __construct(EndUserSitemapInterface $sitemapInterface)
    {
        $this->sitemapInterface = $sitemapInterface;
    }

    public function index()
    {
      return $this->sitemapInterface->index();
    }


}
