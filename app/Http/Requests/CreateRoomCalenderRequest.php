<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateRoomCalenderRequest extends Request
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
            'room_type'=> 'required',
            'start_dt'=> 'required|date|after:yesterday',
            'end_dt'=> 'required|date|after:tomorrow'
        ];
    }
}
