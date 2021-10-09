<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $fillable = [
        "first_last_name",
        "who_you_are",
        "email",
        "phone",
        "your_need",
        "due_date",
        "approximate_budget",
        "message"
    ];
}
