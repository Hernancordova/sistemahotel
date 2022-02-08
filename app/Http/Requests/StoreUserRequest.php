<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true; // AUTORIZAR PARA LA VALIDACIÓN
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'name' => 'required',
      'email' => 'required|email',
      'nick_name' => 'required',
    ];
  }

  public function attributes()
  {
    return [
      'name' => 'Nombres',
      'email' => 'Correo electrónico',
      'nick_name' => 'Apodo',
    ];
  }

}
