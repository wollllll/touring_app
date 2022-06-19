<?php

namespace App\Http\Resources\User;

use App\Http\Resources\Spot\SpotResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'spots' => SpotResource::collection($this->spots),
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'profile' => $this->profile,
            'created_at' => $this->created_at->format('Y-m-d H:i')
        ];
    }
}
