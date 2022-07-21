<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;

// Quân
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\SizeController;

// long
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\BrandController;

//Tuan
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\UserOrderController;
use App\Http\Controllers\UserOrderDetailController;

Route::get('/', function () {
    return view('welcome');
});


/*(-------ADMIN--------)*/
// Huyen
// dang nhap admin
Route::get('admin/login-admin',[AdminController::class,'login'])->name('admin.login');
Route::post('admin/post-login',[AdminController::class,'postLogin'])->name('admin.postLogin');
Route::get('admin/dashboard-admin',[AdminController::class,'dashboard'])->name('admin.dashboard')->middleware('checklogin3::class');
Route::get('logout-admin',[AdminController::class,'logout'])->name('admin.logout')->middleware('checklogin::class');
Route::get('admin/dashboard1-admin',[AdminController::class,'dashboard1'])->name('admin.dashboard1')->middleware('checklogin13::class');
Route::get('admin/dashboard2-admin',[AdminController::class,'dashboard2'])->name('admin.dashboard2')->middleware('checklogin23::class');

// khach hàng
Route::get('admin/customer',[AdminController::class,'customer'])->name('admin.customer')->middleware('checklogin23::class');
Route::get('admin/{id}/show-customer',[AdminController::class,'showCustomer'])->name('admin.showCustomer')->middleware('checklogin23::class');
Route::get('admin/{id}/edit-customer',[AdminController::class,'editCustomer'])->name('admin.editCustomer')->middleware('checklogin23::class');
Route::post('admin/{id}/post-edit-customer',[AdminController::class,'postEditCustomer'])->name('admin.postEditCustomer')->middleware('checklogin23::class');
Route::get('admin/{id}/delete-customer',[AdminController::class,'deleteCustomer'])->name('admin.deleteCustomer')->middleware('checklogin23::class');

// bình luận
Route::get('admin/comment',[AdminController::class,'comment'])->name('admin.comment')->middleware('checklogin13::class');
Route::get('admin/{id}/reply-comment',[AdminController::class,'replyComment'])->name('admin.replyComment')->middleware('checklogin13::class');
Route::post('admin/{id}/post-reply-comment',[AdminController::class,'postReplyComment'])->name('admin.postReplyComment')->middleware('checklogin13::class');
Route::get('admin/{id}/delete-comment',[AdminController::class,'deleteComment'])->name('admin.deleteComment')->middleware('checklogin13::class');


// phản hồi
Route::get('admin/feedback',[AdminController::class,'feedback'])->name('admin.feedback')->middleware('checklogin23::class');
Route::get('admin/{id}/show-feedback',[AdminController::class,'showFeedback'])->name('admin.showFeedback')->middleware('checklogin23::class');
Route::get('admin/{id}/delete-feedback',[AdminController::class,'deleteFeedback'])->name('admin.deleteFeedback')->middleware('checklogin23::class');

// Quân
//news
Route::get('admin/news/index', [NewsController::class, 'index'])->name('admin.news.index')->middleware('checklogin23::class');
Route::get('admin/news/create', [NewsController::class, 'create'])->name('admin.news.create')->middleware('checklogin23::class');
Route::post('admin/news/postCreate', [NewsController::class, 'postCreate'])->name('admin.news.postCreate')->middleware('checklogin23::class');
Route::get('admin/news/{news_id}/update', [NewsController::class, 'update'])->name('admin.news.update')->middleware('checklogin23::class');
Route::post('admin/news/{news_id}/postUpdate', [NewsController::class, 'postUpdate'])->name('admin.news.postUpdate')->middleware('checklogin23::class');
Route::get('admin/news/{news_id}/delete', [NewsController::class, 'delete'])->name('admin.news.delete')->middleware('checklogin23::class');
Route::get('admin/news/{news_id}/details', [NewsController::class, 'details'])->name('admin.news.details')->middleware('checklogin23::class');

//them sửa xóa admin
Route::get('admin/users/index', [UsersController::class, 'index'])->name('admin.users.index')->middleware('checklogin3::class');
Route::get('admin/users/create', [UsersController::class, 'create'])->name('admin.users.create')->middleware('checklogin3::class');
Route::post('admin/users/postCreate', [UsersController::class, 'postCreate'])->name('admin.users.postCreate')->middleware('checklogin3::class');
Route::get('admin/users/{id}/update', [UsersController::class, 'update'])->name('admin.users.update')->middleware('checklogin3::class');
Route::post('admin/users/{id}/postUpdate', [UsersController::class, 'postUpdate'])->name('admin.users.postUpdate')->middleware('checklogin3::class');
Route::get('admin/users/{id}/delete', [UsersController::class, 'delete'])->name('admin.users.delete')->middleware('checklogin3::class');
Route::get('admin/users/{id}/details', [UsersController::class, 'details'])->name('admin.users.details')->middleware('checklogin3::class');


