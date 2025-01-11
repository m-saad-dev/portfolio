<!-- portfolio -->
<section id="portfolio">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2 class="fw-bold text-uppercase">portfolio</h2>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
            @foreach($portfolios as $portfolio)
            <div class="col-md-4">
                <div class="card content">
                    <a id="work-1" href="#work-1">
                        <img style="width: 100%; height: 400px" src="{{ isset($portfolio) && $portfolio->getFirstMedia('images') && $portfolio->getFirstMedia('images')->getFullUrl() ?  $portfolio->getFirstMedia('images')->getFullUrl() : asset('/assets/media/svg/avatars/blank.svg') }}" class="card-img-top" alt="work-1">
                    </a>
                    <div class="card-footer">
                        <div class="row justify-content-between align-items-center  ">
                            <div class="col-sm-8">
                                <div class="body py-2 text-start">
                                    <h2 class="card-title"> {{ $portfolio->name }}</h2>
                                    <p class="card-text"> <span class="text-capitalize text-primary"> {{ $portfolio->type }} </span> / {{ $portfolio->date }} </p>               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
