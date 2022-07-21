<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    
      // khai báo table ứng với model
      protected $table = "sliders";
      // khai báo trường khóa chính
      protected $primaryKey = 'id';
      protected $guarded =[];
      public $timestamps = false;
      // mặc định khóa chính sẽ tự động tăng
      public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
      protected $fillable = [
          'id',
          'slider_image',
          'product_id',
          'numerical_order',
          'created_at',
          'updated_at'
      ];

      public function product(){
        return $this->belongsTo(related: Product::class, foreignKey: 'product_id', ownerKey: 'id');
     }
}
