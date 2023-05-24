<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'persons';

    protected $fillable = [
        'id',
        'name',
        'cpf',
        'rg',
        'zip_code',
        'city_id',
        'country_id',
        'address',
        'tax_id',
        'responsible',
        'company_id',
        'created_at',
        'updated_at',
    ];

    // cast
    protected $casts = [
        'data' => 'json',
    ];

    // appends
    protected $appends = [
        'contact',
        'leads',
        'country',
        'city',
        'full_address',
    ];


    /**
     * RELATIONS
     */

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }

    public function leads()
    {
        return $this->hasMany(Leads::class);
    }


    /**
     * SCOPE
     */

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%');
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

    public function getContactAttribute()
    {
        return $this->contact()->first();
    }

    public function getLeadsAttribute()
    {
        return $this->leads()->get();
    }

    public function getCountryAttribute()
    {
        return $this->country()->first();
    }

    public function getCityAttribute()
    {
        return $this->city()->first();
    }

    public function getFullAddressAttribute()
    {
        return $this->address . ', ' . $this->city->name . ' - ' . $this->city->state->name . ', ' . $this->city->state->country->name;
    }

    /**
     * MUTATORS
     */

}
