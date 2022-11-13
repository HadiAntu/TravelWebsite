<?php

namespace App\Http\Controllers;
use Stripe;
use Session;
use App\Models\Trip;
use App\Models\user;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TripController extends Controller
{
    public function trip()
    {
        
        
        return view('admin.trip');
       
    }
   
    public function singlepageTrp($id)
    {
        $trip=trip::find($id);
        $price=$trip->price;
        
        return view('home.singlepageTrp', compact('trip','price'));
    }

    public function tripadd(Request $request)
    {
   

        $trip=new trip();
        $trip->title=$request->title;
        $trip->price=$request->price;
        
        $trip->description=$request->description;
        // $product->image=$request->Product_image;

        $image=$request->image;
        if ($image) {
        $image=$request->image;
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->image->move('tripimage',$imagename);
        $trip->image= $imagename;
        }

        $trip->save();
        return redirect('admin/trip')->with('message', 'trip Added Successfully');

    }

    public function bookNowForm($price,$id)
    {
        // dd($id);
        return view('home.bookNowForm',compact('price'));
    }
    public function stripePost(Request $request, $price)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $price * 100,
                "currency" => "bdt",
                "source" => $request->stripeToken,
                "description" => "Thank You for payment" 
        ]);

        $user=Auth::user();
        $id = $user->id;
        // dd($id);
        $name=user::find($id);
        // $cart=cart::where('userId','=',$id)->get();
$n = $name->name;
        $booking=new booking();
            $booking->name=$n;
            $booking->email=$name->email;
            // $booking->price=$price;
            $booking->save();

        Session::flash('success', 'Payment successful! You will get our Call soon');
        return back();
    }

    public function order()
    {
        return view('admin.order');
    }
}
