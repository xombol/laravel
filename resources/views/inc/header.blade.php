<div class="mb-5">
    <div class="header-blue ">
        <div class="container d-flex justify-content-between pt-5">
            <div class="">
                <div class="dropdown">
                    <a href="{{route('home')}}" class="btn btn-default btn-lg action-button border border-primary rounded mr-3">
                        HOME
                    </a>
                    <button class="btn btn-default btn-lg action-button border border-primary rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        SERVICES
                    </button>

                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton"
                         style="position: absolute;transform: translate3d(90px, 39px, 0px);top: 0px;left: 0px;will-change: transform;background: 0;opacity: 1;outline: 0;">
                        <a class="btn btn-outline-light mb-2" href="{{route('roofs.index')}}" style="width: 100%;max-width: 115px;">ROOFS</a>
                        <a class="btn btn-outline-light mb-2" href="{{route('roofs.index')}}" style="width: 100%;max-width: 115px;">FLOORS</a>
                        <a class="btn btn-outline-light mb-2" href="{{route('roofs.index')}}" style="width: 100%;max-width: 115px;">WALLS</a>
                    </div>

                    <a href="{{route('home')}}" class="btn btn-default btn-lg action-button border border-primary rounded mr-3 ml-3">
                        ABOUT US
                    </a>

                    <a href="https://t.me/cobol_m" target="_blank" class="btn btn-default btn-lg action-button border border-primary rounded mr-3">
                        TELEGRAM
                    </a>

                </div>
            </div>
            <div class="">
                @auth
                    <a href="{{ route('logout') }}" class="btn btn-default btn-lg action-button border border-light ">Logout</a>
                @else
                    <a href="{{ route('user.login.index') }}" class="btn btn-default btn-lg action-button border border-success text-success mr-3 bg-green text-light"
                       style="background: #28a745;">Log in</a>
                    <a href="{{ route('user.register.index') }}" class="btn btn-default btn-lg action-button border border-light ">Register</a>
                @endauth


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
                    height: 85vh !important;
                    display: flex;
                    justify-content: space-between;
                }
            </style>
        @endif
    </div>
</div>







