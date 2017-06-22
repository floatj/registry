<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 顯示 ulist
     *
     * @return Response
     */
    public function show()
    {
        return view('userlist');

    }
}
