<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Registerhome;

class AdminController extends Controller
{
    public function user()
    {
      $data=user::all();
      return view("admin.users",compact("data"));
    }

        public function registerhome()
        {
          $registerhomedata=registerhome::all();
          return view("admin.registerhomeadmin",compact("registerhomedata"));
        }
}
