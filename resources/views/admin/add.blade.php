@extends('admin.layouts.main')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card  card-tasks">
                        <div class="card-header ">
                            <h4 class="card-title">Employee Application Data</h4>
                            {{-- <p class="card-category">Backend development</p> --}}
                        </div>
                        <div class="card-body ">
                            <div class="table-full-width">
                                <form action="{{ route('add-data',[$data->id]) }}" method="post">
                                    @csrf
                                    <label>Work Permit Number</label>
                                    <input type="text" name="number_of_work_permit" value="{{ $data->number_of_work_permit }}" class="form-control">
                                    <br>
                                    <label>Work Permit Validity</label>
                                    <input type="datetime-local" name="work_permit_validity" value="{{ $data->work_permit_validity }}" class="form-control">
                                    <br>
                                    <label>Organization</label>
                                    <input type="text" name="organization" value="{{ $data->organization }}" class="form-control">
                                    <br>
                                    <label>Tax Payer Code</label>
                                    <input type="text" name="tax_payer_code" value="{{ $data->tax_payer_code }}" class="form-control">
                                    <br>
                                    <label>Work Region</label>
                                    <input type="text" name="work_region" value="{{ $data->work_region }}" class="form-control">
                                    <br>
                                    <label>Issue date and Time</label>
                                    <input type="datetime-local" name="issue_date_and_time" value="{{ $data->issue_date_and_time }}" class="form-control">
                                    <br>
                                    <label>Work Permit Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="1">Approved</option>
                                        <option value="0">Disapproved</option>
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-success">Update</button>
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
