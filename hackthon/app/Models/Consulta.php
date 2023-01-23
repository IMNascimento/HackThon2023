<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $table = 'query';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'status',
        'doctor',
        'glucose',
        'pressure',
        'exams',
        'user_id'
    ];
}
