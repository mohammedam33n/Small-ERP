<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\EndUserHomeInterface;

class EndUserHomeController extends Controller
{

    private $homeInterface;

    public function __construct(EndUserHomeInterface $homeInterface)
    {
        $this->homeInterface = $homeInterface;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->homeInterface->index();
    }
}
