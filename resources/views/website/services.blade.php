<!-- services -->
<section id="services">
    <div class="container-fluid container-md text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2 class="fw-bold text-uppercase">services</h2>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
            @foreach($services as $service)
            <div class="col-sm-12 col-md-4">
                <div class="card content d-flex flex-wrap justify-content-center align-items-center mh-75">
                    <div class="icon-outer-circle d-flex justify-content-center align-items-center rounded-circle">
                        <div class="icon">
                            {!! $service->icon_tag !!}
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title text-uppercase ">{{ $service->name }}</h2>
                        <p class="card-text text-wrap">
                            {{ $service->description }}
                        </p>                    
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
