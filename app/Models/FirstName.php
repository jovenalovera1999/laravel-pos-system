<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstName extends Model
{
    use HasFactory;

    protected $table = 'first_names';
    protected $primaryKey = 'first_name_id';
    protected $fillable = [
        'first_name',
    ];
}
