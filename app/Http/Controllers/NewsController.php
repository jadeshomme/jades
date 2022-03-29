<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\NewCategory;




class NewsController extends Controller
{

    public function add(Request $request)
    {

    }

    public function category()
    {
        $get_new_category = DB::table('new_category')->get();
        return view('dashboard.news.category',[
            'get_new_category' => $get_new_category,
        ]);
    }

    public function categoryAdd(Request $request)
    {
        return view('dashboard.news.categoryAdd');
    }

    public function categoryAddPost(Request $request)
    {
        $validate = Validator::make(

            $request->all(),
            [
                'name'     => 'required',
                'slug'     => 'required',
            ],
            [
                'name.required'       => 'Tên chuyên mục không được bỏ trống',
                'slug.required'       => 'Slug không được để trống',
            ]

        );


        if ($validate->fails()) {
            return redirect()->route('dashboard.newsCategory.add')->withErrors($validate);
        }


        $newCategory = new NewCategory;

        $newCategory->name        = $request->get('name');
        $newCategory->slug        = $request->get('slug');
        $newCategory->status      = $request->get('status');

        $newCategory->save();

        if ($newCategory->wasRecentlyCreated == true) {

            return redirect()->route('dashboard.newsCategory.add')->with('success', 'Thêm chuyên mục thành công');
        } else {

            return redirect()->route('dashboard.newsCategory.add')->with('error', 'Có lỗi xảy ra');
        }
    }

    public function categoryEdit($id)
    {
        $edit_new_category = DB::table('new_category')->where([
            'id' => $id
        ])->first();

        return view(
            'dashboard.news.categoryEdit',
            [
                'edit_new_category' => $edit_new_category,
            ]
        );
    }

    public function categoryEditPost(Request $request)
    {
        $validate = Validator::make(

            $request->all(),
            [
                'name'     => 'required',
                'slug'     => 'required',
            ],
            [
                'name.required'       => 'Tên chuyên mục không được bỏ trống',
                'slug.required'       => 'Slug không được để trống',
            ]

        );


        if ($validate->fails()) {
            return redirect()->route('dashboard.newsCategory.edit', ['id' => $request->get('id')])->withErrors($validate);
        }




        $newCategory = NewCategory::where('id', $request->get('id'))->update(array(
            'name'        => $request->get('name'),
            'slug'        => $request->get('slug'),
            'status'      => $request->get('status'),
        ));


        if ($newCategory == 1) {

            return redirect()->route('dashboard.newsCategory.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập chuyên mục thành công');
        } else {

            return redirect()->route('dashboard.newsCategory.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
        }
    }

    public function categoryDelete(Request $request)
    {
        $delete = DB::table('new_category')->where('id', $request->get('id'))->delete();
        if ($delete == 1) {
            return response('Xoá chuyên mục thành công!');
        } else {
            return response('Xoá chuyên mục không thành công!', 400);
        }
    }
}
