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

    // eager loading
    // protected $with = ['category'];

    // query scope
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search-product'] ?? false, function ($query, $search) {
            return $query->where('product_name', 'like', '%'. $search .'%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class)->orderBy('id', 'desc');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
