<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class MemberController extends Controller
{
    public function index() {
        // $users = User::paginate(5);
        $users = DB::table('users')->orderBy('updated_at')->paginate(4);

        return view('members', [
            'members' => $users,
        ]);
    }
}
