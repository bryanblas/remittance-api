<?php
namespace App\Http\Requests;

use App\Http\Requests\FormRequest;

class StoreBankAccountRequest extends FormRequest
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
            'bank_id' => 'required',
            'bank_branch' => 'required',
            'number' => 'required',
            'name' => 'required'
        ];
    }
}
