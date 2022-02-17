<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $fullName;

    public function fullName(Request $request){ //ekhane Request hocche class ar $request hocche predefined object
//        return $request->first_name. ' '.$request->last_name;
        $this->fullName = $request->first_name. ' '.$request->last_name;
        return view('home', ['result' => $this->fullName]);

    }
}
