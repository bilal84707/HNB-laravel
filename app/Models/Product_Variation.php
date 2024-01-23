<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_variation extends Model
{
    use HasFactory;

    protected $fillable=[  
        'name',
        'title',
        'status',
        'description',
        'price',
        'qty',
        'name',
        'color_code',
        'discount',
        'image1',
        'image2',
        'image3',
        'variation_type_id',
        'product_id'];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
