<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'employee_id' => ['required'],
            'rekomendacija' => ['required', 'numeric', 'between:1,10'],
            'greitis' => ['required', 'numeric', 'between:1,10'],
            'aptarnavimas' => ['required', 'numeric', 'between:1,10'],
            'pastabos' => ['required', 'string', 'min:10'],
            'sutikimas' => ['required']
        ];
    }
}
