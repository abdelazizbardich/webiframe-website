<?php

namespace App\Models;

use App\Models\Concerns\HasLocaleTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    use HasLocaleTranslations;

    protected $fillable = [
        "id",
        "name",
        "type"
    ];

    protected $casts = [
        'name_translations' => 'array',
    ];

    public function getNameAttribute($value)
    {
        return $this->getTranslatedAttributeValue('name', $value);
    }

    public function setNameAttribute($value): void
    {
        $this->setTranslatedAttributeValue('name', $value);
    }

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
