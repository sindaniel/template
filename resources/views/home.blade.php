@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mini-stat-img mr-4">
                        <img src="assets/images/services-icon/01.png" alt="" >
                    </div>
                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Orders</h5>
                    <h4 class="font-500">1,685 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                    <div class="mini-stat-label bg-success">
                        <p class="mb-0">+ 12%</p>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>

                    <p class="text-white-50 mb-0">Since last month</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mini-stat-img mr-4">
                        <img src="assets/images/services-icon/02.png" alt="" >
                    </div>
                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Revenue</h5>
                    <h4 class="font-500">52,368 <i class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                    <div class="mini-stat-label bg-danger">
                        <p class="mb-0">- 28%</p>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>

                    <p class="text-white-50 mb-0">Since last month</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mini-stat-img mr-4">
                        <img src="assets/images/services-icon/03.png" alt="" >
                    </div>
                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Average Price</h5>
                    <h4 class="font-500">15.8 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                    <div class="mini-stat-label bg-info">
                        <p class="mb-0"> 00%</p>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>

                    <p class="text-white-50 mb-0">Since last month</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mini-stat-img mr-4">
                        <img src="assets/images/services-icon/04.png" alt="" >
                    </div>
                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Product Sold</h5>
                    <h4 class="font-500">2436 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                    <div class="mini-stat-label bg-warning">
                        <p class="mb-0">+ 84%</p>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>

                    <p class="text-white-50 mb-0">Since last month</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-9">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-5">Monthly Earning</h4>
                <div class="row">
                    <div class="col-lg-7">
                        <div>
                            <div id="chart-with-area" class="ct-chart earning ct-golden-section"></div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-center">
                                    <p class="text-muted mb-4">This month</p>
                                    <h4>$34,252</h4>
                                    <p class="text-muted mb-5">It will be as simple as in fact it will be occidental.</p>
                                    <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">4/5</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center">
                                    <p class="text-muted mb-4">Last month</p>
                                    <h4>$36,253</h4>
                                    <p class="text-muted mb-5">It will be as simple as in fact it will be occidental.</p>
                                    <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">3/5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end card -->
    </div>

    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div>
                    <h4 class="mt-0 header-title mb-4">Sales Analytics</h4>
                </div>
                <div class="wid-peity mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <p class="text-muted">Online</p>
                                <h5 class="mb-4">1,542</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wid-peity mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <p class="text-muted">Offline</p>
                                <h5 class="mb-4">6,451</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <p class="text-muted">Marketing</p>
                                <h5>84,574</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
