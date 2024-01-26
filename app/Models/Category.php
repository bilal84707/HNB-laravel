<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable=[
        'name',
        'category_id'
    ];

    public function parentcat()
    {
        return $this->belongsto(Category::class,'category_id');
    }
}
