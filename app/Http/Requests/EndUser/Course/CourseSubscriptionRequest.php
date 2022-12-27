<?php

namespace App\Http\Requests\EndUser\Course;

use Illuminate\Foundation\Http\FormRequest;

class CourseSubscriptionRequest extends FormRequest
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
            'course_id'     => 'required|exists:courses,id',
            'student_id'    => 'required|exists:students,id',
            'total_price'   => 'required|numeric',
            'discount'      => 'nullable|numeric',
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

            default:
        }
    }
}
