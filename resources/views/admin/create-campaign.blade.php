@extends('admin.layouts.app')
@section('title', 'Create Campaign')
@section('content')
@include('components.auth-validation-errors')
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h6 style="font-size: 13pt; font-weight:bold;">*Required field</h6><br>

                <form class="form-horizontal form-material" action="{{route('campaigns.store')}}" method="POST" enctype = "multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">*Campaign Caption</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" placeholder="" class="form-control p-0 border-0" name="caption" autofocus>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="type" class="col-md-12 p-0">*Campaign Type</label>
                        <div class="col-md-12 border-bottom p-0">
                            <select name="type" id="type" class="form-select shadow-none p-0 border-0 form-control-line" onchange="toggleFields(this.value)">
                                <option value="link">Link</option>
                                <option value="youtube">Youtube</option>
                                <option value="blog">Blog</option>
                                <option value="social">Social</option>
                                <option value="flyer">Flyer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-4" style="display: none;" id="imageField">
                        <label for="file" class="col-md-12 p-0">Campaign Image</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="file" class="form-control p-0 border-0" name="file" id="file">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="url" class="col-md-12 p-0">*Campaign URL</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="url" placeholder="" class="form-control p-0 border-0" name="url" id="url">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button class="btn btn-success" type="submit">Upload Campaign and add Tags</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<script>
    function toggleFields(campaignType){
        console.log(campaignType);
        if(campaignType=="flyer"){
            $('#imageField').show();
        }
    }
</script>
@endsection
