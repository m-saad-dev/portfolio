@extends('admin.layouts.app')
@section("title", trans("menu.services"))
@section('breadcrumb')
    @include('admin.layouts.breadcrumb_segmants', [
        'menu'      => [
            'portfolios' => route('admin.portfolios.index'),
            'Edit Portfolio' => null,
        ],
    ])
@stop
@section('page_title')
    Edit Service
@stop
@section('actions')
    <a href="{{url()->previous()}}" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"> back </a>
@stop
@section('content')
    <div class="card mb-5 mb-xl-10">
        @if (session()->has('issue_message'))
            <div class="alert alert-danger">{{ session()->get('issue_message') }}</div>
        @endif
        <!--begin::Form-->
        <form class="form" action="{{route('admin.portfolios.update', ['portfolio' => $portfolio->id])}}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            @include('admin.portfolios.fields', $portfolio)
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
