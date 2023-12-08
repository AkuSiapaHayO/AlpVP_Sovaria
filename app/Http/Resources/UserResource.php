<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'name' => $this->name,
            'birthdate' => $this->birthdate,
            'description' => $this->description,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'profile_picture' => $this->profile_picture,
        ];
    }
}