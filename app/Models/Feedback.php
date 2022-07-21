<?php

namespace App\Models;

use CurlHandle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    // khai báo table ứng với model
    protected $table = "feedbacks";
    // khai báo trường khóa chính
    protected $primaryKey = 'feedback_id';
    protected $guarded =[];
    public $timestamps = false;
    // mặc định khóa chính sẽ tự động tăng
    public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
    protected $fillable = [
        'feedback_id',
        'feedback_name',
        'feedback_email',
        'feedback_content',
        'feedback_date',
        'customer_id'
    ];

    public function customers(){
        return $this->belongsTo(related: CurlHandle::class, foreignKey: 'customer_id', ownerKey: 'customer_id');
     }
}
