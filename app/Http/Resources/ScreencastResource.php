<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScreencastResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'series_id' => $this->series_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'video_url' => $this->video_url,
            'code_url' => $this->code_url,
            'duration_in_minutes' => $this->duration_in_minutes,
        ];
    }
}
