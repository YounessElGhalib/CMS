<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use DateTime;

class CategorieRequest extends FormRequest
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
        $newDate = new DateTime();
        $newDate = $newDate->format('d/m/Y');
        return [
            'nom' => 'required',
            'description' => 'required',
            'date' => $newDate
        ];
    }
}
