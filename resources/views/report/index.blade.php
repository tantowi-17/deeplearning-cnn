@extends('main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Reports Listing</li>
                    </ol>
                </div>
                <h4 class="page-title">Reports</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="category-filter">
                    <select id="categoryFilter" class="form-control">
                        <option value="">Show All</option>
                        <option value="ADMIN">Admin</option>
                        <option value="KASIR_1">Kasir 1</option>
                        <option value="KASIR_2">Kasir 2</option>
                    </select>
                </div>
                <table id="filterTable"  data-index="1" class="table table-bordered table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>User</th>
                        <th>Gender</th>
                        <th>Expression</th>
                        <th>Created Date</th>
                        <th>Last Updated</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reports as $index => $value)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->user_id }}</td>
                            <td>{{ $value->gender }}</td>
                            <td>{{ $value->expression }}</td>
                            <td>{{ $value->created_at}}</td>
                            <td>{{ $value->updated_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
