<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use DateTime;
use Illuminate\Http\RedirectResponse;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view('member.index', [
            "members" => $members
        ]);
    }

    public function create()
    {
        return view('member.create');
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

        return redirect(route('member.index'));
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('member.edit', ['member' => $member]);
    }

    public function patch(Request $request, $id)
    {
        $data = request()->validate([
            'name' => 'required',
        ]);

        Member::where('id', $id)->update([
            'name' => request()->name,
            //'registration' => now()->format('Y-m-d'),
        ]);

        return redirect(route('member.index'));
    }

    public function destroy($id): RedirectResponse
    {
        Member::destroy($id);

        return redirect(route('member.index'));
    }
}
