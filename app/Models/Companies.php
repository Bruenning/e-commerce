<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'companies';

    protected $fillable = [
        'id',
        'company_name',
        'company_logo',
        'company_email',
        'company_phone',
        'company_address',
        'company_zip_code',
        'company_city_id',
        'company_country_id',
        'created_at',
        'updated_at',

    ];
}
