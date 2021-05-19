@extends('admin.layouts.app')
@section('title', 'Campaign list')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Your Campaigns</h3>
            <p class="text-muted">The list</p>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">Caption</th>
                            <th class="border-top-0">Type</th>
                            <th class="border-top-0">Url</th>
                            <th class="border-top-0">Analytics</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0">Details</th>
                            <th class="border-top-0">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($campaigns as $campaign)
                            <tr>
                                <td>{{$campaign->caption}}</td>
                                <td>{{$campaign->type}}</td>
                                <td>{{$campaign->url}}</td>
                                <td><a href={{route('campaigns.analytics',[$campaign->id])}}><i class = 'fas fa-chart-bar'></i></a></td>
                                <td>
                                    @if($campaign->status == 0)
                                        <span class="badge bg-danger">pending payment</span>
                                    @elseif($campaign->status ==1)
                                        <span class="badge bg-warning">Paid(unpublished)</span>
                                    @elseif($campaign->status ==2)
                                        <span class="badge bg-primary">Published(in progress)</span>
                                    @elseif($campaign->status == 3)
                                        <span class="badge bg-success">Completed</span>
                                    @else
                                        <!-- do nothing -->
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('campaigns.show',[$campaign->id])}}"><i class = "fas fa-eye mr-1 p-1"></i></a>
                                </td>
                                <td>
                                    <form action="{{route('campaigns.destroy',[$campaign->id])}}" method='post' id = 'deletecampaign{{$campaign->id}}'>
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="button" onclick="confirmDelete({{$campaign->id}})"><i class = "fas fa-trash mr-1 p-1 text-danger"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmDelete(campaign_id){
        var ans = confirm("Are you sure you want to delete this campaign?");
        if(ans = true){
            $('#deletecampaign'+campaign_id).submit();
        }
    }
</script>
@endsection
