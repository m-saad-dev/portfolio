<!--begin::Card body-->
<div class="card-body border-top p-9">
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name:</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <input type="text" name="key" class="form-control form-control-lg form-control-solid" placeholder="key" value="{{isset($infoPiece) ? $infoPiece->key : (old('key') ?? '')}}" />
            @error('key')
            <span class="alert-danger" role="alert"> {{ $message }} </span>
            @enderror
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Value</label>
        <!--end::Label-->
        @if(!isset($infoPiece) || $infoPiece->key != "skills" && !($infoPiece->key == "bio" || $infoPiece->key == "get in touch"))
            <!--begin::Col-->
            <div class="col-lg-8">
                <input type="text" name="value" class="form-control form-control-lg form-control-solid" placeholder="Enter Value" value='{{isset($infoPiece) ? $infoPiece->value : (old("value") ?? "")}}' />
                @error('value')
                <span class="alert-danger" role="alert"> {{ $message }} </span>
                @enderror
            </div>
            <!--end::Col-->
        @elseif ($infoPiece->key == "bio" || $infoPiece->key == "get in touch")
            <!--begin::Col-->
            <div class="col-lg-8">
                <textarea type="text" name="value" cols="30" rows="15" class="form-control form-control-lg form-control-solid" placeholder="Enter Value" >
                    {{isset($infoPiece) ? $infoPiece->value : (old('value') ?? '')}}
                </textarea>
                @error('value')
                <span class="alert-danger" role="alert"> {{ $message }} </span>
                @enderror
            </div>
            <!--end::Col-->
        @else
        <!--begin::Input group-->
            <!--begin::Col-->
            <div class="col-lg-8">
                @foreach (json_decode($infoPiece->value, true) as $skillElement )
                @foreach ($skillElement as $skill => $percentage)
                <div class="row">
                    
                    <div class="col-sm-6">
                        <input type="text" name="value[{{ $loop->index }}][{{ $skill }}]" placeholder="skill name" value="{{isset($skill) ? $skill : (old('value')[$skill] ?? '')}}" class="form-control form-control-sm form-control-solid" placeholder="Skill Name" />
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="value[{{ $loop->index }}][{{ $skill }}]" class="form-control form-control-sm form-control-solid" placeholder="Percentage" value="{{isset($percentage) ? $percentage : (old('value')[$percentage] ?? '')}}" />
                        
                    </div>
                    
                </div>
                @endforeach
                @endforeach
            </div>
            <!--end::Col-->
        <!--end::Input group-->
        @endif
    </div>
</div>
<!--end::Card body-->
