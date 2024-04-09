<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AttendanceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);

        return[
            'id' => $this->id,
            'name' => $this->naem,
            'avatar' => $this->avatar,
            'body' => $this->body,
            'date' => $this->created_at->diffForHumans()
        ];
    }
}
