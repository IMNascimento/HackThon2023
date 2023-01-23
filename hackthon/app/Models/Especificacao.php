<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especificacao extends Model
{
    use HasFactory;
    protected $table = 'specification';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'user_id'
    ];
}
