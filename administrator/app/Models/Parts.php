<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    use HasFactory;
    protected $table = 'parts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','icon','name','category_id','brand_id','price','extra_price',
    ];
}
