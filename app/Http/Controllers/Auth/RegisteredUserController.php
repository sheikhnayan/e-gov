<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('frontend.form.form1-en');
    }

    public function creates(): View
    {
        return view('auth.register');
    }

    public function form(): View
    {
        return view('frontend.form.form2-employee-en');
    }

    public function form1(Request $request){
        if ($request->option_id == 1) {
            # code...
            return view('frontend.form.form2-employee-en');
        }elseif( $request->option_id == 2) {
            return view('frontend.form.form3-foreign-en');
        }else{
            return view('frontend.form.form4-rus');
        }
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required'],
        //     'username' => ['required', 'string', 'unique:'.User::class],
        //     'password_txt' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        if (isset($request->staffing_list)) {
            # code...
            $staffing_list = time().'.'.$request->staffing_list->extension();
            $request->staffing_list->move(public_path(), $staffing_list);
        }else {
            $staffing_list = null;
        }

        if (isset($request->legal_registration_certificate)) {
            # code...
            $legal_registration_certificate = time().'.'.$request->legal_registration_certificate->extension();
            $request->legal_registration_certificate->move(public_path(), $legal_registration_certificate);
        }else {
            $legal_registration_certificate = null;
        }

        if (isset($request->license_to_carry_out_licensed_activities)) {
            # code...
            $license_to_carry_out_licensed_activities = time().'.'.$request->license_to_carry_out_licensed_activities->extension();
            $request->license_to_carry_out_licensed_activities->move(public_path(), $license_to_carry_out_licensed_activities);
        }else {
            $license_to_carry_out_licensed_activities = null;
        }

        if (isset($request->photo)) {
            # code...
            $photo = time().'.'.$request->photo->extension();
            $request->photo->move(public_path(), $photo);
        }else {
            $photo = null;
        }

        if (isset($request->passport_1)) {
            # code...
            $passport_1 = time().'.'.$request->passport_1->extension();
            $request->passport_1->move(public_path(), $passport_1);
        }else {
            $passport_1 = null;
        }

        if (isset($request->pasport_2)) {
            # code...
            $pasport_2 = time().'.'.$request->pasport_2->extension();
            $request->pasport_2->move(public_path(), $pasport_2);
        }else {
            $pasport_2 = null;
        }


        $user = User::create([
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
            'type' => $request->type,
            'staffing_list' => $staffing_list,
            'legal_registration_certificate' => $legal_registration_certificate,
            'license_to_carry_out_licensed_activities' => $license_to_carry_out_licensed_activities,
            'email' => $request->email,
            'password' => Hash::make($request->password_txt),
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
            'photo' => $photo,
            'passport_1' => $passport_1,
            'pasport_2' => $pasport_2,
            'doc_number' => $request->doc_number,
        ]);

        event(new Registered($user));

        // Auth::login($user);

        // return redirect(route('dashboard', absolute: false));

        return redirect(route('/'));
    }
}
