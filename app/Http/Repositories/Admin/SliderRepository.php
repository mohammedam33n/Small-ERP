<?php

namespace App\Http\Repositories\Admin;

use App\Models\Slider;
use App\Http\Traits\ImageTrait;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\Admin\SliderInterface;

class SliderRepository implements SliderInterface
{
    use ImageTrait;


    private $sliderModel;

    public function __construct(Slider $slider)
    {
        $this->sliderModel = $slider;
    }



    public function index($slidersDataTable)
    {
        return $slidersDataTable->render('admin.pages.sliders.index');
    }

    public function create()
    {
        return view('admin.pages.sliders.create');
    }

    public function store($request)
    {
        $fileName = $this->uploadImage($request->image, $this->sliderModel::PATH);

        $this->sliderModel::create([
            'title' => [
                'en' => $request->title_en,
                'ar' => $request->title_ar,
            ],
            'image' => $fileName,
        ]);

        Alert::success('Slider', 'Slider Created Successfully');
        return redirect(route('admin.slider.index'));
    }

    public function edit($slider)
    {
        return view('admin.pages.sliders.edit', [
            'slider' => $slider
        ]);
    }

    public function update($request, $slider)
    {
        $fileName = $this->uploadImage($request->image, $this->sliderModel::PATH, $slider);

        $slider->update([
            'title' => [
                'en' => $request->title_en,
                'ar' => $request->title_ar,
            ],
            'image' => $fileName,
        ]);


        Alert::success('slider', 'slider Updated Successfully');
        return redirect(route('admin.slider.index'));
    }

    public function destroy($slider)
    {
        $this->removeImage($slider->image);
        $slider->delete();
    }
}
