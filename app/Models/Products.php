<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'images',
        'user_id',
        'slug',
        'company_id',
        'category_id',
        'subcategory_id',
        'brand_id',
        'product_status_id',
        'product_type_id',
        'product_condition_id',
        'product_unit_id',
        'created_at',
        'updated_at',
    ];

    // cast
    protected $casts = [
        'images' => 'json',
    ];

    // appends
    protected $appends = [
        'user',
        'company',
        'category',
        'subcategory',
        'brand',
        'product_status',
        'product_type',
        'product_condition',
        'product_unit',
    ];

    /**
     * RELATIONS
     */

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function company()
    {
        return $this->belongsTo(Companies::class, 'company_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategories::class, 'subcategory_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class, 'brand_id');
    }

    public function product_status()
    {
        return $this->belongsTo(ProductStatus::class, 'product_status_id');
    }

    public function product_type()
    {
        return $this->belongsTo(ProductTypes::class, 'product_type_id');
    }

    public function product_condition()
    {
        return $this->belongsTo(ProductConditions::class, 'product_condition_id');
    }

    public function product_unit()
    {
        return $this->belongsTo(ProductUnits::class, 'product_unit_id');
    }

    /**
     * SCOPE
     */

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orWhere('slug', 'like', '%' . $search . '%');
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['search'])) {
            $query->search($filters['search']);
        }
    }


    /**
     * ACCESSORS
     */

    public function getUserAttribute()
    {
        return $this->user()->first();
    }

    public function getCompanyAttribute()
    {
        return $this->company()->first();
    }

    public function getCategoryAttribute()
    {
        return $this->category()->first();
    }

    public function getSubcategoryAttribute()
    {
        return $this->subcategory()->first();
    }

    public function getBrandAttribute()
    {
        return $this->brand()->first();
    }

    public function getProductStatusAttribute()
    {
        return $this->product_status()->first();
    }

    public function getProductTypeAttribute()
    {
        return $this->product_type()->first();
    }

    public function getProductConditionAttribute()
    {
        return $this->product_condition()->first();
    }

    public function getProductUnitAttribute()
    {
        return $this->product_unit()->first();
    }

    public function getImagesAttribute()
    {
        $images = $this->attributes['images'];
        $images = json_decode($images);
        $images = collect($images);
        return $images;
    }

    public function getImagesUrlAttribute()
    {
        $images = $this->attributes['images'];
        $images = json_decode($images);
        $images = collect($images);
        $images = $images->map(function ($image) {
            return asset('storage/' . $image);
        });
        return $images;
    }

    public function getImagesUrlFirstAttribute()
    {
        $images = $this->attributes['images'];
        $images = json_decode($images);
        $images = collect($images);
        $images = $images->map(function ($image) {
            return asset('storage/' . $image);
        });
        return $images->first();
    }


    /**
     * MUTATORS
     */

}

