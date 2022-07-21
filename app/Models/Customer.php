<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // khai báo table ứng với model
    protected $table = "customers";
    // khai báo trường khóa chính
    protected $primaryKey = 'customer_id';
    protected $guarded =[];
    public $timestamps = false;
    // mặc định khóa chính sẽ tự động tăng
    public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
    protected $fillable = [
        'customer_id',
        'customer_name',
        'customer_telephone',
        'customer_email',
        'customer_address',
        'customer_image',
        'customer_password',
        'customer_status'
    ];

    public function orders(){
        return $this->hasMany(related: Order::class, foreignKey:'customer_id', localKey:'customer_id');
     }
     public function feedbacks(){
        return $this->hasMany(related: Feedback::class, foreignKey:'customer_id', localKey:'customer_id');
     }
     public function comments(){
        return $this->hasMany(related: Comment::class, foreignKey:'customer_id', localKey:'customer_id');
     }
}
