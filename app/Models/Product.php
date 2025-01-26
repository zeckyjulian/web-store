<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'product_name',
    //     'slug',
    //     'price',
    //     'description',
    //     'image',
    //     'published_at',
    // ];

    protected $guarded = ['id'];

    public function variants()
    {
        return $this->hasMany(ProductVariant::class)->orderBy('id', 'desc');
    }
}
