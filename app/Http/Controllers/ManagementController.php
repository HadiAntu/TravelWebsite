<?php

namespace App\Http\Controllers;
use App\Models\Team;
use App\Models\Blog;
use App\Models\user;
use App\Models\trip;
use App\Models\booking;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function dashBoardHomePage()
    {
        $totalUser=user::all()->count();
            $totalblog=blog::all()->count();
            $totaltrip=Trip::all()->count();
            return view('admin.dashboard',compact('totalUser','totalblog','totaltrip'));
       
    }
    public function addTeam()
    {
        $data=team::all();
        return view('admin.addTeam', compact('data'));
       
    }

    public function teamMemberAdd(Request $request)
    {
   

        $team=new Team();
        $team->name=$request->name;
        $team->position=$request->position;
        $team->description=$request->description;
        // $product->image=$request->Product_image;

        $image=$request->image;
        if ($image) {
        $image=$request->image;
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->image->move('Teamimage',$imagename);
        $team->image= $imagename;
        }

        $team->save();
        return redirect('admin/addTeam')->with('message', 'Product Added Successfully');

    }

    
    public function delete($id)
    {
        $data=team::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'MemBer Deleted');
    }


// blog


    public function blog()
    {
        $data=blog::all();
        
        return view('admin.blog',compact('data'));
       
    }

    public function blogAdd(Request $request)
    {
   

        $blog=new blog();
        $blog->title=$request->title;
        
        $blog->description=$request->description;
        // $product->image=$request->Product_image;

        $image=$request->image;
        if ($image) {
        $image=$request->image;
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->image->move('Blogimage',$imagename);
        $blog->image= $imagename;
        }

        $blog->save();
        return redirect('admin/blog')->with('message', 'Blog Added Successfully');

    }

   public function booking()
   {
    $data=booking::all();
    return view('admin.order', compact('data'));
   }
   
}
