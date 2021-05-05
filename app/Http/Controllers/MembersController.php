<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Member;
use App\Models\MemberType;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('members.index',['members'=>Member::all(),'count_members'=>Member::all()->count()]);
    }

    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create',['committees'=>Committee::all(),'types'=>MemberType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            ['name'=>'required',
        ]);
         $member = new Member();
         $member->name = $request->name;
         $member->description = $request->description;
         $member->email = $request->email;
         $member->tel = $request->tel;
         $member->committee_id = $request->committee_id;
         $member->member_type_id = $request->member_type_id;
         $member->president = $request->president;
         $member->image = '/media/'.$request->file('image')->store('members','media');
            $member->save();
         return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('members.edit' , [
            'member' => $member,
            'committees'=>Committee::all(),
            'types'=>MemberType::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Member $member): \Illuminate\Http\RedirectResponse
    {
//        dd($request->all());
        $member->name = $request->name;
        $member->description = $request->description;
        $member->email = $request->email;
        $member->tel = $request->tel;
        $member->member_type_id = $request->member_type_id;
        $member->committee_id = $request->committee_id;
        $member->image = $request->hasFile('image')?'/media/'.$request->file('image')->store('members','media'):$member->image;
        $member->save();

//        $member->update($request->except(['image']));
//        if($request->hasFile('image')){
//            $member->image='/media/'.$request->file('image')->store('members','media');
//            $member->update();
//        }

        return redirect()->route('members.index')
            ->with('status' , 'member has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Member $member): \Illuminate\Http\RedirectResponse
    {
        $member->delete();

        return redirect()->back();
    }
}
