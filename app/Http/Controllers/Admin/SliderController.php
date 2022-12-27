<?php

namespace App\Http\Controllers\Admin;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\SlidersDataTable;
use App\Http\Interfaces\Admin\SliderInterface;
use App\Http\Requests\Admin\Slider\SliderRequest;

class SliderController extends Controller
{
    private $sliderInterface;

    public function __construct(SliderInterface $sliderInterface, Slider $slider)
    {
        $this->sliderInterface = $sliderInterface;
    }




    public function index(SlidersDataTable $slidersDataTable)
    {

        return $this->sliderInterface->index($slidersDataTable);
    }

    public function create()
    {
        return $this->sliderInterface->create();
    }

    public function store(SliderRequest $request)
    {
        return $this->sliderInterface->store($request);
    }

    public function edit(Slider $slider)
    {
        return $this->sliderInterface->edit($slider);
    }

    public function update(SliderRequest $request, Slider $slider)
    {

        return $this->sliderInterface->update($request, $slider);
    }

    public function destroy(Slider $slider)
    {
        return $this->sliderInterface->destroy($slider);
    }
}
