<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use DateTime;

class PageRequest extends FormRequest
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
            'titre' => 'required',
            'url' => 'required',
            'description' => 'required',
            'type' => 'required',
            'date' => $newDate
        ];
    }
}
