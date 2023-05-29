@include('user.layout.navbar')
<div class="container px-5 pb-5">
    <div class="row gx-5 align-items-center">
        @yield('content')
    </div>
</div>
@yield('about')
@include('user.layout.footer')
