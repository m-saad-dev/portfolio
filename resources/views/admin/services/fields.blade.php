<!--begin::Card body-->
<div class="card-body border-top p-9">
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name:</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <input type="text" name="name" class="form-control form-control-lg form-control-solid" placeholder="name" value="{{isset($service) ? $service->name : (old('name') ?? '')}}" />
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
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Icon Tag</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <input type="text" name="icon_tag" class="form-control form-control-lg form-control-solid" placeholder="Icon Tag" value="{{isset($service) ? $service->icon_tag : (old('icon_tag') ?? '')}}" />
            @error('icon_tag')
            <span class="alert-danger" role="alert"> {{ $message }} </span>
            @enderror
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Description</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <textarea name="description" id="" cols="30" placeholder="description" rows="5" style="resize: none;"" class="form-control form-control-lg form-control-solid">{{isset($service) ? $service->description : (old('description') ?? '')}}</textarea>
            @error('description')
            <span class="alert-danger" role="alert"> {{ $message }} </span>
            @enderror
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
</div>
<!--end::Card body-->
