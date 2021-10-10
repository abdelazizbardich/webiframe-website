<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Get the demo associated with the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function demo()
    {
        return $this->hasOne(Demo::class, 'id', 'demo_id');
    }

    protected $fillable = [
        "demo_id",
        "full_domain",
        "seo",
        "f_lang",
        "s_lang",
        "newsletter",
        "first_last_name",
        "who_you_are",
        "email",
        "phone",
        "approximate_budget",
        "due_date",
        "message"
    ];
}
