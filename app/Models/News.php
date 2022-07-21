<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

     // khai báo table ứng với model
     protected $table = "news";
     // khai báo trường khóa chính
     protected $primaryKey = 'news_id';
     protected $guarded =[];
     public $timestamps = false;
     // mặc định khóa chính sẽ tự động tăng
     public $incrementing = true; // false: khóa chỉnh sẽ không tự động tăng
     protected $fillable = [
        'news_id',
        'news_tite',
        'news_slug',
        'news_desc',
        'news_content',
        'news_meta_desc',
        'news_image'
     ];
}
