<?php

namespace App\Http\Requests\Admin\Course;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'body_en'       => 'required|string|max:100',
            'body_ar'       => 'required|string|max:100',
            'category'      => 'required|string|min:3',
            'image'         => 'required|image|mimes:png,jpg,jpeg,webp',
            'start_date'    => 'required|date|after_or_equal:date',
            'location'      => 'required|string',
            'price'         => 'required',
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
            'body_en'       => 'required|string|max:100',
            'body_ar'       => 'required|string|max:100',
            'category'      => 'required|string|min:3',
            'image'         => 'nullable|image|mimes:png,jpg,jpeg,webp',
            'start_date'    => 'required|date|after_or_equal:date',
            'location'      => 'required|string',
            'price'         => 'required',
        ];
    }

    protected function onDelete(): array
    {
        return [
            'id' => 'required|exists:courses,id'
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
