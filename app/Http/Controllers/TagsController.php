<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    //
    public function searchTags(){
        $serchTerm = $_GET['search'];
        $tags = Tags::query()
                    ->where('name', 'LIKE',"%{$serchTerm}%")
                    ->limit(10)
                    ->get();
        return json_encode($tags);
    }
}
