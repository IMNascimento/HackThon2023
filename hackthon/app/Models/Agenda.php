<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'schedule';

    protected $primaryKey = 'id';

    protected $fillable = [
        'date',
        'category',
        'status',
        'user_id'
    ];


    public function convertTimestamp($date)
    {
        return strtotime($date);
    }




}
