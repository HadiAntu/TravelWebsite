<?php

namespace App\Http\Controllers;
use App\Models\Team;
use App\Models\Trip;
use App\Models\Blog;
use App\Models\testimonial;
use App\Models\Contact;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $testimonial=testimonial::all();
        $trip=trip::all();
        $team=team::all();
        $data=blog::all();
        return view('home.userpage', compact('team','data','testimonial','trip'));
    }

    
    public function singlepageBlog($id)
    {
        $blog=blog::find($id);
        
        return view('home.singlepageBlog', compact('blog'));
    }
    public function aboutUs()
    {
        
        $team=team::all();
        return view('home.aboutSingelPage',compact('team'));
    }
    public function blogMainPage()
    {
        
        $data=blog::all();
        return view('home.blogMainPage',compact('data'));
    }
    public function ContactUs()
    {
        
        
        return view('home.ContactUs');
    }


    public function message(Request $request)
    {
   

        $Contact=new Contact();
        $Contact->first=$request->first;
        $Contact->last=$request->last;
        $Contact->email=$request->email;
        $Contact->message=$request->message;
       

       
        $Contact->save();
        return redirect('/ContactUs')->with('message', 'Contact Added Successfully');

    }

    public function testimonial(Request $request)
    {
   

        $testimonial=new testimonial();
        $testimonial->testimonial=$request->testimonial;
       

        $image=$request->image;
        if ($image) {
        $image=$request->image;
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->image->move('Testimonialimage',$imagename);
        $testimonial->image= $imagename;
        }

        $testimonial->save();
        return redirect('/')->with('message', 'Testimonial Added Successfully');

    }
}
