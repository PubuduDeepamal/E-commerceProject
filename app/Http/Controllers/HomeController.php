<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;



class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            $data = Product::paginate(3);

            return view('user.home',compact('data'));
        }
    }

    public function index()
    {

        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {

            $data = Product::paginate(3);

            return view('user.home',compact('data'));
        }
        
    }

    public function search(Request $request)
    {
            $search = $request->search;

            $data = product::where('title', 'Like' , '%' .$search. '%')->get();

            return view('user.home', compact('data'));

            
    }
}
