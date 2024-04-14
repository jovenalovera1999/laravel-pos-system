<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuffixName extends Model
{
    use HasFactory;

    protected $table = 'suffix_names';
    protected $primaryKey = 'suffix_name_id';
    protected $fillable = [
        'suffix_name',
    ];
}
