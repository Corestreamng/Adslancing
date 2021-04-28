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
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">Name</th>
                            <th class="border-top-0">Url</th>
                            <th class="border-top-0">End Date</th>
                            <th class="border-top-0">Target</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>My instagram</td>
                            <td>Https://instagram.com/apollos</td>
                            <td>23/4/2012</td>
                            <td>600</td>
                            <td>
                                <i class = "fas fa-edit mr-1 p-1"></i>
                                <i class = "fas fa-trash mr-1 p-1 text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>forex masterclass</td>
                            <td>Https://face.com/apollos</td>
                            <td>23/4/2012</td>
                            <td>600</td>
                            <td>
                                <i class = "fas fa-edit mr-1 p-1"></i>
                                <i class = "fas fa-trash mr-1 p-1 text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Fund raiser</td>
                            <td>Https://gifter.com/apollos</td>
                            <td>23/4/2012</td>
                            <td>600</td>
                            <td>
                                <i class = "fas fa-edit mr-1 p-1"></i>
                                <i class = "fas fa-trash mr-1 p-1 text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>My instagram</td>
                            <td>Https://instagram.com/apollos</td>
                            <td>23/4/2012</td>
                            <td>600</td>
                            <td>
                                <i class = "fas fa-edit mr-1 p-1"></i>
                                <i class = "fas fa-trash mr-1 p-1 text-danger"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection