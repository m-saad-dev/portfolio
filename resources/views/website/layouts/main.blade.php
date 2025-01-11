<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('website.layouts.head')

<body>
    @include('website.layouts.navbar')    
    
    @include('website.layouts.header')    
    
    <!-- main content -->
    <main>
        
        @include('website.about')
        
        @include('website.services', $services)
        
        @include('website.statistics')
        
        @include('website.portfolio', $portfolios)
        
        @include('website.contact_us')
        
    </main>
    
    @include('website.layouts.footer')
    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('js')
</body>
</html>
