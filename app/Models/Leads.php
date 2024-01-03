<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'leads';

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'message',
        'data',
        'product_id',
        'person_id',
        'company_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // cast
    protected $casts = [
        'data' => 'json',
    ];

    /**
     * RELATIONS
     */

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }

    public function person()
    {
        return $this->belongsTo(Persons::class, 'person_id');
    }

    /**
     * ACCESSORS
     */
    

    /**
     * SCOPE
     */

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('phone', 'like', '%' . $search . '%')
            ->orWhere('message', 'like', '%' . $search . '%');
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['search'])) {
            $query->search($filters['search']);
        }
    }

}