// Long
//product
Route::get('admin/product/index',[ProductController::class,'index'])->name('product.index')->middleware('checklogin13::class');
Route::get('admin/product/create',[ProductController::class,'create'])->name('product.create')->middleware('checklogin13::class');
Route::post('admin/product/postCreate',[ProductController::class,'postCreate'])->name('product.postCreate')->middleware('checklogin13::class');
Route::get('admin/product/{id}/update}',[ProductController::class,'update'])->name('product.update')->middleware('checklogin13::class');
Route::post('admin/product/{id}/postUpdate',[ProductController::class,'postUpdate'])->name('product.postUpdate')->middleware('checklogin13::class');
Route::get('admin/product/{id}/delete',[ProductController::class,'delete'])->name('product.delete')->middleware('checklogin13::class');
Route::get('admin/product/{id}/details',[ProductController::class,'details'])->name('product.details')->middleware('checklogin13::class');

//productType
Route::get('admin/product_type/index',[ProductTypeController::class,'index'])->name('productType.index')->middleware('checklogin13::class');
Route::get('admin/product_type/create',[ProductTypeController::class,'create'])->name('productType.create')->middleware('checklogin13::class');
Route::post('admin/product_type/postCreate',[ProductTypeController::class,'postCreate'])->name('productType.postCreate')->middleware('checklogin13::class');
Route::get('admin/product_type/{id}/update}',[ProductTypeController::class,'update'])->name('productType.update')->middleware('checklogin13::class');
Route::post('admin/product_type/{id}/postUpdate',[ProductTypeController::class,'postUpdate'])->name('productType.postUpdate')->middleware('checklogin13::class');
Route::get('admin/product_type/{id}/delete',[ProductTypeController::class,'delete'])->name('productType.delete')->middleware('checklogin13::class');
// slider
Route::get('admin/slider/index',[SliderController::class,'index'])->name('slider.index')->middleware('checklogin13::class');
Route::get('admin/slider/create',[SliderController::class,'create'])->name('slider.create')->middleware('checklogin13::class');
Route::post('admin/slider/postCreate',[SliderController::class,'postCreate'])->name('slider.postCreate')->middleware('checklogin13::class');
Route::get('admin/slider/{id}/update}',[SliderController::class,'update'])->name('slider.update')->middleware('checklogin13::class');
Route::post('admin/slider/{id}/postUpdate',[SliderController::class,'postUpdate'])->name('slider.postUpdate')->middleware('checklogin13::class');
Route::get('admin/slider/{id}/delete',[SliderController::class,'delete'])->name('slider.delete')->middleware('checklogin13::class');
//promotion
Route::get('admin/promotion/index',[PromotionController::class,'index'])->name('promotion.index')->middleware('checklogin13::class');
Route::get('admin/promotion/create',[PromotionController::class,'create'])->name('promotion.create')->middleware('checklogin13::class');
Route::post('admin/promotion/postCreate',[PromotionController::class,'postCreate'])->name('promotion.postCreate')->middleware('checklogin13::class');
Route::get('admin/promotion/{id}/update}',[PromotionController::class,'update'])->name('promotion.update')->middleware('checklogin13::class');
Route::post('admin/promotion/{id}/postUpdate',[PromotionController::class,'postUpdate'])->name('promotion.postUpdate')->middleware('checklogin13::class');
Route::get('admin/promotion/{id}/delete',[PromotionController::class,'delete'])->name('promotion.delete')->middleware('checklogin13::class');
Route::get('admin/promotion/{id}/details',[PromotionController::class,'details'])->name('promotion.details')->middleware('checklogin13::class');

//Tuan
//brand
Route::get('admin/brand/index',[BrandController::class,'index'])->name('brand.index')->middleware('checklogin13::class');
Route::get('admin/brand/create',[BrandController::class,'create'])->name('brand.create')->middleware('checklogin13::class');
Route::post('admin/brand/postCreate',[BrandController::class,'postCreate'])->name('brand.postCreate')->middleware('checklogin13::class');
Route::get('admin/brand/{id}/update}',[BrandController::class,'update'])->name('brand.update')->middleware('checklogin13::class');
Route::post('admin/brand/{id}/postUpdate',[BrandController::class,'postUpdate'])->name('brand.postUpdate')->middleware('checklogin13::class');
Route::get('admin/brand/{id}/delete',[BrandController::class,'delete'])->name('brand.delete')->middleware('checklogin13::class');


