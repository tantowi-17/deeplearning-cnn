@extends('main')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-layers float-right m-0 h2 text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Epoch</h6>
                <h3 class="my-3" data-plugin="counterup">{{$epochTenCount10}}</h3>
                <span class="badge badge-success mr-1"> {{$epoch10Accuracy}}% </span> <span class="text-muted">Accuracy</span>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-layers float-right m-0 h2 text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Epoch</h6>
                <h3 class="my-3" data-plugin="counterup">{{$epochTenCount20}}</h3>
                <span class="badge badge-success mr-1"> {{$epoch20Accuracy}}% </span> <span class="text-muted">Accuracy</span>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-layers float-right m-0 h2 text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Epoch</h6>
                <h3 class="my-3" data-plugin="counterup">{{$epochTenCount50}}</h3>
                <span class="badge badge-success mr-1"> {{$epoch50Accuracy}}% </span> <span class="text-muted">Accuracy</span>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-layers float-right m-0 h2 text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Epoch</h6>
                <h3 class="my-3" data-plugin="counterup">{{$epochTenCount100}}</h3>
                <span class="badge badge-success mr-1"> {{$epoch100Accuracy}}% </span> <span class="text-muted">Accuracy</span>
            </div>
        </div>
    </div>
</div>
@endsection
