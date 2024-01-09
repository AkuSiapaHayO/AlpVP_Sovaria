<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecipeResource extends JsonResource
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
            'user_id' => $this->user_id,
            'recipe_name' => $this->recipe_name,
            'caption' => $this->caption,
            'ingredients' => $this->ingredients,
            'steps' => $this->steps,
            'image' => $this->image,
            'calorie' => $this->calorie,
            'servings' => $this->servings,
            'time' => $this->time,
            'categories' => $this->categories,
            'comments' => $this->comments,
            'saved_by_users_count' => $this->savedByUsers->count(),
            'saved_by_user' => $this->isSavedByCurrentUser(),
        ];

        
    }

    private function isSavedByCurrentUser()
    {
        $currentUser = auth()->user();

        if (!$currentUser) {
            return false;
        }

        return $currentUser->savedRecipes->contains('id', $this->id);
    }
}
