<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
             "id" => $this->id,
                "title" => $this->title,
                "description" =>  $this->description,
                "category_id" => $this->category_id,
                "type" => $this->type->name,
                "tags" => $this->tags,
                "payment_category" => $this->payment_category->name,
                "max_age" => $this->max_age,
                "image" => asset($this->image),
                "price" => $this->price ?? 'Free',
                "views" => $this->views,
                "user_id" => $this->user_id,
                "status" => $this->status,
                "created_at" => $this->created_at->diffForHumans(),
                "writer" => $this->user->name

        ];
    }
}
