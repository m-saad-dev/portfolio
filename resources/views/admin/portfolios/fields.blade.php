<!--begin::Image input placeholder-->
<!--begin::Card body-->
<div class="card-body border-top p-9">
    <!--begin::Image input placeholder-->
    
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Image:</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">            
            <style>
                .image-input-placeholder {
                    background-image: url('svg/avatars/blank.svg');
                }
            
                [data-bs-theme="dark"] .image-input-placeholder {
                    background-image: url('svg/avatars/blank-dark.svg');
                }
            </style>
            <!--end::Image input placeholder-->
            
            <!--begin::Image input-->
            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                <!--begin::Image preview wrapper-->
                <div class="image-input-wrapper w-125px h-125px" style='background-image: url("{{ isset($portfolio) && $portfolio->getFirstMedia('images') && $portfolio->getFirstMedia('images')->getFullUrl() ?  $portfolio->getFirstMedia('images')->getFullUrl() : asset('/assets/media/svg/avatars/blank.svg') }}")'></div>
                <!--end::Image preview wrapper-->
            
                <!--begin::Edit button-->
                <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                data-kt-image-input-action="change"
                data-bs-toggle="tooltip"
                data-bs-dismiss="click"
                title="Change image">
                    <i class="bi bi-pencil-fill fs-7"></i>
                <span class="path1"></span><span class="path2"></span></i>
            
                    <!--begin::Inputs-->
                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="image_remove" />
                    <!--end::Inputs-->
                </label>
                <!--end::Edit button-->
            
                <!--begin::Cancel button-->
                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                data-kt-image-input-action="cancel"
                data-bs-toggle="tooltip"
                data-bs-dismiss="click"
                title="Cancel image">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Cancel button-->
            
                <!--begin::Remove button-->
                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                data-kt-image-input-action="remove"
                data-bs-toggle="tooltip"
                data-bs-dismiss="click"
                title="Remove avatar">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Remove button-->
            </div>
            <!--end::Image input-->
        </div>
        <!--end::Image input-->
    </div>


<!--begin::Input group-->
<div class="row mb-6 mt-8">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name:</label>
    <!--end::Label-->
    <!--begin::Col-->
    <div class="col-lg-8">
        <input type="text" name="name" class="form-control form-control-lg form-control-solid" placeholder="name" value="{{isset($portfolio) ? $portfolio->name : (old('name') ?? '')}}" />
        @error('name')
        <span class="alert-danger" role="alert"> {{ $message }} </span>
        @enderror
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Type</label>
    <!--end::Label-->
    <!--begin::Col-->
    <div class="col-lg-8">
        <input type="text" name="type" class="form-control form-control-lg form-control-solid" placeholder="Type" value="{{isset($portfolio) ? $portfolio->type : (old('type') ?? '')}}" />
        @error('type')
        <span class="alert-danger" role="alert"> {{ $message }} </span>
        @enderror
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date</label>
    <!--end::Label-->
    <!--begin::Col-->
    <div class="col-lg-8">
        <input type="date" name="date" id="date" placeholder="date"  class="form-control form-control-lg form-control-solid" value="{{isset($portfolio) ? $portfolio->date : (old('date') ?? '')}}">
        @error('date')
        <span class="alert-danger" role="alert"> {{ $message }} </span>
        @enderror
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->
</div>
<!--end::Card body-->
