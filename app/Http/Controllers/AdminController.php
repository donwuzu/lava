<?php

namespace App\Http\Controllers;

use App\Models\careerData;
use Illuminate\Http\Request;

use App\Models\User;



use App\Models\Document;
use App\Models\CareerInfo;


class AdminController extends Controller
{
    public function index(){
        return view('admin.index',
         ['userCount' => User::count()] ,
         ['postCount' => careerData::count()] 
        );
     }

     public function home()     {
      // Fetch all career data with related documents
      $careers = careerData::with('user')->get();

      // Pass the data to the admin home view
      return view('admin.home', compact('careers'));
  }

     public function docs()
     {
         return view('admin.documents'); 
     }

     public function reports() {

      return view ('admin.reports');
   }

   


}
