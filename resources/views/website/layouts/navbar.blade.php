    <!-- navbar -->
    <nav id="navbar" class="fixed-top navbar fw-600 navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fsize-28 lheight-34 lspacing-1fsize-28 lheight-34 lspacing-1" href="#">DevFolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse lheight-24 lspacing-1" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0"  >
                    <li class="nav-item py-1">
                        <a class="nav-link active"   onclick="toggleMenuUnderLine(this.href)" aria-current="page" href="#header">home</a>
                    </li>
                    <li class="nav-item py-1">
                        <a class="nav-link" onclick="toggleMenuUnderLine(this.href)" aria-current="page" href="#about">about</a>
                    </li>
                    <li class="nav-item py-1">
                        <a class="nav-link" onclick="toggleMenuUnderLine(this.href)" aria-current="page" href="#services">services</a>
                    </li>
                    <li class="nav-item py-1">
                        <a class="nav-link" onclick="toggleMenuUnderLine(this.href)" aria-current="page" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item py-1">
                        <a class="nav-link pe-0" onclick="toggleMenuUnderLine(this.href)" aria-current="page" href="#contact-us">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    @push('js')
    <script>
        function toggleMenuUnderLine(url){
            let navLinks = document.getElementsByClassName('nav-link');
            for(navLink of navLinks)
            {
                if( navLink.href == url){
                    navLink.classList.add('active');
                }else {
                    navLink.classList.remove('active');
                }
            }
        }
    </script>
    @endpush