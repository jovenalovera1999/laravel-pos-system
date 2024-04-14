<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiddleName extends Model
{
    use HasFactory;

    protected $table = 'middle_names';
    protected $primaryKey = 'middle_name_id';
    protected $fillable = [
        'middle_name',
    ];
}
