@extends('layouts.backendapp')
@section('content')
<div class="container-fluid p-0 sm_padding_15px">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="dashboard_header mb_50">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dashboard_header_title">
                            <h3> Directory Dashboard</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dashboard_breadcam text-right">
                            <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Address
                                Book</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-8">
            <div class="white_box mb_30">
                <div class="box_header">
                    <div class="main-title">
                        <h3 class="mb_25">Monthly Income stats for November 2020</h3>
                    </div>
                    <div class="float-right d-none d-md-inline-block">
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-sm btn-light">Today</button>
                            <button type="button" class="btn btn-sm btn-light active">Weekly</button>
                            <button type="button" class="btn btn-sm btn-light">Monthly</button>
                        </div>
                    </div>
                </div>
                <div id="line-column-chart2"></div>
                <div class="card_footer_white">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <div class="d-inline-flex">
                                <h5 class="mr-2">$12,253</h5>
                                <div class="text-success">
                                    <i class="fas fa-caret-up font-size-14 line-height-2 mr-2"> </i>2.2 %
                                </div>
                            </div>
                            <p class="text-muted text-truncate mb-0">This month</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="mt-4 mt-sm-0">
                                <p class="mb-2 text-muted text-truncate"><i
                                        class="fas fa-circle text-primary mr-2 font-size-10 mr-1"></i> This
                                    Year :</p>
                                <div class="d-inline-flex align-items-center">
                                    <h5 class="mb-0 mr-2">$ 34,254</h5>
                                    <div class="text-success">
                                        <i class="fas fa-caret-up font-size-14 line-height-2 mr-2"> </i>2.1
                                        %
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="mt-4 mt-sm-0">
                                <p class="mb-2 text-muted text-truncate"><i
                                        class="fas fa-circle text-success font-size-10 mr-1"></i> Previous
                                    Year :</p>
                                <div class="d-inline-flex align-items-center">
                                    <h5 class="mb-0">$ 32,695</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="list_counter_wrapper white_box mb_30 p-0 card_height_100">
                <div class="single_list_counter">
                    <h3 class="deep_blue_2"><span class="counter deep_blue_2 ">50</span> + </h3>
                    <p>Total categories</p>
                </div>
                <div class="single_list_counter">
                    <h3 class="deep_blue_2"><span class="counter deep_blue_2">100</span> + </h3>
                    <p>Total Listing</p>
                </div>
                <div class="single_list_counter">
                    <h3 class="deep_blue_2"><span class="counter deep_blue_2">20</span> + </h3>
                    <p>Claimed Listing</p>
                </div>
                <div class="single_list_counter">
                    <h3 class="deep_blue_2"><span class="counter deep_blue_2">10</span> + </h3>
                    <p>Reported Listing </p>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="white_box QA_section card_height_100">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Users according to packages</h3>
                    </div>
                </div>
                <div class="QA_table ">

                    <table class="table lms_table_active2">
                        <thead>
                            <tr>
                                <th scope="col">Package name</th>
                                <th scope="col">No. of users</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Free package</td>
                                <td>2556</td>
                            </tr>
                            <tr>
                                <td>Free package</td>
                                <td>2556</td>
                            </tr>
                            <tr>
                                <td>Free package</td>
                                <td>2556</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="white_box mb_30 card_height_100">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb_25">Overview</h3>
                    </div>
                </div>
                <div class="activity_progressbar">
                    <div class="single_progressbar d-flex">
                        <h6>Active Listings</h6>
                        <div id="bar1" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="95"></span>
                        </div>
                    </div>
                    <div class="single_progressbar d-flex">
                        <h6>Claimed Listings</h6>
                        <div id="bar2" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="75"></span>
                        </div>
                    </div>
                    <div class="single_progressbar d-flex">
                        <h6>Reported Listings</h6>
                        <div id="bar3" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="55"></span>
                        </div>
                    </div>
                    <div class="single_progressbar d-flex">
                        <h6>Pending Listings</h6>
                        <div id="bar4" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="25"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="white_box QA_section card_height_100">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Web Visitor and trafic</h3>
                    </div>
                </div>
                <div id="home-chart-03" style="height: 280px; position: relative;"></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="white_box QA_section card_height_100 blud_card">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0 text_white">2400 + New Users</h3>
                    </div>
                </div>
                <div class="content_user">
                    <p>At vero eos et accusamus et iusto odio
                        dignissimos ducimus</p>
                    <a href="#" class="btn_2">Learn more</a>
                    <img src="{{ asset( 'backend/img/users_img.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="white_box QA_section card_height_100">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Listings according to Category</h3>
                    </div>
                </div>
                <div class="QA_table ">

                    <table class="table lms_table_active2">
                        <thead>
                            <tr>
                                <th scope="col">Package name</th>
                                <th scope="col">No. of users</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Restaurant</td>
                                <td>2556</td>
                            </tr>
                            <tr>
                                <td>Hotel</td>
                                <td>25506</td>
                            </tr>
                            <tr>
                                <td>Apartment</td>
                                <td>25536</td>
                            </tr>
                            <tr>
                                <td>Salon</td>
                                <td>25536</td>
                            </tr>
                            <tr>
                                <td>Automobile</td>
                                <td>25536</td>
                            </tr>
                            <tr>
                                <td>Spa</td>
                                <td>25536</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="white_box QA_section card_height_100">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Claimed Listings</h3>
                    </div>
                </div>
                <div class="QA_table ">

                    <table class="table lms_table_active2">
                        <thead>
                            <tr>
                                <th scope="col">Package name</th>
                                <th scope="col">No. of users</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Restaurant</td>
                                <td>2556</td>
                            </tr>
                            <tr>
                                <td>Hotel</td>
                                <td>25506</td>
                            </tr>
                            <tr>
                                <td>Apartment</td>
                                <td>25536</td>
                            </tr>
                            <tr>
                                <td>Salon</td>
                                <td>25536</td>
                            </tr>
                            <tr>
                                <td>Automobile</td>
                                <td>25536</td>
                            </tr>
                            <tr>
                                <td>Spa</td>
                                <td>25536</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="white_box QA_section card_height_100">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Reported Listings</h3>
                    </div>
                </div>
                <div class="QA_table ">

                    <table class="table lms_table_active2">
                        <thead>
                            <tr>
                                <th scope="col">Package name</th>
                                <th scope="col">No. of users</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Restaurant</td>
                                <td>2556</td>
                            </tr>
                            <tr>
                                <td>Hotel</td>
                                <td>25506</td>
                            </tr>
                            <tr>
                                <td>Apartment</td>
                                <td>25536</td>
                            </tr>
                            <tr>
                                <td>Salon</td>
                                <td>25536</td>
                            </tr>
                            <tr>
                                <td>Automobile</td>
                                <td>25536</td>
                            </tr>
                            <tr>
                                <td>Spa</td>
                                <td>25536</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="white_box card_height_100">
                <div class="box_header">
                    <div class="main-title">
                        <h3 class="m-0">Recent Activity</h3>
                    </div>
                </div>
                <div class="Activity_timeline">
                    <ul>
                        <li>
                            <div class="activity_bell"></div>
                            <div class="timeLine_inner d-flex align-items-center">
                                <div class="activity_wrap">
                                    <h6>5 min ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        scelerisque
                                    </p>
                                </div>
                                <div class="notification_read_btn mb_10">
                                    <a href="#" class="notification_btn">Read</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="activity_bell"></div>
                            <div class="timeLine_inner d-flex align-items-center">
                                <div class="activity_wrap">
                                    <h6>5 min ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        scelerisque
                                    </p>
                                </div>
                                <div class="notification_read_btn mb_10">
                                    <a href="#" class="notification_btn">Read</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="activity_bell"></div>
                            <div class="timeLine_inner d-flex align-items-center">
                                <div class="activity_wrap">
                                    <h6>5 min ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        scelerisque
                                    </p>
                                </div>
                                <div class="notification_read_btn mb_10">
                                    <a href="#" class="notification_btn">Read</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="activity_bell"></div>
                            <div class="timeLine_inner d-flex align-items-center">
                                <div class="activity_wrap">
                                    <h6>5 min ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        scelerisque
                                    </p>
                                </div>
                                <div class="notification_read_btn mb_10">
                                    <a href="#" class="notification_btn">Read</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="white_box QA_section card_height_100">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Device</h3>
                    </div>
                </div>
                <div id="bar-chart-6" class=""></div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="white_box">
                <div class="box_header">
                    <div class="main-title">
                        <h3 class="m-0">Browser</h3>
                    </div>
                </div>
                <div class="casnvas_box">
                    <canvas height="210" width="210" id="canvasDoughnut"></canvas>
                </div>
                <div class="legend_style legend_style_grid mt_10px">
                    <li class="d-block"> <span style="background-color: #525CE5;"></span>Chrome</li>
                    <li class="d-block"> <span style="background-color: #9C52FD;"></span> Mojila
                    </li>
                    <li class="d-block"> <span style="background-color: #3B76EF"></span> Safari</li>
                    <li class="d-block"> <span style="background-color:#00BFBF;"></span> Opera</li>
                    <li class="d-block"> <span style="background-color:#FFA70B;"></span> Microsoft
                        Edg</li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection