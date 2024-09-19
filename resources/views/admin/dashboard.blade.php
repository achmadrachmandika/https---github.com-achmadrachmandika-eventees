@extends('admin.home')

@section('content')
<!-- Include Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<!-- Main Content -->
<div class="container-fluid">
    <div class="card" style="margin: 20px; padding: 20px;">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="font-weight-bold">Dashboard</h2>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card bg-c-blue order-card">
                        <div class="card-body">
                            <h6 class="m-b-20">Orders Received</h6>
                            <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>486</span></h2>
                            <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card bg-c-green order-card">
                        <div class="card-body">
                            <h6 class="m-b-20">Orders Received</h6>
                            <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>486</span></h2>
                            <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card bg-c-yellow order-card">
                        <div class="card-body">
                            <h6 class="m-b-20">Orders Received</h6>
                            <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>486</span></h2>
                            <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card bg-c-pink order-card">
                        <div class="card-body">
                            <h6 class="m-b-20">Orders Received</h6>
                            <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>486</span></h2>
                            <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection