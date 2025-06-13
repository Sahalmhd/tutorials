<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\Return_;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::withTrashed()->paginate(10);
        return view('home', compact('users'));
    }

    public function create()
    {
        return view('Users.create');
    }

    public function save(Request $request)
    {
        $validated = $request ->validate(
            [
                'name'=>'required|max:255',
                'email'=>'required|unique:users|max:255',
                'password'=>'required'

            ]
            );

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();



        return redirect()->route('home')->with('message', 'user Created successfully');
    }

    public function edit($id)
    {
        $user = User::find(decrypt($id));
        return view('Users.edit', compact('user'));
    }
    public function view($id)
    {
        $user = User::find(decrypt($id));
        return view('Users.view', compact('user'));
    }   
    public function update(Request $request)
    {
        $user = User::find(decrypt($request->id));

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('index')->with('message', 'user update success');
    }

    public function delete($id)
    {

        User::find(decrypt($id))->delete();
        return redirect()->route('index')->with('message', 'user delete success');
    }

    public function activate($id)
    {

        $user =  User::withTrashed()->find(decrypt($id))->restore();

        return redirect()->route('index')->with('message', 'user Activated success');
    }
}