//order
Route::get('admin/orders/index', [OrdersController::class, 'index'])->name('orders.index')->middleware('checklogin23::class');
Route::get('admin/orders/{orders_id}/update', [OrdersController::class, 'update'])->name('orders.update')->middleware('checklogin23::class');
Route::post('admin/orders/{orders_id}/postUpdate', [OrdersController::class, 'postUpdate'])->name('orders.postUpdate')->middleware('checklogin23::class');
Route::get('admin/orders/{orders_id}/delete', [OrdersController::class, 'delete'])->name('orders.delete')->middleware('checklogin23::class');
Route::get('admin/orders/{orders_id}/details', [OrdersController::class, 'details'])->name('orders.details')->middleware('checklogin23::class');

//orderDetails
Route::get('admin/orderdetails/index', [OrderDetailsController::class, 'index'])->name('orderdetails.index')->middleware('checklogin23::class');
Route::get('admin/orderdetails/{orderDetail_id}/update', [OrderDetailsController::class, 'update'])->name('orderdetails.update')->middleware('checklogin23::class');
Route::post('admin/orderdetails/{orderDetail_id}/postUpdate', [OrderDetailsController::class, 'postUpdate'])->name('orderdetails.postUpdate')->middleware('checklogin23::class');
Route::get('admin/orderdetails/{orderDetail_id}/delete', [OrderDetailsController::class, 'delete'])->name('orderdetails.delete')->middleware('checklogin23::class');
Route::get('admin/orderdetails/{orderDetail_id}/details', [OrderDetailsController::class, 'details'])->name('orderdetails.details')->middleware('checklogin23::class');

/*(-------ADMIN END--------)*/





/*(-------USER--------)*/
// custome (trang chủ), đăng ký , đăng nhập, thông tin tài khoản
Route::get('user/pages/home',[CustomerController::class,'home'])->name('customer.home');
Route::get('user/register-user',[CustomerController::class,'register'])->name('customer.register');
Route::post('user/add',[CustomerController::class,'add'])->name('customer.add');
Route::get('user/logout',[CustomerController::class,'logout'])->name('customer.logout');
Route::get('user/login-user',[CustomerController::class,'login'])->name('customer.login');
Route::post('user/postlogin-user',[CustomerController::class,'postlogin'])->name('customer.postlogin');
Route::get('user/info-account',[CustomerController::class,'account'])->name('customer.account');
Route::post('user/update-user',[CustomerController::class,'update'])->name('customer.update');

// contact
Route::get('user/pages/contact',[CustomerController::class,'contact'])->name('customer.contact');
Route::post('user/post-Contact',[CustomerController::class,'postContact'])->name('customer.postContact');


// huong dan
//insurance-Quan
Route::get('user/pages/insurance', [InsuranceController::class, 'insurance'])->name('user.insurance');
Route::get('user/pages/size', [SizeController::class, 'size'])->name('user.size');
Route::get('user/pages/news', [NewsController::class, 'news'])->name('user.news');
Route::get('user/pages/{news_id}/news_details', [NewsController::class, 'news_details'])->name('user.news_details');

// san pham-Long
Route::get('user/pages/product',[UserController::class,'product'])->name('user.product');
Route::get('user/pages/{product_id}/detailProduct',[UserController::class,'detailProduct'])->name('user.detailProduct');
Route::get('user/pages/brand/{id}',[UserController::class,'show_brand'])->name('user.showbrand');
Route::get('user/pages/cate/{id}',[UserController::class,'show_category'])->name('user.showcategory');
Route::get('user/pages/giày-cỏ-tự-nhiên',[UserController::class,'giay_co_tu_nhien'])->name('user.giay_co_tu_nhien');
Route::get('user/pages/giày-cỏ-nhân-tạo',[UserController::class,'giay_co_nhan_tao'])->name('user.giay_co_nhan_tao');
Route::get('user/pages/giày-futsal',[UserController::class,'giay_futsal'])->name('user.giay_futsal');
Route::get('user/pages/phụ-kiện',[UserController::class,'phu_kien'])->name('user.phu_kien');
Route::get('user/pages/price/{price}',[UserController::class,'show_price'])->name('user.showprice');
Route::get('/',[UserController::class,'comment'])->name('user.comment');
Route::post('/',[UserController::class,'product'])->name('user.sortBy');

//checkout-tuan
Route::get('user/pages/checkout',[CheckOutController::class,'create'])->name('checkout.create');
Route::post('user/pages/postCheckout',[CheckoutController::class,'postCreate'])->name('checkout.postCreate');

//user order
Route::get('user/pages/userorder',[UserOrderController::class,'index'])->name('userorder.index');
//Route::get('user/pages/userorderdetails/{orderDetail_id}/details', [UserOrderDetailController::class, 'details'])->name('userorderdetail.details');
/*(-------USER END--------)*/




