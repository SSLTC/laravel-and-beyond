<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use DateTime;
use Illuminate\Http\RedirectResponse;

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

    public function store(): RedirectResponse
    {
        $data = request()->validate([
            'name' => 'required',
        ]);

        //Member::create($data);
        Member::create([
            'name' => request()->name,
            'registration' => now()->format('Y-m-d'),
        ]);

        return redirect(route('members.show'));
    }

    public function destroy($id): RedirectResponse
    {
        Member::destroy($id);

        return redirect(route('members.show'));
    }
}
