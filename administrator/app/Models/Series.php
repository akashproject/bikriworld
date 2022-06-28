<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
    protected $table = 'series';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','category_id','brand_id','series',
    ];
}
