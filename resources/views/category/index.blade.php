@extends('main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Category Listing</li>
                    </ol>
                </div>
                <h4 class="page-title">Category</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Created Date</th>
                        <th>Last Updated</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $index => $value)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $value->image }}</td>
                            <td>{{ $value->category }}</td>
                            <td class="text-wrap">{{ $value->description }}</td>
                            <td>{{ $value->created_at }}</td>
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
