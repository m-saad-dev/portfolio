 <!-- about -->
<section id="about">
    <div class="container">
        <div class="content">
            <div class="row">
                <!-- left sid -->
                <div class="col-md-6">
                    <!-- info -->
                    <div class="row">
                        <div class="col-sm-6 col-md-5 ">
                            <div class="about-info pb-3">
                                <img class="ms-2 rounded-3" src="{{ asset('assets/images/testimonial-2.jpg')}}" alt="Testimonial">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-7">
                            <div class="about-info">
                                @foreach($info as $infoPiece)
                                    @if(!in_array($infoPiece->key, ['skills', 'bio', 'get in touch']) )
                                    <p>
                                        <span class="fw-bold text-capitalize"> {{ $infoPiece->key }}: </span>
                                        <span> {{ $infoPiece->value }} </span>
                                    </p>
                                    @endif
                                @endforeach
                            </div>
                        </div>    
                    </div>
                    <!-- skill -->
                    <div class="row">
                        <div class="skill col-sm-12 py-4">
                            <h6 class="fw-600"> Skill </h6>
                            @foreach($info->where('key', "skills") as $infoPiece)
                            @if($infoPiece->key == 'skills')
                                @foreach(json_decode($infoPiece->value, true) as $item)
                                    @foreach($item as $skill => $percentage)
                                        <span> {{ $skill . ' ' .  $percentage }} </span>
                                        <div class="progress mt-1 mb-4 rounded-start-0 rounded-end-0" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 85%"></div>
                                        </div>
                                    @endforeach
                                @endforeach

                            @endif
                            @endforeach
                        </div>
                    </div>        
                </div>
                <!-- right side -->
                <div class="col-md-6">
                    <div class="row about-me">
                        <div class="col-sm-12">
                            <h5 >
                                About me
                            </h5>
                        </div>
                        <div class="col-sm-12">
                            <p>
                                Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt.
                                
                            </p>
                            <p>
                                Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.
                            </p>
                            <p>
                                Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12"></div>
        </div>
    </div>
</section>