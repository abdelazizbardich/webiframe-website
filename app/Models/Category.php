<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "name",
        "type"
    ];

    /**
     * Get all of the Project for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Project(): HasMany
    {
        return $this->hasMany(Project::class, 'category_id', 'id');
    }
}
