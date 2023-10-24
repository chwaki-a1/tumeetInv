<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'email'=> $this->email,
            'meetingRoom'=> $this->meetingRoom,
            'attendees'=> $this->attendees,
            'date'=> $this->date,
            'startTime'=> $this->startTime,
            'endTime'=> $this->endTime,
            'title'=> $this->title,
            'description'=> $this->description,
            'projector'=> $this->projector,
            'audio'=> $this->audio,
            'itAssistance'=> $this->itAssistance,
           ];
    }
}
