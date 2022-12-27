<?php

namespace App\Http\Traits;

trait SliderTrait
{
    private function getAllSlider()
    {
        return $this->slider::get();
    }

    private function takeSlider($count)
    {
        return $this->slider::take($count)->get();
    }

    private function getSliderById($id)
    {
        return $this->slider::findOrFail($id);
    }
}
