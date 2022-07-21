<?php

namespace App\Http\Controllers;
use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with(['users' => $users]);
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function postCreate(UsersRequest $request)
    {
        $users = $request->all();
        $p = new User($users);
        $p->name = $users['name'];
        $p->email = $users['email'];
        $p->password = bcrypt($users['password']);
        $p->role = $users['role'];
        $p->save();
        return redirect()->route('admin.users.index');
    }
    public function update($id)
    {
        $p = User::find($id);
        return view('admin.users.update', ['p' => $p]);
    }

    public function postUpdate(Request $request, $id)
    {
        $users = $request->all();        
        $p = User::find($id);
        $p->name = $users['name'];
        $p->email = $users['email'];
        $p->password = bcrypt($users['password']);
        $p->role = $users['role'];
        $p->save();
        return redirect()->route('admin.users.index');
    }
   
    public function details($id)
    {
        $p = User::find($id);
        return view('admin.users.details', ['p' => $p]);
    }

    public function delete($id)
    {
        $p = User::find($id);
        $p->delete();
        return redirect()->route('admin.users.index');
     
    }
}
