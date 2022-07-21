<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Customer;
use App\Models\Feedback;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\ReplyCommentRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AdminController extends Controller
{	

    public function login()
    {
        return view('admin.login-admin');
    }

    public function postLogin(AdminLoginRequest $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password

        ];
        // ghi nhớ đăng nhập
        // $remember  = $request->has('remember');$remember

        if (Auth::attempt($arr)) {
            if (Auth::user()->role == 3) {
                return redirect()->route('admin.dashboard');
            } elseif (Auth::user()->role == 1) {
                return redirect()->route('admin.dashboard1');
            } elseif (Auth::user()->role == 2) {

                return redirect()->route('admin.dashboard2');
            }
        } else {
            return redirect()->route('admin.login')->with('thongbao', 'Email hoặc mật khẩu không đúng , vui lòng nhập lại!');
        }
    }

    // trang chủ quản lý
    public function dashboard()
    {
        return view('admin.dashboard-admin');
    }

    // trang chủ quản lý sản phẩm
    public function dashboard1()
    {
        return view('admin.dashboard1-admin');
    }

    // trang chủ quản lý khách hàng
    public function dashboard2()
    {
        return view('admin.dashboard2-admin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }


    // khach hang
    public function customer()
    {
        $customers = Customer::all();
        return view('admin.customer', ['customers' => $customers]);
    }

    public function showCustomer($customer_id)
    {
        $p = Customer::find($customer_id);
        return view('admin.show-customer', ['p' => $p]);
    }

    public function editCustomer($customer_id)
    {
        $p = Customer::find($customer_id);
        return view('admin.edit-customer', ['p' => $p]);
    }

    public function postEditCustomer(Request $request, $customer_id)
    {
        $customer_status = $request->input('customer_status');

        $p = Customer::find($customer_id);
        $p->update([
            'customer_status' => $customer_status,
        ]);
        return redirect()->route('admin.customer');
    }

    public function deleteCustomer($customer_id)
    {
        $p = Customer::find($customer_id);
        $p->delete();
        return redirect()->route('admin.customer');
    }

    // binh luan
    public function comment()
    {
        $comments = Comment::all();
        return view('admin.comment', ['comments' => $comments]);
    }

    public function replyComment($comment_id)
    {
        $p = Comment::find($comment_id);
        return view('admin.reply-comment', ['p' => $p]);
    }

    public function postReplyComment(ReplyCommentRequest $request, $comment_id)
    {
        $comment_reply = $request->comment_reply;

        $p = Comment::find($comment_id);
        $p->comment_reply = $comment_reply;
        $p->save();
        return redirect()->route('admin.comment');
    }

    public function deleteComment($comment_id)
    {
        $p = Comment::find($comment_id);
        $p->delete();
        return redirect()->route('admin.comment');
    }

    // phan hoi
    public function feedback()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedback', ['feedbacks' => $feedbacks]);
    }

    public function showFeedback($feedback_id)
    {
        $p = Feedback::find($feedback_id);
        return view('admin.show-feedback', ['p' => $p]);
    }

    public function deleteFeedback($feedback_id)
    {
        $p = Feedback::find($feedback_id);
        $p->delete();
        return redirect()->route('admin.feedback');
    }


    // 
}
