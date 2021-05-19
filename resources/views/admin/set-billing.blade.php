@extends('admin.layouts.app')
@section('title', 'Campaign billing')
@section('content')
@include('components.auth-validation-errors')
<style>

</style>
<div class="row">
    <div class="card">
        <div class="card-body">
            <h3>Billing info for: {{$campaign->caption}}</h3>

            <div class="row">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-preset-tab" data-bs-toggle="tab" data-bs-target="#nav-preset" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Preset Plans</button>
                        <button class="nav-link" id="nav-custom-tab" data-bs-toggle="tab" data-bs-target="#nav-custom" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Custom Plan</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-preset" role="tabpanel" aria-labelledby="nav-preset-tab">
                        <!-- ======= Pricing Section ======= -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body" style = "border-right:3px solid blue">
                                        <h3>Starter plan</h3>
                                        <h1><sup>NGN</sup>150</h1>
                                        <span><i class = "fas fa-check"></i>100 Clicks</span>
                                        <br>
                                        <span><i class = "fas fa-check"></i>500 Shares</span>
                                        <br>
                                        <span><i class = "fas fa-check"></i>7 Days</span>
                                        <br>
                                        <small>*T&C's Apply</small><br><br>

                                        <form action="{{route('campaigns.billing.submit',[$campaign->id])}}"  method = "post">
                                            @csrf
                                            <input type="hidden" name ="target_shares" value = "500">
                                            <input type="hidden" name = 'target_clicks' value = "100">
                                            <input type="hidden" name = 'target_days' value = "7">
                                            <div class="btn-wrap">
                                                <button type = "submit" class="btn btn-primary">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body" style = "border-right:3px solid blue">
                                        <h3>Business plan</h3>
                                        <h1><sup>NGN</sup>3000</h1>
                                        <span><i class = "fas fa-check"></i>2000 Clicks</span>
                                        <br>
                                        <span><i class = "fas fa-check"></i>10000 Shares</span>
                                        <br>
                                        <span><i class = "fas fa-check"></i>30 Days</span>
                                        <br>
                                        <small>*T&C's Apply</small><br><br>

                                        <form action="{{route('campaigns.billing.submit',[$campaign->id])}}"  method = "post">
                                            @csrf
                                            <input type="hidden" name ="target_shares" value = "10000">
                                            <input type="hidden" name = 'target_clicks' value = "2000">
                                            <input type="hidden" name = 'target_days' value = "30">
                                            <div class="btn-wrap">
                                                <button type = "submit" class="btn btn-success">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>Advanced plan</h3>
                                        <h1><sup>NGN</sup>15000</h1>
                                        <span> <i class = "fas fa-check"></i> 10000 Clicks</span>
                                        <br>
                                        <span><i class = "fas fa-check"></i>50000 Shares</span>
                                        <br>
                                        <span><i class = "fas fa-check"></i>90 Days</span>
                                        <br>
                                        <small>*T&C's Apply</small><br><br>

                                        <form action="{{route('campaigns.billing.submit',[$campaign->id])}}"  method = "post">
                                            @csrf
                                            <input type="hidden" name ="target_shares" value = "50000">
                                            <input type="hidden" name = 'target_clicks' value = "10000">
                                            <input type="hidden" name = 'target_days' value = "90">
                                            <div class="btn-wrap">
                                                <button type = "submit" class="btn btn-warning">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Pricing Section -->
                    </div>
                    <div class="tab-pane fade" id="nav-custom" role="tabpanel" aria-labelledby="nav-custom-tab">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="table">
                                    <table class="table table-stripped">
                                        <tbody>
                                            <tr>
                                                <td><span>No of shares: </span></td>
                                                <td><span id="shares_label">N/A</span></td>
                                            </tr>
                                            <tr>
                                                <td><span>No of clicks: </span></td>
                                                <td><span id="clicks_label">N/A</span></td>
                                            </tr>
                                            <tr>
                                                <td><span>No of days: </span></td>
                                                <td><span id="days_label">N/A</span></td>
                                            </tr>
                                            <tr class="text-white" style="background-color: gray;">
                                                <td colspan="2"><b>Sub Total: </b></td>
                                                <td colspan="2"><span id="subTotalLabel">N/A</span></td>
                                            </tr>
                                            <tr>
                                                <td><span>VAT: </span></td>
                                                <td colspan="2"><span id="VAT_label">N/A</span></td>
                                            </tr>
                                            <tr style="background-color: black;" class="text-white">
                                                <td colspan="2"><b>Total: </b></td>
                                                <td colspan="2"><span id="totalLabel">N/A</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <form class="form-horizontal form-material" action="{{route('campaigns.billing.submit',[$campaign->id])}}" method="POST">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">*Campaign Target clicks</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="target_clicks" type="range" class="form-control-range" id="clicks_input" min="1" max="20000" step="50" value="100" onchange="calBill()">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 p-0">*Campaign Target shares</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="target_shares" type="range" class="form-control-range" id="shares_input" min="1" max="50000" step="50" value="1000" onchange="calBill()">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 p-0">*Campaign duration(days)</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="target_days" type="number" class="form-control" id="days_input" min="1" max="365" step="1" value="7" onkeyup="calBill()">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Save Campaign</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script defer>
    function setInitLabelVals() {
        var shares = document.getElementById('shares_input').value;
        var clicks = document.getElementById('clicks_input').value;
        var days = document.getElementById('days_input').value;
        console.log(shares);

        var perShare = 0.1;
        var perClick = 1;

        var subTotal = ((perClick * clicks) + (perShare * shares)) * days
        var VAT = subTotal * 0.05;

        var total = subTotal + VAT;

        var clicks_label = document.getElementById('clicks_label');
        clicks_label.innerHTML = clicks;
        var shares_label = document.getElementById('shares_label');
        shares_label.innerHTML = shares;
        var days_label = document.getElementById('days_label');
        days_label.innerHTML = days;
        var VAT_label = document.getElementById('VAT_label');
        VAT_label.innerHTML = "NGN " + Math.round(VAT);
        var sub_total_label = document.getElementById('subTotalLabel');
        sub_total_label.innerHTML = "NGN " + Math.round(subTotal);
        var total_label = document.getElementById('totalLabel');
        total_label.innerHTML = "NGN " + Math.round(total);
    }

    function calBill() {
        var shares = document.getElementById('shares_input').value;
        var clicks = document.getElementById('clicks_input').value;
        var days = document.getElementById('days_input').value;
        var perShare = 0.1;
        var perClick = 1;

        var subTotal = ((perClick * clicks) + (perShare * shares)) * days
        var VAT = subTotal * 0.05;

        var total = subTotal + VAT;

        var clicks_label = document.getElementById('clicks_label');
        clicks_label.innerHTML = clicks;
        var shares_label = document.getElementById('shares_label');
        shares_label.innerHTML = shares;
        var days_label = document.getElementById('days_label');
        days_label.innerHTML = days;
        var sub_total_label = document.getElementById('subTotalLabel');
        var VAT_label = document.getElementById('VAT_label');
        VAT_label.innerHTML = "NGN " + Math.round(VAT);
        sub_total_label.innerHTML = "NGN " + Math.round(subTotal);
        // var total_label = document.getElementById('totalLabel');
        // total_label.innerHTML = "NGN " + Math.round(total);
        $("#totalLabel").html("NGN " + Math.round(total));
    }
    setInitLabelVals();
</script>
@endsection
