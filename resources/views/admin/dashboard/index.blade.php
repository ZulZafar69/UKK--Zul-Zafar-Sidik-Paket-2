@extends('admin.layouts.main')
@section('route', 'Dashboard')
@section('title', 'Dashboard')

@if (Auth::guard('admin')->user()->level =='admin')
@section('back', ' Dashboard Admin')
@endif
@if (Auth::guard('admin')->user()->level =='petugas')
@section('back', ' Dashboard Petugas')
@endif

@section('content')

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            {{-- <div class="pull-right mb-3">
                <a class="btn btn-info" href="{{ route('petugas.create') }}"> Create</a>
            </div> --}}
            <!--Begin::Row-->
            <!--End::Row-->
            <!--Begin::Row-->
            <!--End::Row-->
            <!--Begin::Row-->
            <!--End::Row-->
            <!--Begin::Row-->
            <!--End::Row-->
            <!--Begin::Row-->
            {{-- <div class="row">
                <!--begin::Stats Widget 13-->
                @if (Auth::guard('admin')->user()->level =='admin')
                <div class="col-xl-4">
                    <a href="#" class="card card-custom bg-danger bg-hover-state-danger card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color:rgb(255, 255, 255);" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                  </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-danger font-weight-bolder font-size-h5 mb-2 mt-5">Petugas</div>
                            <div class="font-weight-bold text-inverse-danger font-size-sm">Lands, Houses, Ranchos, Farms
                            </div>
                        </div>
                        <!--end::Body-->
                        <!--end::Stats Widget 13-->
                    </div>
                    </a>
                    @endif
                <div class="col-xl-4">
                    <!--begin::Stats Widget 14-->
                    <a href="#" class="card card-custom bg-primary bg-hover-state-primary card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color:rgb(255, 255, 255);" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                  </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-primary font-weight-bolder font-size-h5 mb-2 mt-5">Masyarakat</div>
                            <div class="font-weight-bold text-inverse-primary font-size-sm">Flats, Shared Rooms, Duplex
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Stats Widget 14-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Stats Widget 15-->
                    <a href="#" class="card card-custom bg-success bg-hover-state-success card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color:rgb(255, 255, 255);" class="bi bi-archive" viewBox="0 0 16 16">
                                    <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                  </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-success font-weight-bolder font-size-h5 mb-2 mt-5">Pengaduan</div>
                            <div class="font-weight-bold text-inverse-success font-size-sm">50% Increased for FY20</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Stats Widget 15-->
                </div>
            </div> --}}
            <!--End::Row-->
            <!--Begin::Row-->
            {{-- <div class="row">
                <div class="col-xl-4">
                    <!--begin::Stats Widget 16-->
                    <a href="#" class="card card-custom card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="svg-icon svg-icon-info svg-icon-3x ml-n1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path
                                            d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-white font-weight-bolder font-size-h5 mb-2 mt-5">Shopping Cart</div>
                            <div class="font-weight-bold text-inverse-white font-size-sm">Lands, Houses, Ranchos, Farms
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Stats Widget 16-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Stats Widget 17-->
                    <a href="#"
                        class="card card-custom bg-info bg-hover-state-info card-stretch card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <rect fill="#000000" x="4" y="4" width="7"
                                            height="7" rx="1.5" />
                                        <path
                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                            fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-info font-weight-bolder font-size-h5 mb-2 mt-5">Apartments</div>
                            <div class="font-weight-bold text-inverse-info font-size-sm">Flats, Shared Rooms, Duplex</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Stats Widget 17-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Stats Widget 18-->
                    <a href="#" class="card card-custom bg-dark bg-hover-state-dark card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <rect fill="#000000" opacity="0.3" x="13" y="4"
                                            width="3" height="16" rx="1.5" />
                                        <rect fill="#000000" x="8" y="9" width="3"
                                            height="11" rx="1.5" />
                                        <rect fill="#000000" x="18" y="11" width="3"
                                            height="9" rx="1.5" />
                                        <rect fill="#000000" x="3" y="13" width="3"
                                            height="7" rx="1.5" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-dark font-weight-bolder font-size-h5 mb-2 mt-5">Sales Stats</div>
                            <div class="font-weight-bold text-inverse-dark font-size-sm">50% Increased for FY20</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Stats Widget 18-->
                </div>
            </div> --}}
            <!--End::Row-->
            <!--Begin::Row-->
            <!--End::Row-->
            <!--Begin::Row-->
            <!--End::Row-->
            <!--Begin::Row-->
            <!--End::Row-->
            <!--Begin::Row-->
            <!--End::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection
