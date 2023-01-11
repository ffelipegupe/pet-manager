<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\CategoryResource;
use App\Http\Resources\V1\TagResource;

class PetResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'photoUrls' =>$this->photo_urls,
            'category' => new CategoryResource($this->category),
            'tags' => new TagCollection($this->tags),
            'status' => $this->status
        ];
    }
}
