<?php

namespace App\Http\Controllers\SEC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassCardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('permission:view role',['only' => ['index']]);
        // $this->middleware('permission:create role',['only' => ['create','store','addPermissionToRole','givePermissionToRole']]);
        // $this->middleware('permission:update role',['only' => ['update','edit']]);
        // $this->middleware('permission:delete role',['only' => ['destroy']]);
    }

    public function index()
    {
        return view('SEC.pass-card-index');
    }
}
