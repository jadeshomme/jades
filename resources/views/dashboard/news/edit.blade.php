@extends('dashboard.layout.master')
<link href="{{asset('/admin/assets/css/pages/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css" />
@section('main')
<style>
    .error{
        color:red !important;
    }
    .image-input .image-input-wrapper {
        width: 250px;
        height: 200px;
    }
</style>
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Cập nhập tin tức</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>

                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->

            <!--end::Toolbar-->
        </div>
    </div>
    <div class="container">
        @include('elements.show_error')
        <form id="form" method="post" action="{{ route('dashboard.news.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="first" data-wizard-clickable="true">
            <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Thông tin chung</h3>
            </div>
            <input type="hidden" name="id" class="form-control id" value="{{$edit_new->id}}">
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="name" class="form-control name" placeholder="Tiêu đề" value="{{$edit_new->name}}">
                  </div>
                  <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control slug" placeholder="vd:test-thoi-nhe" value="{{$edit_new->slug}}">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label> Giới thiệu </label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Giới thiệu qua về tin tức" maxlength="65535">{{$edit_new->description}}</textarea>
                </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label>Chi tiết</label>
                    <textarea name="content" id="kt-ckeditor-5">
                        <h4></h4>
                        {{$edit_new->content}}
                    </textarea>
                  </div>

                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Trạng thái</label>
                    <select class="form-control select2bs4" name="status"  style="width: 100%;">
                        <option value="1" @if ($edit_new->status == 1)
                            selected
                        @endif>Hiển thị</option>
                        <option value="2" @if ($edit_new->status == 2)
                            selected
                        @endif>Không hiển thị</option>
                      </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Chuyên mục tin tức</label>
                    <select class="form-control select2bs4" name="new_category_id"  style="width: 100%;">
                        @foreach ($get_new_category as $category)
                            <option value="{{$category->id}}" @if ($edit_new->new_category_id == $category->id)
                                selected
                            @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Ảnh đại diện</label>
                        <div class="col-lg-9 col-xl-9">
                            <div class="image-input" id="kt_image_2">
                                <div class="image-input-wrapper" style="background-image: url({{asset('/uploads/images/'.$edit_new->img.'')}})"></div>

                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Ảnh đại diện">
                                 <i class="fa fa-pen icon-sm text-muted"></i>
                                 <input type="file" name="news_img" accept=".png, .jpg, .jpeg"/>
                                 <input type="hidden" name="profile_avatar_remove"/>
                                </label>

                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Xoá">
                                 <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                               </div>
                        </div>
                 </div>



                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
        </div>
            </div>
        </div>

        {{-- Giá bán,kích thước sản phẩm --}}


        <button style="margin-top: 10px;" type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Lưu</button>
    </form>
</div>


@endsection
@section('js')
<script src="{{asset('/admin/assets/js/pages/custom/user/add-user.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

<script>
    var avatar2 = new KTImageInput('kt_image_2');
</script>

<script>
    $(document).ready(function () {
        jQuery.validator.addMethod("noSpace", function(value, element) {
            value = value.trim();
            if (value != "") {
                return true;
            }
            return value.indexOf(" ") < 0 && value != "";
        }, "No space please and don't leave it empty");

        $("#form").validate({
            rules: {
                name: {
                    required: true,
                    noSpace: true,
                },
                description:{
                    required: true,
                    noSpace: true,
                    maxlength: 300,
                    minlength: 50
                },
                content:{
                    required: true,
                    noSpace: true,
                    minlength: 100
                },
                slug:{
                    required: true,
                    noSpace: true,
                }

            },
            // Specify validation error messages
            messages: {
                name:{
                    required: '* Tên không được để trống!',
                    noSpace: '* Tên không được để trống!',

                },
                description:{
                    required: '* Mô tả ngắn không được để trống!',
                    noSpace: '* Mô tả ngắn không được để trống!',
                    minlength:'* Mô tả ngắn ít nhất phải là 50 kí tự',
                    maxlength: '* Mô tả ngắn nhiều nhất là 300 kí tự'
                },
                content:{
                    required: '* Giới thiệu không được để trống!',
                    noSpace: '* Giới thiệu không được để trống!',
                    minlength: '* Giới thiệu ít nhất phải có 100 ký tự'
                },
                slug:{
                    required: '* Slug không được để trống!',
                    noSpace: '* Slug không được để trống!',
                },

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
        });
    })
 </script>

 <!--begin::Page Vendors(used by this page)-->
 <script src="{{asset('/admin/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
 <!--end::Page Vendors-->
 <!--begin::Page Scripts(used by this page)-->
 <script src="{{asset('/admin/assets/js/pages/crud/forms/editors/ckeditor-classic.js')}}"></script>


@endsection
