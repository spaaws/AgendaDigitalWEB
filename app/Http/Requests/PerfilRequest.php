<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PerfilRequest extends FormRequest
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
        $id=auth()->user()->id;
        return [
            'name'      => ['required', 'string', 'max:255'],
            'profissao' => ['nullable', 'string', 'max:255'],
            'avatar'    => ['image'],
        ];
    }
}
