<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brand';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','image','category_id',
    ];
}
