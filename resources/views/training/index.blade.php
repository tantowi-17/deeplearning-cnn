@extends('main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Data Training</li>
                    </ol>
                </div>
                <h4 class="page-title">Training</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="category-filter">
                    <select id="categoryFilter" class="form-control">
                        <option value="">Show All</option>
                        <option value="10">Epoch 10</option>
                        <option value="20">Epoch 20</option>
                        <option value="50">Epoch 50</option>
                        <option value="100">Kasir 100</option>
                    </select>
                </div>
                <table id="filterTable" data-index="2" class="table table-bordered table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Epoch</th>
                        <th>Loss</th>
                        <th>Accuracy</th>
                        <th>Created Date</th>
                        <th>Last Updated</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($train as $index => $value)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->epoch }}</td>
                            <td>{{ round($value->loss, 2) }}%</td>
                            <td>{{ round($value->accuracy, 2) }}%</td>
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
