<div class="mb-5" >
    <div class="header-blue ">
        <div class="container d-flex justify-content-between pt-5">
            <div class="display-4 text-light"><h1>Griz</h1></div>
            <div class="">
                <div class="dropdown">
                    <a href="{{route('home')}}" class="btn btn-default btn-lg action-button border border-primary rounded mr-3" >
                        Home
                    </a>
                    <button class="btn btn-default btn-lg action-button border border-primary rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </button>

                    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('roofs.index')}}">ROOFS</a>
                    </div>

                </div>
            </div>
            <div class="">
                <a href="{{ route('user.user.login.index') }}" class="btn btn-default btn-lg action-button border border-success text-success mr-3 bg-green text-light" style="background: #28a745;" >Log in</a>
                <a href="{{ route('user.user.register.index') }}" class="btn btn-default btn-lg action-button border border-light ">Register</a>
            </div>
        </div>
        @if(Request::is('/'))
        <div class="mt-5">
            <div class="mt-3" id="inTurnBlurringTextG">
                <div id="inTurnBlurringTextG_1" class="inTurnBlurringTextG">H</div>
                <div id="inTurnBlurringTextG_2" class="inTurnBlurringTextG">E</div>
                <div id="inTurnBlurringTextG_3" class="inTurnBlurringTextG">L</div>
                <div id="inTurnBlurringTextG_4" class="inTurnBlurringTextG">L</div>
                <div id="inTurnBlurringTextG_5" class="inTurnBlurringTextG">O</div>
            </div>
        </div>
        <div class="container hero margin">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-5 col-lg-offset-1 col-md-6 col-md-offset-0">
                    <h1>The revolution is here.</h1>
                    <p>Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum. Nam consequat neque quis sapien viverra convallis. In non tempus lorem. </p>
                    <button class="btn btn-default btn-lg action-button" type="button">Learn More</button>
                </div>
                <div class="col-lg-5 mt-auto ml-auto">
                    <div class="iphone-mockup "><img class="ml-auto" src="/img/man.svg" class="device">

                    </div>
                </div>
            </div>
        </div>
            <style>
                .header-blue {
                    height: 100vh!important;
                    display: flex;
                    justify-content: space-between;
                }
            </style>
        @endif
    </div>
</div>







<header class="py-5 d-none">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
            <span class="fs-4">Griz IT</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">

            @if (Route::has('login'))
                <div class="hidden  top-0 right-0 px-6 py-2 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Profile</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('home') }}">Home</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('about') }}">About</a>

            @if (Route::has('login'))
                @auth
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('contact') }}">New user</a>
                @endauth
            @endif
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('contact-data') }}">Users</a>
        </nav>
    </div>
</header>
