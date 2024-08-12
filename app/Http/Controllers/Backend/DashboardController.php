<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user()->user_type;
        if ($user == 1) {
            return view('Frontend.admin.home');

        }else if($user == 0){
            return view('Frontend.user.home');
        }

        return view('welcome');
    }
}
