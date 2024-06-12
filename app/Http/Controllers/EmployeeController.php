<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{

    public function manageForeign()
    {
        if (Auth::user()->type == 'admin') {
            # code...
            $data = User::where('type','employee')->latest()->get();
            return view('admin.dashboard',compact('data'));
        }else {
            return back();
        }
    }
    public function update(Request $request, $id)
    {
        $update = User::where('id',$id)->update([
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

        return redirect(route('dashboard'))->with('success','Updated Successfully!');
    }

    public function add($id)
    {
        $data = User::find($id);

        return view('admin.add',compact('data'));
    }

    public function submit(Request $request, $id)
    {
        // dd($request->all());

        $user = User::find($id);
        $user->number_of_work_permit = $request->number_of_work_permit;
        $user->work_permit_validity = $request->work_permit_validity;
        $user->organization = $request->organization;
        $user->tax_payer_code = $request->tax_payer_code;
        $user->work_region = $request->work_region;
        $user->issue_date_and_time = $request->issue_date_and_time;
        $user->status = $request->status;
        $user->update();

        return back()->with('success','updated!');
    }
}
