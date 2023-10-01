<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairOrders extends Model
{
    use HasFactory;
    protected $table = 'repair_orders';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','user_id','product_id','product_unique_no','service_no','parts','amount','payment_mode','schedule','address_id','address','city','state','pincode','status','remarks'
    ];
}
