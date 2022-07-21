<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\RegisterRequest;
use App\http\Requests\LoginRequest;
use App\http\Requests\infoRequest;
use App\http\Requests\ContactRequest;
use App\Models\Customer;
use App\Models\Feedback;
use Illuminate\Support\Facades\Session;

Session_start();
class CustomerController extends Controller
{

    // trang chủ khách hàng
    public function home()
    {
            return view('user.pages.home');
      
    }

    public function register()
    {
        return view('user.register-user');
    }

    // thêm khách hàng
    public function add(RegisterRequest $request)
    {
        $customer_name = $request->customer_name;
        $customer_email = $request->customer_email;
        $customer_password = md5($request->customer_password);
        $customer_confirm_password = md5($request->customer_confirm_password);
        $customer_telephone = $request->customer_telephone;
        $customer_address = $request->customer_address;

        if ($customer_password == $customer_confirm_password) {
            $p = new Customer();
            $p->customer_name = $customer_name;
            $p->customer_email = $customer_email;
            $p->customer_password = $customer_password;
            $p->customer_telephone = $customer_telephone;
            $p->customer_address = $customer_address;
            $p->save();
            return redirect()->route('customer.register')->with('thongbao', 'Đăng ký thành công.');
        } else {
            return redirect()->route('customer.register')->with('thongbao', ' Đăng ký thất bại!');
        }
    }

    
    public function logout()
    {
        Session::put('customer_name', null);
        Session::put('customer_id', null);
        Session::put('customer_telephone', null);
        Session::put('customer_email', null);
        Session::put('customer_address', null);
        Session::put('customer_image', null);
        Session::put('customer_password', null);
        Session::put('customer_status', null);
        return redirect()->route('customer.home');
    }

    public function login()
    {
        return view('user.login-user');
    }

    public function postlogin(LoginRequest $request)
    {
        $customer_email = $request->customer_email;
        $customer_password = md5($request->customer_password);

        $result = Customer::where('customer_email', $customer_email)
            ->where('customer_password', $customer_password)
            ->first();
        if (!$result) {
            return redirect()->route('customer.login')->with('thongbao', 'Tài khoản không tồn tại');
        }
        if ($result->customer_status == 1) {
            Session::put('customer_name', $result->customer_name);
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_telephone', $result->customer_telephone);
            Session::put('customer_email', $result->customer_email);
            Session::put('customer_address', $result->customer_address);
            Session::put('customer_image', $result->customer_image);
            Session::put('customer_password', $result->customer_password);
            Session::put('customer_status', $result->customer_status);
            return redirect()->route('customer.home');
        } else {
            return redirect()->route('customer.login')->with('thongbao', 'Tài khoản đã bị khóa');
        }
    }

    // trang thông tin tai khoản
    public function account()
    {
        if (Session::has('customer_id')) {
            $customer_id =  Session::get('customer_id');
            $p = Customer::find($customer_id);
            return view('user.info-account', ['p' => $p]);
        } 
    }

    public function update(infoRequest $request)
    {
        $customer_id = $request->customer_id;
        $customer_name = $request->customer_name;
        $customer_email = $request->customer_email;
        $customer_password = md5($request->customer_password);
        $customer_telephone = $request->customer_telephone;
        $customer_address = $request->customer_address;
        $customer_image = $request->customer_image;

        if ($request->hasFile('customer_image')) {
            $file = $request->file('customer_image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->route('customer.account')->with('thongbao', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            $p = Customer::find($customer_id);
            $imageName = $p->customer_image;
        }

        $p = Customer::find($customer_id);
        $p->customer_name = $customer_name;
        $p->customer_email = $customer_email;
        $p->customer_password = $customer_password;
        $p->customer_telephone = $customer_telephone;
        $p->customer_address = $customer_address;
        $p->customer_image = $imageName;
        $p->save();

        Session::put('customer_name', $p->customer_name);
        Session::put('customer_id', $p->customer_id);
        Session::put('customer_telephone', $p->customer_telephone);
        Session::put('customer_email', $p->customer_email);
        Session::put('customer_address', $p->customer_address);
        Session::put('customer_image', $p->customer_image);
        Session::put('customer_password', $p->customer_password);
        Session::put('customer_status', $p->customer_status);

        return redirect()->route('customer.account')->with('thongbao', 'Cập nhật tài khoản thành công.');
    }

// trang liên liên hệ
    public function contact(){
        $feedback = Feedback::orderby('feedback_date','desc')->get();
        return view('user.pages.contact')->with(compact('feedback'));
    }

    public function postContact(ContactRequest $request){
        $feedback_name = $request->feedback_name;
        $feedback_email = $request->feedback_email;
        $feedback_content = $request->feedback_content;
       if(Session::has('customer_id')){
        $customer_id  =  Session::get('customer_id');
       }else{
        $customer_id  = null;
       }
        $p = new Feedback();
        $p->feedback_name =  $feedback_name ;
        $p->feedback_email =$feedback_email;
        $p->feedback_content =  $feedback_content;
        $p->customer_id =  $customer_id;
        $p->save();
        return redirect()->route('customer.contact')->with('thongbao', 'Cảm ơn bạn đã phản hồi về website chúng tôi sẽ sớm phản hồi email cho bạn, Xin cảm ơn .');

    }
    
}
