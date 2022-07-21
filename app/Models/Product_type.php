<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    use HasFactory;

      // khai báo table ứng với model
      protected $table = "product_types";
      // khai báo trường khóa chính
      protected $primaryKey = 'id';
      protected $guarded =[];
      public $timestamps = false;
      // mặc định khóa chính sẽ tự động tăng
      public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
      protected $fillable = [
          'id',
          'product_type_name'
          ,'created_at','updated_at'
      ];
      
      public function products(){
        return $this->hasMany( related: Product::class, foreignKey:'product_type_id', localKey: 'id');
     }
}
