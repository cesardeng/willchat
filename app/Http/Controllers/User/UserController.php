<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Auth;

class UserController extends Controller
{

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        View::share('user', Auth::user());
    }
}
