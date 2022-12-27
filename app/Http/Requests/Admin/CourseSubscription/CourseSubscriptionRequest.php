<?php

namespace App\Http\Requests\Admin\CourseSubscription;

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
            
            case request()->isMethod('DELETE'):
                return $this->onDelete();
                break;

            default:
        }
    }
}
