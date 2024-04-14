<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastName extends Model
{
    use HasFactory;

    protected $table = 'last_names';
    protected $primaryKey = 'last_name_id';
    protected $fillable = [
        'last_name',
    ];
}
