<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsHomeController extends Controller
{
    //
    public function index($slug)
    {
        $new_detail = DB::table('news')->where([
            'slug' => $slug
        ])->first();

        $news = DB::table('news')->where([
            'status' => 1
        ])->get();

        return view(
            'homeuser.news.detail',
            [
                'new_detail' => $new_detail,
                'news'       => $news
            ]
        );
    }
}
