<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminloginController extends BaseController
{
    public function index()
    {
        return view('auth.login');
    }
    public function forgotPassword()
    {
        return view('auth.forgotpassword');
    }
}
