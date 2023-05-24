<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'pages';

    protected $fillable = [
        'id',
        'title',
        'description',
        'slug',
        'page',
        'keywords',
        'data',
        'company_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * RELATIONS
     */

    /**
     * ACCESSORS
     */


    /**
     * SCOPE
     */

    public function scopeSearch($query, $search)
    {
        return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('content', 'like', '%' . $search . '%')
            ->orWhere('slug', 'like', '%' . $search . '%');
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['search'])) {
            $query->search($filters['search']);
        }
    }

}
