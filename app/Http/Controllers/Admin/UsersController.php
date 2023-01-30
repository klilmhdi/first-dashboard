<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function index()
    {
        $admin = DB::table('admin')->get();
        return view('dashboard.users.index', ["admins" => $admin]);
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {

        DB::table('admin')->insert([
            'name' => $request->fullname,
            'email' => $request->email,
            'status' => $request->status ?? 0,
        ]);

        return redirect()->route('admin.users.index');
    }
}
