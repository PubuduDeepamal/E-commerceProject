<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Models\User;

use App\Models\Cart;

use App\Models\Order;

use GuzzleHttp\Client;


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

            $user=auth()->user();

            $count=cart::where('phone',$user->phone)->count();


            return view('user.home',compact('data','count'));
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


            if($search=='')
            {

                $data = Product::paginate(3);

                return view('user.home',compact('data'));

            }

            $data = product::where('title', 'Like' , '%' .$search. '%')->get();

            return view('user.home', compact('data'));


    }

    public function addcart(Request $request, $id)
    {

        if(Auth::id())
        {

            $user=auth()->user();

            $product=product::find($id);

            $cart=new cart;

            $cart->name=$user->name;

            $cart->phone=$user->phone;

            $cart->address=$user->address;

            $cart->product_title=$product->title;

            $cart->price=$product->price;

            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect() ->back()->with('message','Product Added Successfully');
        }

        else
        {
            return redirect('login');
        }

    }

    public function showcart()
    {

        $user=auth()->user();

        $cart=cart::where('phone',$user->phone)->get();

        $count=cart::where('phone',$user->phone)->count();

        return view('user.showcart',compact('count','cart'));
    }

    public function deletecart($id)
    {
        $data=cart::find($id);

        $data->delete();

        return redirect()->back()->with('message','Product Remove Successfully');
    }

    public function confirmorder(Request $request)
        {
            $user = auth()->user();

            $name = $user->name;

            $phone = $user->phone;

            $address = $user->address;

            foreach ($request->productname as $key => $productname)
             {
                $order = new order;

                $order->product_name = $request->productname[$key];

                $order->price = $request->price[$key];

                $order->quantity = $request->quantity[$key];

                $order->name=$name;

                $order->phone=$phone;

                $order->address=$address;

                $order->status='not delivered';

                $order->save();


            }

            DB::table('carts')->where('phone',$phone)->delete();

            return redirect()->back()->with('message','Product Ordered Successfully');
        }

        public function Homeproduct()
        {

            if(Auth::id())
            {
                $user=auth()->user();

                $count=cart::where('phone',$user->phone)->count();

                $data = Product::paginate(6);

                return view('user.Homeproduct',compact('data','count'));
            }
            else
            {

                $data = Product::paginate(6);

                return view('user.Homeproduct',compact('data'));
            }


        }

        public function abouthome()
        {
            // Initialize data to be sent to the view
            $viewData = [];

            // Check if user is authenticated
            if (Auth::id()) {
                $user = auth()->user();
                $viewData['count'] = cart::where('phone', $user->phone)->count();
            }

            // Fetch the external API data
            $client = new Client();
            $response = $client->get('https://reqres.in/api/users?page=1');
            $users = json_decode($response->getBody())->data;
            // return $users;

            // Paginate the results manually
            $perPage = 6; // items per page
            $currentPage = request()->get('page', 1);
            $slicedCollection = array_slice($users, ($currentPage - 1) * $perPage, $perPage);
            $viewData['data'] = new \Illuminate\Pagination\LengthAwarePaginator(
                $slicedCollection,
                count($users),
                $perPage,
                $currentPage,
                ['path' => \Illuminate\Pagination\Paginator::resolveCurrentPath()]
            );

            return view('user.abouthome', $viewData);
        }

}
