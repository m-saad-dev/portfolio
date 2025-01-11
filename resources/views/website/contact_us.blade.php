<!-- contact-us -->
<section id="contact-us">
    <div class="container">
        <div class="content p-5">
            
            <div class="row">
                
                <div class="col-md-6 mb-4">
                    <div class="title text-start">
                        <h5 class="text-capitalize">
                            Send Message Us
                        </h5>
                    </div>
                    
                    <form action="{{ route('admin.messages.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input name="name" class="form-control" type="text" placeholder="Your Name" aria-label="Your Name">
                        </div>
                        <div class="mb-3">
                            <input name="email" class="form-control" type="email" placeholder="Your Email" aria-label="Your Email">
                        </div>
                        <div class="mb-3">
                            <input name="subject" class="form-control" type="text" placeholder="Subject" aria-label="Subject">
                        </div>
                        <div class="mb-3">
                            <textarea name="message_body" class="form-control" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary py-2 px-4 fs-5 rounded-pill text-capitalize">send message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="title text-start">
                        <h5 class="text-capitalize">
                            get in touch
                        </h5>
                    </div>
                    <div class="text">
                        @if($info->where('key', "get in touch"))
                        <p class="lead">
                            {{ $info->where('key', "get in touch")->first() ? $info->where('key', "get in touch")->first()->value : ""}}
                        </p>
                        @endif
                    </div>
                    <div class="row gy-2 mb-3 ">
                        <div class="col-1 pe-2">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="col-11 px-0">
                            @if($info->where('key', "address"))
                            <span class="lead">
                                {{$info->where('key', "address")->first() ? $info->where('key', "address")->first()->value : "" }}
                            </span>
                            @endif
                        </div>
                        <div class="col-1 pe-2">
                            <i class="fa-solid fa-mobile"></i>
                        </div>
                        <div class="col-11 px-0">
                            @if($info->where('key', "phone"))
                            <span class="lead">
                                {{ $info->where('key', "phone")->first() ? $info->where('key', "phone")->first()->value : ""}}
                            </span>
                            @endif
                        </div>
                        <div class="col-1 pe-2">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="col-11 px-1">
                            @if($info->where('key', "email"))
                            <span class="lead">
                                {{ $info->where('key', "email")->first() ? $info->where('key', "email")->first()->value : "" }}
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
