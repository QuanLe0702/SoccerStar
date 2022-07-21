<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

      // khai báo table ứng với model
      protected $table = "orderdetails";
      // khai báo trường khóa chính
      protected $primaryKey = 'orderDetail_id';
      protected $guarded =[];
      public $timestamps = false;
      // mặc định khóa chính sẽ tự động tăng
      public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
      protected $fillable = [
          'orderDetail_id',
          'orderDetail_quantity',
          'orderDetail_price',
          'product_size',
          'order_id',
          'product_id'
      ];

      public function products(){
        return $this->belongsTo(related: Product::class, foreignKey: 'product_id', ownerKey: 'id');
     }

     public function orders(){
        return $this->belongsTo(related: Order::class, foreignKey: 'order_id', ownerKey: 'order_id');
     }
}
