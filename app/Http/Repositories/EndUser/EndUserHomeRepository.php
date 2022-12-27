<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserHomeInterface;
use App\Http\Traits\SliderTrait;
use App\Models\Slider;


class EndUserHomeRepository implements EndUserHomeInterface
{
    use SliderTrait;
    private $camps, $slider;

    public function __construct(Slider $slider)
    {
        $this->slider  = $slider;
    }


    public function index()
    {
        return view('endUser.pages.index', [
            'Sliders' => $this->takeSlider(5)
        ]);
    }
}
