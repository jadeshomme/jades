<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\NewCategory;
use App\Models\News;




class NewsController extends Controller
{

    public function index(Request $request)
    {
        $get_new = DB::table('news')->paginate(10);

        return view('dashboard.news.index',[
            'get_new' => $get_new,
        ]);
    }

    public function add(Request $request)
    {
        $get_new_category = DB::table('new_category')->get();

        return view('dashboard.news.add',[
            'get_new_category' => $get_new_category,
        ]);
    }

    public function addPost(Request $request)
    {
        if ($request->file('news_img') != '') {
            $path = public_path() . '/uploads/images/';


            //upload new file
            $file     =    $request->file('news_img');
            $filename =    $file->getClientOriginalName();
            $file->move($path, $filename);


            $validate = Validator::make(

                $request->all(),
                [
                    'name'        => 'required',
                    'description' => 'required',
                    'content'     => 'required',
                    'slug'        => 'required',

                ],
                [

                    'name.required'          => 'Tên không được bỏ trống',
                    'description.required'   => 'Giới thiệu không được để trống',
                    'content.required'       => 'Chi tiết không được để trống',
                    'slug.required'          => 'Tiêu đề không được để trống',
                ]

            );

            if ($validate->fails()) {
                return redirect()->route('dashboard.news.add')->withErrors($validate);
            }


            $news = new News;

            $news->name                = $request->get('name');
            $news->description         = $request->get('description');
            $news->content             = $request->get('content');
            $news->slug                = $request->get('slug');
            $news->img                 = $filename;
            $news->status              = $request->get('status');
            $news->new_category_id     = $request->get('new_category_id');


            $news->save();

            if ($news->wasRecentlyCreated == true) {

                return redirect()->route('dashboard.news.add')->with('success', 'Thêm tin tức thành công');
            } else {

                return redirect()->route('dashboard.news.add')->with('error', 'Có lỗi xảy ra');
            }
        } else {

            return redirect()->route('dashboard.news.add')->with('error', 'Xin vui lòng chọn ảnh đại diện cho tin tức');
        }
    }

    public function edit($id)
    {
        $get_new_category = DB::table('new_category')->get();
        $edit_new = DB::table('news')->where([
            'id' => $id
        ])->first();

        return view(
            'dashboard.news.edit',
            [
                'edit_new' => $edit_new,
                'get_new_category' => $get_new_category
            ]
        );
    }

    public function update(Request $request)
    {
        if ($request->file('news_img') != '') {
            $path = public_path() . '/uploads/images/';

            //upload new file
            $file     =    $request->file('news_img');
            $filename =    $file->getClientOriginalName();
            $file->move($path, $filename);


            $validate = Validator::make(

                $request->all(),
                [
                    'name'        => 'required',
                    'description' => 'required',
                    'content'     => 'required',
                    'slug'        => 'required',

                ],
                [

                    'name.required'          => 'Tên không được bỏ trống',
                    'description.required'   => 'Giới thiệu không được để trống',
                    'content.required'       => 'Chi tiết không được để trống',
                    'slug.required'          => 'Tiêu đề không được để trống',
                ]

            );

            if ($validate->fails()) {
                return redirect()->route('dashboard.news.edit', ['id' => $request->get('id')])->withErrors($validate);
            }


            $product = News::where('id', $request->get('id'))->update(array(
                'name'                => $request->get('name'),
                'description'         => $request->get('description'),
                'content'             => $request->get('content'),
                'slug'                => $request->get('slug'),
                'img'                 => $filename,
                'status'              => $request->get('status'),
                'new_category_id'     => $request->get('new_category_id'),
            ));


            if ($product == 1) {

                return redirect()->route('dashboard.news.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập tin tức thành công');
            } else {

                return redirect()->route('dashboard.news.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        } else {

            $validate = Validator::make(

                $request->all(),
                [
                    'name'        => 'required',
                    'description' => 'required',
                    'content'     => 'required',
                    'slug'        => 'required',

                ],
                [

                    'name.required'          => 'Tên không được bỏ trống',
                    'description.required'   => 'Giới thiệu không được để trống',
                    'content.required'       => 'Chi tiết không được để trống',
                    'slug.required'          => 'Tiêu đề không được để trống',
                ]

            );

            if ($validate->fails()) {
                return redirect()->route('dashboard.news.edit', ['id' => $request->get('id')])->withErrors($validate);
            }


            $product = News::where('id', $request->get('id'))->update(array(
                'name'                => $request->get('name'),
                'description'         => $request->get('description'),
                'content'             => $request->get('content'),
                'slug'                => $request->get('slug'),
                'status'              => $request->get('status'),
                'new_category_id'     => $request->get('new_category_id'),
            ));


            if ($product == 1) {
                return redirect()->route('dashboard.news.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập tin tức thành công');
            } else {
                return redirect()->route('dashboard.news.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table('news')->where('id', $request->get('id'))->delete();
        if ($delete == 1) {
            return response('Xoá tin tức thành công!');
        } else {
            return response('Xoá tin tức không thành công!', 400);
        }
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
