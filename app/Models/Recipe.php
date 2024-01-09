<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_name',
        'caption',
        'ingredients',
        'steps',
        'image',
        'calorie',
        'servings',
        'time',
        'user_id',
        'recipe_category'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'recipe_category');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function savedBy()
    {
        return $this->belongsToMany(User::class, 'saves', 'recipe_id', 'user_id')->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function savedByUsers()
    {
        return $this->belongsToMany(User::class, 'saves', 'recipe_id', 'user_id')->withTimestamps();
    }
}
