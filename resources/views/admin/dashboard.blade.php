@extends('admin.layouts.main')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card  card-tasks">
                        <div class="card-header ">
                            @foreach ($data as $key => $item)
                            @if ($item->type == 'employee')
                            <h4 class="card-title">Employee Application list</h4>
                            @elseif($item->type == 'foreign')
                            <h4 class="card-title">Foreign Application list</h4>
                            @else
                            <h4 class="card-title">Russian Application list</h4>
                            @endif
                            @endforeach
                            {{-- <p class="card-category">Backend development</p> --}}
                        </div>
                        <div class="card-body ">
                            <div class="table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->mobile }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    @if ($item->type == 'employee')
                                                        <a href="/employee/{{ $item->id }}" class="btn btn-warning">Edit</a>
                                                    @elseif($item->type == 'foreign')
                                                        <a href="/foreign/{{ $item->id }}" class="btn btn-warning">Edit</a>
                                                    @else
                                                    <a href="/russian/{{ $item->id }}" class="btn btn-warning">Edit</a>
                                                    @endif
                                                    <a href="/add-data/{{ $item->id }}" class="btn btn-warning">Add Data</a>
                                                    <a target="_blank" href="/pdf/{{ $item->id }}" class="btn btn-warning">View Data</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
