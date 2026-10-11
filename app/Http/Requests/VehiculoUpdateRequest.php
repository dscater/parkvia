<?php

namespace torremall\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoUpdateRequest extends FormRequest
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
            'rfid' => 'unique:vehiculos,rfid,'.$this->vehiculo->id,
        ];
    }

    public function messages()
    {
        return [
            'rfid.unique' => 'Ese codigo RFID ya esta siendo utilizado.',
        ];
    }
}
