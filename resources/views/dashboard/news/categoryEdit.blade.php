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
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Thêm mới chuyên mục bài viết</h5>
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
        <form id="form" method="post" action="{{ route('dashboard.newsCategory.editPost') }}" enctype="multipart/form-data">
        @csrf
        <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="first" data-wizard-clickable="true">
            <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Thông tin chung</h3>
            </div>
            <input type="hidden" name="id" class="form-control id" value="{{$edit_new_category->id}}">
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tên chuyên mục</label>
                    <input type="text" name="name" class="form-control name" placeholder="Tên chuyên mục" value="{{$edit_new_category->name}}">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control slug" placeholder="Vd:khai-truong" value="{{$edit_new_category->slug}}">
                </div>
                  <!-- /.form-group -->

                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control select2bs4" name="status"  style="width: 100%;">
                            <option value="1"
                            @if ($edit_new_category->status == 1)
                                selected
                            @endif>Hoạt động</option>
                            <option value="2"
                            @if ($edit_new_category->status == 2)
                                selected
                            @endif>Dừng hoạt động</option>
                          </select>
                    </div>
                  <!-- /.form-group -->
                </div>

                <!-- /.col -->
              </div>
              <button style="margin-top: 10px;" type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Lưu</button>
              <form>
              <!-- /.row -->
            </div>
        </div>
    </div>
    </div>
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
                    noSpace: true
                },

                content:{
                    required: true,
                    noSpace: true
                },
            },
            // Specify validation error messages
            messages: {
                name:{
                    required: '* Tên slider không được để trống!',
                    noSpace: '* Tên slider không được để trống!',

                },
                content:{
                    required: '* Nội dung slider không được để trống!',
                    noSpace: '* Nội dung slider không được để trống!',
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
@endsection
