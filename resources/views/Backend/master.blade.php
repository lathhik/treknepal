@include('Backend.partials.head')
    <div class="container body">
        <div class="main_container">
            @include('Backend.partials.side-nav')
            @include('Backend.partials.top-nav')
            @yield('content')
            @include('Backend.partials.footer')
        </div>
    </div>

@include('Backend.partials.foot')
