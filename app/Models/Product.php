<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // khai báo table ứng với model
    protected $table = "products";
    // khai báo trường khóa chính
    protected $primaryKey = 'id';
    protected $guarded =[];
    public $timestamps = false;
    // mặc định khóa chính sẽ tự động tăng
    public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
    protected $fillable = [
        'id',
        'product_name',
        'product_price',
        'product_highlight',
        'product_date',
        'product_description',
        'product_image',
        'product_type_id', 
        'brand_id',
        'created_at','updated_at'
    ];

    public function orderdetails(){
        return $this->hasMany(related: OrderDetail::class, foreignKey:'product_id', localKey:'id');
     }
     public function comments(){
        return $this->hasMany(related: Comment::class, foreignKey:'product_id', localKey:'id');
     }
     public function promotions(){
        return $this->hasMany(related: Promotion::class, foreignKey:'product_id', localKey:'id');
     }
     public function sliders(){
        return $this->hasMany(related: Slide::class, foreignKey:'product_id', localKey:'id');
     }

     public function product_type(){
        return $this->belongsTo(related: Product_type::class, foreignKey: 'product_type_id', ownerKey: 'id');
     }
     public function brand(){
        return $this->belongsTo(related: Brand::class, foreignKey: 'brand_id', ownerKey: 'id');
     }
}
