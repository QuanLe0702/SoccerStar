<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

        // khai báo table ứng với model
        protected $table = "promotionS";
        // khai báo trường khóa chính
        protected $primaryKey = 'promotion_id';
        protected $guarded =[];
        public $timestamps = false;
        // mặc định khóa chính sẽ tự động tăng
        public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
        protected $fillable = [
            'promotion_id',
            'promotion_name',
            'promotion_type',
            'promotion_time_start',
            'promotion_time_end',
            'promotion_value',
            'product_id', 
            'product_type_id',
            'created_at',
            'updated_at'
        ];
        public function product(){
            return $this->hasOne(Product::class,'id','product_id');
        }
        public function product_type(){
            return $this->hasOne(Product::class,'id','product_type_id');
        }
}
