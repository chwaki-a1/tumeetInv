<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // $user = $this->user();

        // return $user =! null && $user->tokenCan('create','update');
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
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
                'projector'=> ['sometimes'],
                'audio'=> ['sometimes'],
                'itAssistance'=> ['sometimes'],
        ];
    }
}
