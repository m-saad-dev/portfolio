@extends('admin.layouts.app')
@section("title", 'services')
@section('breadcrumb')
    @include('admin.layouts.breadcrumb_segmants', [
        'menu'      => [
            'services' => route('admin.services.index'),
            'Create Service' => null,
        ],
    ])
@stop
@section('page_title')
   services
@stop
@section('content')
    <div class="card mb-5 mb-xl-10">
        @if (session()->has('issue_message'))
            <div class="alert alert-danger">{{ session()->get('issue_message') }}</div>
        @endif
        <!--begin::Form-->
        <form class="form" action="{{route('admin.services.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.services.fields')
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-light btn-active-light-primary me-2">cancel</button>
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">save</button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
@endsection
