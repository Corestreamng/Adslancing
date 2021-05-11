@extends('admin.layouts.app')
@section('title', 'Show campaign')
@section('content')
<!-- Row -->
<div class="row">
    @include('components.auth-validation-errors')
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-12">
        <div class="white-box">
            <div class="user-bg">
                @if($campaign->file)
                    <img width="100%" alt="file" src="{{asset('storage/uploads/'.$campaign->file)}}">
                @else
                    <img width="100%" alt="file" src="{{asset('assets/img/apple-touch-icon')}}">
                @endif
                <div class="overlay-box">
                    <div class="user-content">
                        <!-- Button trigger modal -->
                        @if ($campaign->type == 'flyer')
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editImageModal">
                                Edit Image
                            </button>
                        @endif
                        <h4 class="text-white mt-2">{{$campaign->caption}}</h4>
                        <h5 class="text-white mt-2">{{$campaign->file}}</h5>
                    </div>
                </div>
            </div>


            <!--Edit Image Modal -->
            <div class="modal fade" id="editImageModal" tabindex="-1" aria-labelledby="Edit Image Modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Image for campaign: {{$campaign->caption}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('campaigns.update-image',[$campaign->id])}}" class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group mb-4">
                                    <label for=""></label>
                                    <input class="form-control p-0 border-0" type="file" name="file">
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="user-btm-box mt-5 d-md-flex">
                <table class="table">
                    <tr>
                        <td>Status:</td>
                        <td colspan="2">
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
                    </tr>
                    <tr>
                        <td>
                            <h3>{{$campaign->target_shares}}</h3>
                            <small>Shares</small>
                        </td>
                        <td>
                            <h3>{{$campaign->target_clicks}}</h3>
                            <small>Clicks</small>
                        </td>
                        <td>
                            <h3>{{$campaign->target_days}}</h3>
                            <small>Days</small>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{route('campaigns.edit-billing',[$campaign->id])}}" class="btn btn-primary btn-block">
                                <i class='fas fa-edit'></i> Edit Billing
                            </a>
                        </td>
                        <td colspan='2'>
                            <a href="#" class="btn btn-success btn-block">
                                <i class='fas fa-dollar-sign'></i> Pay Now!
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material" action="{{route('campaigns.update',[$campaign->id])}}" method="POST">
                    <input name="_method" type="hidden" value="PUT">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">*Campaign Caption</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" value="{{$campaign->caption}}" class="form-control p-0 border-0" name="caption" autofocus>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="type" class="col-md-12 p-0">*Campaign Type</label>
                        <div class="col-md-12 border-bottom p-0">
                            <select name="type" id="type" class="form-select shadow-none p-0 border-0 form-control-line" onchange="toggleFields(this.value)">
                                <option value="link" <?php if ($campaign->type == 'link') {
                                                            echo 'selected';
                                                        } ?>>Link</option>
                                <option value="youtube" <?php if ($campaign->type == 'youtube') {
                                                            echo 'selected';
                                                        } ?>>Youtube</option>
                                <option value="blog" <?php if ($campaign->type == 'blog') {
                                                            echo 'selected';
                                                        } ?>>Blog</option>
                                <option value="social" <?php if ($campaign->type == 'social') {
                                                            echo 'selected';
                                                        } ?>>Social</option>
                                <option value="flyer" <?php if ($campaign->type == 'flyer') {
                                                            echo 'selected';
                                                        } ?>>Flyer</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="url" class="col-md-12 p-0">*Campaign URL</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="url" value={{$campaign->url}} class="form-control p-0 border-0" name="url" id="url">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button class="btn btn-success" type="submit">Update Campaign</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <p>
                        @foreach($campaign->tags as $tag)
                        <span><i class="fas fa-tags"></i>{{$tag->name}}</span>
                        @endforeach
                        <a href="{{url('/campaigns/edit-tags/'.$campaign->id)}}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Edit Tags
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
@endsection
