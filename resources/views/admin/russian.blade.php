@extends('admin.layouts.main')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card  card-tasks">
                        <div class="card-header ">
                            <h4 class="card-title">Russian Application list</h4>
                            {{-- <p class="card-category">Backend development</p> --}}
                        </div>
                        <div class="card-body ">
                            <div class="table-full-width">
                                <form action="{{ route('foreign-update',[$data->id]) }}" method="post">
                                    @csrf
                                    <table cellpadding="4" cellspacing="4">
                                        <tr>
                                            <td><label class="lab_2899">Surname</label></td>
                                            <td><input type="text" name="name" value="name" id="pred_lname" class="form-control" required="required"
                                                    value="" /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Representative's name</label></td>
                                            <td><input type="text" name="last_name" value="last_name" id="pred_fname" class="form-control" required="required"
                                                    /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Name of legal entity</label></td>
                                            <td>
                                                <textarea name="name_of_legal_entity" id="entity_name" class="form-control" required="required">{{ $data->legal_entity }}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">State registration number</label></td>
                                            <td><input type="text" value="state_registration_number" name="state_registration_number" id="gosreg_numb" class="form-control" required="required"
                                                    /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Tax payer code</label></td>
                                            <td><input type="text" name="tax_payer_code" value="tax_payer_code" id="inn_numb" class="form-control" required="required"
                                                 /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Founders of legal entity</label></td>
                                            <td>
                                                <textarea name="founders_of_legal_entity" id="entity_founders" class="form-control" required="required">{{ $data->founders_of_legal_entity }}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Activity type</label></td>
                                            <td>
                                                <textarea name="activity_type" id="entity_activity_type" class="form-control" required="required">{{ $data->activity_type }}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Legal address</label></td>
                                            <td>
                                                <textarea name="legal_address" id="entity_address" class="form-control" required="required">{{ $data->legal_address }}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Actual activity address</label></td>
                                            <td>
                                                <textarea name="actual_activity_address" id="entity_actual_address" class="form-control" required="required">{{ $data->actual_activity_address }}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Phone number</label></td>
                                            <td><input type="text" name="mobile" id="entity_phone" class="form-control"
                                                    required="required" value="{{ $data->mobile }}" /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Email address</label></td>
                                            <td><input type="text" name="email" id="email_address" class="form-control"
                                                    required="required" value="{{ $data->email }}" /></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:20px"><label class="lab_2899">Staffing list</label></td>
                                            <td style="padding-top:20px">
                                                <img src="{{ asset($data->staffing_list) }}" width="300px" class="img-fluid">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-top:20px"><label class="lab_2899">Legal registration certificate</label></td>
                                            <td style="padding-top:20px">
                                                <img src="{{ asset($data->legal_registration_certificate) }}" width="300px" class="img-fluid">

                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-top:20px"><label class="lab_2899">License to carry out licensed
                                                    activities</label></td>
                                            <td style="padding-top:20px">
                                                <img src="{{ asset($data->license_to_carry_out_licensed_activities) }}" width="300px" class="img-fluid">

                                            </td>
                                        </tr>

                                        <tr>
                                            <td><label class="lab_2899">Login(latin letters and figures)</label></td>
                                            <td><input type="text" name="user_name" id="login_txt" class="form-control" required="required"
                                                    value="{{ $data->user_name }}" /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Status</label></td>
                                            <td>
                                            <select name="status" id="" class="form-control">
                                                <option value="0">Disapprove</option>
                                                <option value="1">Approve</option>
                                            </select>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><br>
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            {{-- <div class="stats">
                                <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
