<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateRoomTypeRequest extends Request
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
            'name' => 'required',
            'short_name' => 'required',
            'max_occupancy' => 'required|numeric|max:4',
            'base_price' => 'required|numeric',
            'base_availability' => 'required|numeric'
        ];
    }
}
