<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Product;

use App\Models\Order;

class AdminController extends Controller
{
    public function product()
   {

        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.product');
            }

            else{
                return redirect()->back();
            }

        }

        else{
            return redirect('login');
        }

   }

   public function uploadproduct(Request $request)
   {
     $data = new product;

     $image =$request->file;

     $imagename =time().'.'.$image->getClientOriginalExtension();

     $request->file->move('productimage',$imagename);

     $data->image=$imagename;

     $data->title=$request->title;

     $data->price=$request->price;

     $data->description=$request->des;

     $data->quantity=$request->quantity;

     $data->save();

     return redirect()->back()->with('message','Product Added Successfully');

   }

   public function showproduct()
   {

        $data=product::all();

        return view('admin.showproduct',compact('data'));
   }

   public function deleteproduct($id)
   {

     $data=product::find($id);

     $data-> delete();

     return redirect()->back()->with('message','Product Delete Successfully');

   }

   public function updateview($id)
   {
       $data=product::find($id);

       return view('admin.updateview',compact('data'));

   }

   public function updateproduct(Request $request, $id)
   {
     $data=product::find($id);

     $image =$request->file;

     if($image)
     {

     $imagename =time().'.'.$image->getClientOriginalExtension();

     $request->file->move('productimage',$imagename);

     $data->image=$imagename;

     }

     $data->title=$request->title;

     $data->price=$request->price;

     $data->description=$request->des;

     $data->quantity=$request->quantity;

     $data->save();

     return redirect()->back()->with('message','Product Updated Successfully');


   }

   public function showorder()
   {

        $order=order::all();

        return view('admin.showorder',compact('order'));
   }

   public function updatestatus($id)
   {

        $order=order::find($id);

        $order->status='Delivered';

        $order->save();

        return redirect()->back();
   }
}
