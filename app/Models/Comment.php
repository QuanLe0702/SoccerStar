<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
// khai báo table ứng với model
protected $table = "comments";
// khai báo trường khóa chính
protected $primaryKey = 'comment_id';
protected $guarded =[];
public $timestamps = false;
// mặc định khóa chính sẽ tự động tăng
public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
protected $fillable = [
    'comment_id',
    'comment_point',
    'comment_content',
    'comment_date',
   
    'comment_reply',
    'product_id', 
    'customer_id'
];

// n-1
 public function products(){
    return $this->belongsTo(related: Product::class, foreignKey: 'product_id', ownerKey: 'id');
 }

 public function customers(){
    return $this->belongsTo(related:Customer::class, foreignKey: 'customer_id', ownerKey: 'customer_id');
 }
 
}
