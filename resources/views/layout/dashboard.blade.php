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

    <div class="row d-none">
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

    <div class="row">
        <div class="col-md-6">
            <div class="card-box tilebox-one">
                <h4 class="header-title">Report by gender</h4>
                <p class="sub-header">
                    Calculation from report data with gender
                </p>

                <div class="p-3" dir="ltr">
                    <div id="report-gender" data-report-gender="{{ json_encode($gender) }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-box tilebox-one">
                <h4 class="header-title">Report by expression</h4>
                <p class="sub-header">
                    Calculation from report data with expression
                </p>

                <div class="p-3" dir="ltr">
                    <div id="report-expression" data-report-expression="{{ json_encode($expression) }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card-box tilebox-one">
                <h4 class="header-title">Training and Validation Loss</h4>
                <p class="sub-header">
                    Calculation from training data with epoch 30 - Best Model epoch 13
                </p>

                <div class="p-3" dir="ltr">
                    <div id="line-regions-epoch30"
                         data-loss30="{{ json_encode($loss30) }}"
                         data-val-loss30="{{ json_encode($valloss30) }}"
                         data-regions30="{{ json_encode($regions30) }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box tilebox-one">
                <h4 class="header-title">Training and Validation Accuracy</h4>
                <p class="sub-header">
                    Calculation from training data with epoch 30 - Best Model epoch 16
                </p>

                <div class="p-3" dir="ltr">
                    <div id="line-regions-epoch31"
                         data-accuracy30="{{ json_encode($accuracy30) }}"
                         data-val-accuracy30="{{ json_encode($valaccuracy30) }}"
                         data-regions30="{{ json_encode($regions31) }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-none">
        <div class="col-md-6">
            <div class="card-box tilebox-one">
                <h4 class="header-title">Training with Epoch 10</h4>
                <p class="sub-header">
                    Calculation from training data with epoch 10
                </p>

                <div class="p-3" dir="ltr">
                    <div id="line-regions-epoch10"
                         data-loss10="{{ json_encode($loss10) }}"
                         data-accuracy10="{{ json_encode($accuracy10) }}"
                         data-regions10="{{ json_encode($regions10) }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-box tilebox-one">
                <h4 class="header-title">Training with Epoch 20</h4>
                <p class="sub-header">
                    Calculation from training data with epoch 20
                </p>

                <div class="p-3" dir="ltr">
                    <div id="line-regions-epoch20"
                         data-loss20="{{ json_encode($loss20) }}"
                         data-accuracy20="{{ json_encode($accuracy20) }}"
                         data-regions20="{{ json_encode($regions20) }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-none">
        <div class="col-md-6">
            <div class="card-box tilebox-one">
                <h4 class="header-title">Training with Epoch 50</h4>
                <p class="sub-header">
                    Calculation from training data with epoch 50
                </p>

                <div class="p-3" dir="ltr">
                    <div id="line-regions-epoch50"
                         data-loss50="{{ json_encode($loss50) }}"
                         data-accuracy50="{{ json_encode($accuracy50) }}"
                         data-regions50="{{ json_encode($regions50) }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-box tilebox-one">
                <h4 class="header-title">Training with Epoch 100</h4>
                <p class="sub-header">
                    Calculation from training data with epoch 100
                </p>

                <div class="p-3" dir="ltr">
                    <div id="line-regions-epoch100"
                         data-loss100="{{ json_encode($loss100) }}"
                         data-accuracy100="{{ json_encode($accuracy100) }}"
                         data-regions100="{{ json_encode($regions100) }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
