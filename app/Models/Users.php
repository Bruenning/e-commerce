<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'users';

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'zip_code',
        'city_id',
        'country_id',
        'address',
        'tax_id',
        'responsible',
        'remember_token',
        'company_id',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'password',
    ];

    
    
    /**
     * RELATIONS
     */

    
    // /**
    //  * Get the city that owns the user.
    //  */
    // public function city()
    // {
    //     return $this->belongsTo(City::class);
    // }

    // /**
    //  * Get the country that owns the user.
    //  */
    // public function country()
    // {
    //     return $this->belongsTo(Country::class);
    // }

    /**
     *  SCOPE
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

    // public function getCityNameAttribute()
    // {
    //     return $this->city->name;
    // }

    // public function getCountryNameAttribute()
    // {
    //     return $this->country->name;
    // }


    /**
     * MUTATORS
     */

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * FUNCTIONS
     */

    public function isAdmin()
    {
        return $this->role == 'admin';
    }
}
