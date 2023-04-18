<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function show()
    {
        $members = Member::all();

        return view('members', [
            "members" => $members
        ]);
    }

    public function create()
    {
        return view('membercreate');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'registration' => '',
        ]);

        Member::create($data);
    }
}
