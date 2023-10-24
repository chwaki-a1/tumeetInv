<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // $user = $this->user();

        // return $user =! null && $user->tokenCan('update');

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method();

        if ($method == 'PUT'){
            return [

                'name'=> ['required'],
                'email'=> ['required'],
                'meetingRoom'=> ['required'],
                'attendees'=> ['required'],
                'date'=> ['required'],
                'startTime'=> ['required'],
                'endTime'=> ['required'],
                'title'=> ['required'],
                'description'=> ['required'],
                'projector'=> ['required'],
                'audio'=> ['required'],
                'itAssistance'=> ['required'],
                ];
        } else {
            return [

                'name'=> ['sometimes','required'],
                'email'=> ['sometimes','required'],
                'meetingRoom'=> ['sometimes','required'],
                'Attendees'=> ['sometimes','required'],
                'date'=> ['sometimes','required'],
                'startTime'=> ['sometimes','required'],
                'endTime'=> ['sometimes','required'],
                'title'=> ['sometimes','required'],
                'description'=> ['sometimes','required'],
                'projector'=> ['sometimes','required'],
                'audio'=> ['sometimes','required'],
                'itassistance'=> ['sometimes','required'],

                ];

        }
    }
}
