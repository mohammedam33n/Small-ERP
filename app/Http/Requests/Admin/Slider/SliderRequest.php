<?php

namespace App\Http\Requests\Admin\Slider;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }



    /**
     * @return string[]
     * #[ArrayShape(['name' => "string"])]
     */
    protected function onCreate(): array
    {
        return [
            'title_en'      => 'required|string|min:3',
            'title_ar'      => 'required|string|min:3',
            'image'         => 'required|image|mimes:png,jpg,jpeg,webp',
        ];
    }

    /**
     * @return string[]
     * #[ArrayShape(['name' => "string"])]
     */
    protected function onUpdate(): array
    {
        return [
            'title_en'      => 'required|string|min:3',
            'title_ar'      => 'required|string|min:3',
            'image'         => 'image|mimes:png,jpg,jpeg,webp',
        ];
    }

    protected function onDelete(): array
    {
        return [
            'id' => 'required|exists:sliders,id'
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        switch ($this->method()) {
            case request()->isMethod('POST'):
                return $this->onCreate();
                break;

            case request()->isMethod('PUT'):
                return $this->onUpdate();
                break;

            case request()->isMethod('DELETE'):
                return $this->onDelete();
                break;

            default:
        }
    }
}
