@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
{{-- include chart.js --}}
<script src="{{asset('admin/js/chart.min.js')}}"></script>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h3><i class="fas fa-chart-bar"></i>  Total Campaigs</h3>
                            </div>
                            <div class="col-3">
                                <h5>{{$data['total_campaigns']}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h3><i class="fas fa-chart-bar"></i> Total Active Campaigs</h3>
                            </div>
                            <div class="col-3">
                                <h5>25</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h3><i class="fas fa-chart-bar"></i>  Total Clicks</h3>
                            </div>
                            <div class="col-3">
                                <h5>{{$data['total_clicks']}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h3><i class="fas fa-chart-bar"></i>  Total Shares</h3>
                            </div>
                            <div class="col-3">
                                <h5>{{$data['total_shares']}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div>
                <canvas id="myChart1"></canvas>
            </div>
        </div>
    </div>
    <script defer>
        $.ajax({
            url: '/dashboard/getTotalStat',
            type: 'get',
            dataType: 'json',
            success: function(response){
                if(response != null){
                    const labels = [
                        'January',
                        'February',
                        'March',
                        'April',
                        'May',
                        'June',
                        'July',
                        'August',
                        'September',
                        'October',
                        'November',
                        'December'
                    ];
                    var the_clicks = [];
                    the_clicks[0] = response[0].jan;
                    the_clicks[1] = response[0].feb;
                    the_clicks[2] = response[0].mar;
                    the_clicks[3] = response[0].apr;
                    the_clicks[4] = response[0].may;
                    the_clicks[5] = response[0].jun;
                    the_clicks[6] = response[0].jly;
                    the_clicks[7] = response[0].aug;
                    the_clicks[8] = response[0].sep;
                    the_clicks[9] = response[0].oct;
                    the_clicks[10] = response[0].nov;
                    the_clicks[11] = response[0].dec;

                    the_shares = [];
                    the_shares[0] = response[1].jan;
                    the_shares[1] = response[1].feb;
                    the_shares[2] = response[1].mar;
                    the_shares[3] = response[1].apr;
                    the_shares[4] = response[1].may;
                    the_shares[5] = response[1].jun;
                    the_shares[6] = response[1].jly;
                    the_shares[7] = response[1].aug;
                    the_shares[8] = response[1].sep;
                    the_shares[9] = response[1].oct;
                    the_shares[10] = response[1].nov;
                    the_shares[11] = response[1].dec;

                    var clicksData = {
                        label: "Total Clicks Acheived",
                        data: the_clicks,
                        lineTension: 0,
                        fill: false,
                        minBarLength: 2,
                        backgroundColor: 'red',
                    };

                    var sharesData = {
                        label: "Total Shares Acheived",
                        data: the_shares,
                        lineTension: 0,
                        fill: false,
                        minBarLength: 2,
                        backgroundColor: 'green'
                    };

                    const data = {
                        labels: labels,
                        datasets: [sharesData,clicksData]
                    };
                    const config = {
                        type: 'bar',
                        data,
                        options: {
                            backgroundColor: 'rgb(255, 99, 132)',
                        }
                    };

                    var myChart = new Chart(
                        document.getElementById('myChart1'),
                        config
                    );

                }

            },
            error: function(x,y,z) {
                console.log(x);
            }
        });

    </script>
@endsection
