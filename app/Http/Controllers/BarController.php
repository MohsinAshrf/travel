<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Contact;
use App\Models\Feedback;
use App\Models\Pkg;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class BarController extends Controller
{

  
      public function index()
      {
        
        $pkg = Pkg::orderBy('day', 'asc')->limit(9)->get();        
        $pkg->transform( function($pkgs){
            $pkgs->content = Str::words($pkgs->content, 26, '...');
            return  $pkgs;
        });
        $feedbacks = Feedback::orderby('id','desc')->limit(9)->get();
        $feedbacks->transform(function($feedback){
            $feedback->comment = Str::words($feedback->comment, 26, '...');
            return $feedback;
        });
          return view('index' , compact('pkg','feedbacks')); 
      }

      // pakages show
      public function packageshow($id){
        $pkg = Pkg::findOrFail($id);
        
        return view('admin.pkg.show',compact('pkg'));
      }

      // about section
      public function about()
      {
          return view('about'); 
      }
      // public function showabout(){
      //   return view('showabout');
      // }


      // Services show
      public function services()
      {
          return view('service');  
      }
  


      // view pakages show
      public function packages()
      {
        $pkg = Pkg::OrderBy('day' , 'asc')->get();

          return view('package',compact('pkg'));  
      }
  
    //   show destinations
      public function destination()
      {
          return view('destination');  
      }

      // show booking 
  
      public function booking()
      {
          return view('booking'); 
    }

    public function booked($id)
{
    $pkg = Pkg::findOrFail($id);
    return view('booked', compact('pkg'));
}

        /// show contact 
      public function contact()
      {
          return view('contact'); 
      }
}
