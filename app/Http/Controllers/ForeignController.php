<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ForeignController extends Controller
{

    public function manageForeign()
    {
        if (Auth::user()->type == 'admin') {
            # code...
            $data = User::where('type', 'foreign')->latest()->get();
            return view('admin.dashboard', compact('data'));
        } else {
            return back();
        }
    }

    public function edit($id) {
        return view('admin.foreigner',[
            'data'=>User::find($id)
        ]);
        
    }

    public function update(Request $request, $id)
    {
        $update = User::where('id', $id)->update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'legal_entity' => $request->name_of_legal_entity,
            'state_registration_number' => $request->state_registration_number,
            'tax_payer_code' => $request->tax_payer_code,
            'founders_of_legal_entity' => $request->founders_of_legal_entity,
            'activity_type' => $request->activity_type,
            'legal_address' => $request->legal_address,
            'address' => $request->address,
            'lang' => $request->lang,
            'long' => $request->long,
            'actual_activity_address' => $request->actual_activity_address,
            'mobile' => $request->mobile,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'patronymic' => $request->patronymic,
            'dob' => $request->dob,
            'place_of_birth' => $request->place_of_birth,
            'gender' => $request->gender,
            'passport_1' => $request->passport_1,
            'pasport_2' => $request->pasport_2,
            'country' => $request->country,
            'passport' => $request->passport,
            'date_issue' => $request->date_issue,
            'date_expire' => $request->date_expire,
            'person_without_citizenship' => $request->person_without_citizenship,
            'education' => $request->education,
            'whatsapp' => $request->whatsapp,
            'viber' => $request->viber,
            'doc_number' => $request->doc_number,
            'status' => $request->status,
        ]);

        return redirect(route('dashboard'))->with('success', 'Updated Successfully!');
    }
}
