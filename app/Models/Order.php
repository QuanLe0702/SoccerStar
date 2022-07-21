<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    // khai báo table ứng với model
    protected $table = "orders";
    // khai báo trường khóa chính
    protected $primaryKey = 'order_id';
    protected $guarded =[];
    public $timestamps = false;
    // mặc định khóa chính sẽ tự động tăng
    public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
    protected $fillable = [
        'order_id',
        'order_date',
        'order_status',
        'order_note',
        'customer_telephone',
        'customer_name',
        'customer_address',
        'customer_mail',
        'customer_id'
    ];

    public function orderdetails(){
        return $this->hasMany(related: OrderDetail::class, foreignKey:'order_id', localKey:'order_id');
     }

     public function customers(){
        return $this->belongsTo(related: Customer::class, foreignKey: 'customer_id', ownerKey: 'customer_id');
     }
}
