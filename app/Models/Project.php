<?php

namespace App\Models;

use App\Models\Concerns\HasLocaleTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    use HasLocaleTranslations;

    protected $fillable = [
        "title",
        "slug",
        "short_description",
        "full_description",
        "thumbnail",
        "full_thumbnail",
        "url",
        "category_id"
    ];

    protected $casts = [
        'title_translations' => 'array',
        'short_description_translations' => 'array',
        'full_description_translations' => 'array',
    ];

    public function getTitleAttribute($value)
    {
        return $this->getTranslatedAttributeValue('title', $value);
    }

    public function setTitleAttribute($value): void
    {
        $this->setTranslatedAttributeValue('title', $value);
    }

    public function getShortDescriptionAttribute($value)
    {
        return $this->getTranslatedAttributeValue('short_description', $value);
    }

    public function setShortDescriptionAttribute($value): void
    {
        $this->setTranslatedAttributeValue('short_description', $value);
    }

    public function getFullDescriptionAttribute($value)
    {
        return $this->getTranslatedAttributeValue('full_description', $value);
    }

    public function setFullDescriptionAttribute($value): void
    {
        $this->setTranslatedAttributeValue('full_description', $value);
    }


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
