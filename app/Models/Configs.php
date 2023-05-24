<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configs extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'configs';

    protected $fillable = [
        'id',
        'name',
        'value',
        'company_id',
        'company_id',
        'created_at',
        'updated_at',
    ];
}
