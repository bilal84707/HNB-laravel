<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class variation_type extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
    ];

    public function variations()
    {
        return $this->hasOne(Variation_type::class);
    }
}
