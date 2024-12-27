@include('layouts.header')

<body>
    <div class="main-container row g-0">
        <!-- Logo Header -->
        <header class="logo-header d-flex justify-content-between align-items-center p-3">
            <div class="left-logo">
                <img src="{{asset('assets/images/logo-1.jpg')}}" alt="Logo 1" class="img-fluid">
            </div>
            <div class="right-logo">
                <img src="{{asset('assets/images/logo-2.jpeg')}}" alt="Logo 2" class="img-fluid">
            </div>
        </header>
        <!-- Banner Section -->
        <div class="col-12">
            <div class="banner">
                <img src="{{asset('assets/images/Banner.jpg')}}" alt="Kumbh Banner" class="img-fluid w-100">
            </div>
        </div>
        <main>
            {!! Toastr::message() !!}
            @yield('content')
        </main>
    </div>
</div>
@include('layouts.footer')