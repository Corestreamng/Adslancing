@extends('admin.layouts.app')
@section('title', 'Campaign Tags')
@section('content')
@include('components.auth-validation-errors')
    <div class="row">
        <div class="card">
            <div class="card-body">

                <h4>Add tags to: <i>{{$campaign->caption}}</i> </h4>
                <i>Tags describe your campaign, and helps us connect you with the right audience</i>
                <br><small class = "text-danger">Add at least 5 tags</small>
                <div class="card">
                    <div class="card-body">
                        <div id="tagsContainer">
                            <!-- added tags show here -->
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <div class ="col-md-12 border-bottom p-0">
                        <input type="text" id="tag-name" class='form-control p-0 border-0' onkeyup="findTags(this.value)" placeholder="Search tags" autofocus>
                    </div>

                    <ul class = "list-group mt-0 pt-0" id="suggestArea">
                        <!-- sugestions go here -->
                    </ul>
                </div>
                <div class="form-group mb-4">
                    <div class="col-sm-12">
                        <a href="{{route('campaigns.billing',[$campaign->id])}}" class="btn btn-success disabled" id="proceed_btn">Proceed to billing</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var NoOfTags = 0;
        function findTags(input){
            var suggestArea = $('#suggestArea');
            suggestArea.empty();
            if(input != ""){
                $.ajax({
                    url: '/tags/search?search='+input,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        if(response != null){
                            for(var i=0; i<response.length; i++){
                                var tagMarkup = "<li class = 'list-group-item' id='item"+response[i].id+"'><i class = 'fas fa-tags m-1'></i>"+response[i].name+"<a href= '#' class = 'btn btn-primary btn-sm' onclick='addTag("+response[i].id+",\""+response[i].name+"\")'>Add</a></li>"
                                suggestArea.append(tagMarkup);
                            }
                        }
                    },
                    error: function(x,y,z) {
                        suggestArea.append("<small class = 'text-danger'><i class = 'fas fa-wifi'></i>Error fetching tags, check connection</small>");
                    }
                });
            }
        }

        function addTag(id,name){
            var tagsContainer = $('#tagsContainer');
            var suggestArea = $('#suggestArea');
            $.ajax({
                url: '/campaigns/add-tags/{{$campaign->id}}/'+id,
                type: 'post',
                dataType: 'json',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response){
                    if(response != null){
                        console.log(response);
                        addedTagMarkup = "<span id = 'tag"+id+"' class= 'm-1 text-success'><i class = 'fas fa-tags'></i>"+name+" <button onclick = 'removeTag("+id+")'>x</button></span>";
                        tagsContainer.append(addedTagMarkup);
                        suggestArea.empty();
                        $('#tag-name').val('');
                        NoOfTags++;
                        if(NoOfTags>4){
                            $('#proceed_btn').removeClass('disabled');
                        }
                    }
                },
                error: function(x,y,z) {
                    console.log(x);
                    console.log(y);
                    console.log(z);
                }
            });

        }

        function removeTag(id){
            var tag= $('#tag'+id);
            $.ajax({
                url: '/campaigns/remove-tags/{{$campaign->id}}/'+id,
                type: 'post',
                dataType: 'json',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response){
                    if(response != null){
                        console.log(response);
                        tag.remove();
                        NoOfTags--;
                        if(NoOfTags>4){
                            $('#proceed_btn').removeClass('disabled');
                        }
                    }
                },
                error: function(x,y,z) {
                    console.log(x);
                    console.log(y);
                    console.log(z);
                }
            });

        }
    </script>
@endsection
