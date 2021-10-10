<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "demo_id",
        "full_domain",
        "seo",
        "lang",
        "s_lang",
        "newsletter"
    ];
}
