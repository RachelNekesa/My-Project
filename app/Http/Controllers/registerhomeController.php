<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registerhome;

class registerhomeController extends Controller
{
  public function registerhome()
    {
        return view('registerhome');
    }
    public function store(Request $request)
    {
      $registerhome = new Registerhome;
          $registerhome->name =$request->name;
          $registerhome->category =$request->category;
          $registerhome->phone =$request->phone;
          $registerhome->email=$request->email;
          $registerhome->location=$request->location;
          $registerhome->image =$request->image;
          $registerhome->description=$request->description;
          $registerhome->save();
        return redirect('registerhome')->with('status', 'Welfare Home registered successfully');
    }



}
