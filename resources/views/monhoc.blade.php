@section('script')
    <script src="{{ asset('js/backend/monhoc.js') }}"></script>
@endsection
@extends('layout.header')
@section('body')
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Môn học</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Trang chủ</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Môn học</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- END: Subheader -->
    <div class="m-content">
        <div class="row">
            <div class="col-xl-12">

                <!--begin::Portlet-->
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Danh sách môn học
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin::Section-->
                        <div class="m-section">
                            <div class="m-section__content">
                                <div style="float: right;margin-bottom: 1%">
                                    <a href="#" class="btn btn-success m-btn m-btn--icon btn-lg m-btn--icon-only  m-btn--pill" id="add">
                                        <i class="fa flaticon-app"></i>
                                    </a>
                                </div>
                                <form id="form1" method="post">
                                    @csrf
                                    <input class="hidden" value="@if (Session::has('taikhoan')) {{ Session::get('taikhoan')->hoten}}, {{Session::get('taikhoan')->matk }} @endif" id="nguoitao" name="nguoitao">
                                    <table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên môn</th>
                                        <th>Người tạo</th>
                                        <th>Chức năng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if (!isset($mon))
                                        <th>Không có dữ liệu</th>
                                    @else
                                        @foreach($mon as $val)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $val->tenmon }}</td>
                                            <td>{{ $val->taikhoan->hoten }}</td>
                                            <td>
                                                <button class="btn m-btn--pill    btn-warning">Sửa</button>&#09;
                                                <button class="btn m-btn--pill    btn-danger">Xóa</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                    <tr id="addmon">
                                    </tr>
                                    @if(isset($error))
                                        <th style="color:red;"> {{ $error }}</th>
                                    @endif
                                    </tbody>
                                </table>
                                </form>
                            </div>
                        </div>

                        <!--end::Section-->
                    </div>

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->

            </div>
        </div>
    </div>
    <script>
        function huy() {
            $('.tdadd').remove();
        }
        function themmon() {
            $('#form1').attr('action', '{{ route('add_monhoc') }}');
        }
    </script>
@endsection
