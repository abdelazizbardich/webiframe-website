<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    use HasFactory;


    protected $fillable = [
        "title",
        "slug",
        "thumbnail",
        "full_thumbnail",
        "short_description",
        "full_description",
        "url",
        "category_id",
        "screenshots"
    ];

    /**
     * Get the Category that owns the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
