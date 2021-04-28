@extends('admin.layouts.app')
@section('title', 'Create Campaign')
@section('content')
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Campaign Name</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" placeholder=""
                                    class="form-control p-0 border-0" name="name"> </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="url" class="col-md-12 p-0">Campaign URL</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="url" placeholder="{{Auth::user()->email}}"
                                    class="form-control p-0 border-0" name="url"
                                    id="url">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="file" class="col-md-12 p-0">Campaign Image</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="file" 
                                    class="form-control p-0 border-0" name="file"
                                    id="file">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-4">
                                    <label for="date" class="col-md-12 p-0">Campaign End date</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="date" 
                                            class="form-control p-0 border-0" name="date"
                                            id="date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-4">
                                    <label for="target" class="col-md-12 p-0">Campaign Target Shares</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="number" 
                                            class="form-control p-0 border-0" name="target"
                                            id="target">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success" type="submit">Upload Campaign</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
@endsection