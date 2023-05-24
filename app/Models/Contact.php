<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'contact';

    protected $fillable = [
        'id',
        'phone',
        'cellphone',
        'email',
        'person_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * RELATIONS
     */

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
        return $query->where('phone', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%');
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['search'])) {
            $query->search($filters['search']);
        }
    }


    /**
     * FUNCTIONS
     */



    /**
     * MUTATORS
     */


    /**
    * STATIC FUNCTIONS
    */

    public static function getValidationRules($method, $id = null)
    {
        $rules = [
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'user_id' => 'required|integer',
        ];

        return $rules;
    }


}
