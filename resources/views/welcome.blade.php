<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts -->
    <title> DevFolio </title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Styles / Scripts -->assets
</head>
<body>
    <!-- navbar -->
    <nav id="navbar" class="fixed-top navbar fw-600 navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fsize-28 lheight-34 lspacing-1fsize-28 lheight-34 lspacing-1" href="#">DevFolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse lheight-24 lspacing-1" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" >
                    <li class="nav-item py-1">
                        <a class="nav-link active" aria-current="page" href="#header">home</a>
                    </li>
                    <li class="nav-item py-1">
                        <a class="nav-link" aria-current="page" href="#about">about</a>
                    </li>
                    <li class="nav-item py-1">
                        <a class="nav-link" aria-current="page" href="#services">services</a>
                    </li>
                    <li class="nav-item py-1">
                        <a class="nav-link pe-0" aria-current="page" href="#contact-us">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- header -->
    <header id="header">
        <div class="header-content vh-100 d-flex flex-column justify-content-center align-content-center text-center">
            <div class="container">
                <h1 class="fw-600 lspacing-1 text-white mb-4">
                    I am Mohammed Saad
                </h1>
                <span class="changable-word text-white"></span>
            </div>
        </div>
    </header>
    
    <!-- main content -->
    <main>
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
                                        <p>
                                            <span class="fw-bold"> Name: </span>
                                            <span> Mohammed Saad </span>
                                        </p>
                                        <p>
                                            <span class="fw-bold"> Profile: </span>
                                            <span> full stack developer </span>
                                        </p>
                                        <p> 
                                            <span class="fw-bold"> Email: </span>
                                            <span> stm.official@outlook.com </span>
                                        </p>
                                        <p>
                                            <span class="fw-bold"> Phone: </span>
                                            <span> (011) 2832-6661 </span>
                                        </p>
                                    </div>
                                </div>    
                            </div>
                            <!-- skill -->
                            <div class="row">
                                <div class="skill col-sm-12 py-4">
                                    <h6 class="fw-600"> Skill </h6>
                                    <span> HTML 85% </span>
                                    <div class="progress mt-1 mb-4 rounded-start-0 rounded-end-0" role="progressbar" aria-label="Basic example" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                    <span> CSS3 75% </span>
                                    <div class="progress mt-1 mb-4 rounded-start-0 rounded-end-0" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 75%"></div>
                                    </div>
                                    <span> PHP 50% </span>
                                    <div class="progress mt-1 mb-4 rounded-start-0 rounded-end-0" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <span> JAVASCRIPT 90% </span>
                                    <div class="progress mt-1 mb-4 rounded-start-0 rounded-end-0" role="progressbar" aria-label="Basic example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
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
                    <div class="col-sm-12 col-md-4">
                        <div class="card content d-flex flex-wrap justify-content-center align-items-center">
                            <div class="icon-outer-circle d-flex justify-content-center align-items-center rounded-circle">
                                <div class="icon">
                                    <i class="fa-solid fa-briefcase"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title text-uppercase ">web design</h2>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia, provident vitae! Magni tempora perferendis eum non provident
                                </p>                    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card content d-flex flex-wrap justify-content-center align-items-center">
                            <div class="icon-outer-circle d-flex justify-content-center align-items-center rounded-circle">
                                <div class="icon">
                                    <i class="fa-regular fa-calendar-check"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title text-uppercase ">web development</h2>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia, provident vitae! Magni tempora perferendis eum non provident
                                </p>                    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card content d-flex flex-wrap justify-content-center align-items-center">
                            <div class="icon-outer-circle d-flex justify-content-center align-items-center rounded-circle">
                                <div class="icon">
                                    <i class="fa-solid fa-signal"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title text-uppercase ">responsive design</h2>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia, provident vitae! Magni tempora perferendis eum non provident
                                </p>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- statistics -->
        <section id="statistics">
            <div class="content">
                <div class="container ">
                    <div class="row gy-4 justify-content-center align-items-center">
                        <div class="statistic-item col-12 col-sm-3 d-flex flex-column justify-content-center align-items-center ">
                            <div class="icon-outer-circle d-flex justify-content-center align-items-center rounded-circle">
                                <div class="icon">
                                    <i class="fa-solid fa-check text-white"></i>
                                </div>
                            </div>
                            <span class="text-white"> 450 </span>
                            <h6 class="fw-normal text-uppercase text-white text-center">works completed</h6>
                        </div>
                        <div class="statistic-item col-12 col-sm-3 d-flex flex-column justify-content-center align-items-center">
                            <div class="icon-outer-circle d-flex justify-content-center align-items-center rounded-circle">
                                <div class="icon">
                                    <i class="fa-solid fa-rectangle-list text-white"></i>
                                </div>
                            </div>
                            <span class="text-white"> 450 </span>
                            <h6 class="fw-normal text-uppercase text-white text-center">works completed</h6>
                        </div>
                        <div class="statistic-item col-12 col-sm-3 d-flex flex-column justify-content-center align-items-center">
                            <div class="icon-outer-circle d-flex justify-content-center align-items-center rounded-circle">
                                <div class="icon">
                                    <i class="fa-solid fa-user-group text-white"></i>
                                </div>
                            </div>
                            <span class="text-white"> 450 </span>
                            <h6 class="fw-normal text-uppercase text-white text-center">works completed</h6>
                        </div>
                        <div class="statistic-item col-12 col-sm-3 d-flex flex-column justify-content-center align-items-center">
                            <div class="icon-outer-circle d-flex justify-content-center align-items-center rounded-circle">
                                <div class="icon">
                                    <i class="fa-solid fa-award text-white"></i>
                                </div>
                            </div>
                            <span class="text-white"> 450 </span>
                            <h6 class="fw-normal text-uppercase text-white text-center">works completed</h6>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        
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
                    <div class="col-md-4">
                        <div class="card content">
                            <a id="work-1" href="#work-1">
                                <img src="{{ asset('assets/images/work-1.jpg')}}" class="card-img-top" alt="work-1">
                            </a>
                            <div class="card-footer">
                                <div class="row justify-content-between align-items-center  ">
                                    <div class="col-sm-8">
                                        <div class="body py-2 text-start">
                                            <h2 class="card-title"> Lorem impsum dolor</h2>
                                            <p class="card-text"> <span class="text-capitalize text-primary"> web design </span> / 18 Sep. 2018 </p>               
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="plus-icon px-2 d-flex justify-content-end">
                                            <i class="fa-solid fa-circle-plus fa-3x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card content">
                            <a id="work-2" href="#work-2">
                                <img src="{{ asset('assets/images/work-2.jpg')}}" class="card-img-top" alt="work-2">
                            </a>
                            <div class="card-footer">
                                <div class="row justify-content-between align-items-center  ">
                                    <div class="col-sm-8">
                                        
                                        <div class="body py-2 text-start">
                                            <h2 class="card-title"> Loreda Cuno Nere.</h2>
                                            <p class="card-text"> <span class="text-capitalize text-primary"> web design </span> / 18 Sep. 2018 </p>               
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="plus-icon px-2 d-flex justify-content-end">
                                            <i class="fa-solid fa-circle-plus fa-3x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card content">
                            <a id="work-3" href="#work-3">
                                <img src="{{ asset('assets/images/work-3.jpg')}}" class="card-img-top" alt="work-3">
                            </a>
                            <div class="card-footer">
                                <div class="row justify-content-between align-items-center  ">
                                    <div class="col-sm-8">
                                        
                                        <div class="body py-2 text-start">
                                            <h2 class="card-title"> Lorem, ipsum dolor.</h2>
                                            <p class="card-text"> <span class="text-capitalize text-primary"> web design </span> / 18 Sep. 2018 </p>               
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="plus-icon px-2 d-flex justify-content-end">
                                            <i class="fa-solid fa-circle-plus fa-3x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card content">
                            <a id="work-4" href="#work-1">
                                <img src="{{ asset('assets/images/work-4.jpg')}}" class="card-img-top" alt="work-4">
                            </a>
                            <div class="card-footer">
                                <div class="row justify-content-between align-items-center  ">
                                    <div class="col-sm-8">
                                        
                                        <div class="body py-2 text-start">
                                            <h2 class="card-title"> Bindo Laro Cado</h2>
                                            <p class="card-text"> <span class="text-capitalize text-primary"> web design </span> / 18 Sep. 2018 </p>               
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="plus-icon px-2 d-flex justify-content-end">
                                            <i class="fa-solid fa-circle-plus fa-3x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card content">
                            <a id="work-5" href="#work-5">
                                <img src="{{ asset('assets/images/work-5.jpg')}}" class="card-img-top" alt="work-5">
                            </a>
                            <div class="card-footer">
                                <div class="row justify-content-between align-items-center  ">
                                    <div class="col-sm-8">
                                        
                                        <div class="body py-2 text-start">
                                            <h2 class="card-title"> Studio Lena Mado</h2>
                                            <p class="card-text"> <span class="text-capitalize text-primary"> web design </span> / 18 Sep. 2018 </p>               
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="plus-icon px-2 d-flex justify-content-end">
                                            <i class="fa-solid fa-circle-plus fa-3x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card content">
                            <a id="work-6" href="#work-6">
                                <img src="{{ asset('assets/images/work-6.jpg')}}" class="card-img-top" alt="work-6">
                            </a>
                            <div class="card-footer">
                                <div class="row justify-content-between align-items-center  ">
                                    <div class="col-sm-8">
                                        
                                        <div class="body py-2 text-start">
                                            <h2 class="card-title"> Studio Big Bang</h2>
                                            <p class="card-text"> <span class="text-capitalize text-primary"> web design </span> / 18 Sep. 2018 </p>               
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="plus-icon px-2 d-flex justify-content-end">
                                            <i class="fa-solid fa-circle-plus fa-3x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
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
                            
                            <form>
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
                                    <textarea name="messege" class="form-control" rows="5" placeholder="Message"></textarea>
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
                                <p class="lead">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                                    expedita aperiam aliquid at.
                                    Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                                    mollitia inventore?
                                </p>
                            </div>
                            <div class="row gy-2 mb-3 ">
                                <div class="col-1 pe-2">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="col-11 px-0">
                                    <span>
                                        329 WASHINGTON ST BOSTON, MA 02108
                                    </span>
                                </div>
                                <div class="col-1 pe-2">
                                    <i class="fa-solid fa-mobile"></i>
                                </div>
                                <div class="col-11 px-0">
                                    <span>
                                        (617) 557-0089
                                    </span>
                                </div>
                                <div class="col-1 pe-2">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="col-11 px-1">
                                    <span>
                                        contact@example.com
                                    </span>
                                </div>
                            </div>
                            <div class="row gx-5">
                                <div class="col-1">
                                    <a href="https://www.facebook.com" class="d-inline-block" target="_blank">
                                        <span class="fa-stack fa-lg" style="vertical-align: top;">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fa-brands fa-facebook fa-stack-1x text-black"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-1">
                                    <a href="https://www.instagram.com" class="d-inline-block" target="_blank">
                                        <span class="fa-stack fa-lg" style="vertical-align: top;">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fa-brands fa-instagram fa-stack-1x text-black"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-1">
                                    <a href="https://www.twitter.com" class="d-inline-block" target="_blank">
                                        <span class="fa-stack fa-lg" style="vertical-align: top;">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fa-brands fa-twitter fa-stack-1x text-black"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-1">
                                    <a href="https://linkedin.com" class="d-inline-block" target="_blank">
                                        <span class="fa-stack fa-lg" style="vertical-align: top;">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fa-brands fa-linkedin fa-stack-1x text-black"></i>
                                        </span>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    
    <!-- footer -->
    <footer class="text-center">
        <div class="container">
            <p class="text-white mb-1">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
            <p class="text-white mb-0">Designed by BootstrapMade </p>
        </div>
    </footer>
    
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
