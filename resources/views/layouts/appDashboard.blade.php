<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- datatable script and cnd -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    {{-- jquerry-min.js --}}
    <script src="{{ asset('js/jquerry-min.js') }}"></script>
    {{-- jquerry-datepicker.css --}}
    <link rel="stylesheet" href="{{ asset('css/jquerry-datepicker.css') }}">
    {{-- demos.css --}}
    <link rel="stylesheet" href="{{ asset('css/demos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    {{-- jquerry-3.6.0.js --}}
    <script src="{{ asset('js/jquerry-3.6.0.js') }}"></script>
    {{-- jquery-ui.js --}}
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <style>
        .custom-dropdown .dropdown-toggle::after {
            display: none;
        }
    </style>
    @yield('head')
</head>

<body>
    {{-- <body> --}}




    <!-- place navbar here -->


    <div class="sidebar open" style="overflow-y: scroll;">
        <div class="logo-details">
            <span class="mini_logo">{{ config('app.name') }}</span>
            <span class="big_logo">{{ config('app.name') }}</span>
            {{-- <span class="mini_logo"><img src="{{ asset('images/logo.png') }}" alt="Logo" height="55px"
                    width="60px" style="padding-top: 35%; align-items: center;"></span>
            <span class="big_logo" ><img src="{{ asset('images/logo.png') }}"
                    alt="Logo" style="padding-top: 2%; padding-left:20%;"></span> --}}
        </div>
        <ul class="nav-links">

            {{-- <li class="my-1 {{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"> --}}
            <li class="my-1 ">
                <a href="{{ route('home') }}">
                    <a href="#">
                        <div class="iocn-link">
                            <i class='mainI bi bi-grid-3x2-gap'></i>
                            <span class="link_name">Home</span>
                            <ul class="sub-menu blank">
                                <li>
                                    <div class="link_name">Home</div>
                                </li>
                            </ul>
                        </div>
                    </a>
            </li>
            {{-- @if (Auth::user()->role->name == 'Finance')
                <div class="separator_text px-4 py-1 my-2 fw-semibold">General Tools</div>
            @endif --}}
            {{-- <li class="mt-2 {{ Route::currentRouteName() === 'add-invoice' ? 'active' : '' }}">
                <a href="{{ route('add-invoice') }}"> --}}
            <div class="separator_text px-4 py-1 my-2 fw-semibold"> Categories</div>
            <li class="mt-2 ">
                <a href="{{ route('category-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-people-fill'></i>
                        <span class="link_name"> Categories</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Categories</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('subcategory-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-people-fill'></i>
                        <span class="link_name"> Sub-Category</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Sub-Category</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('post-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-people-fill'></i>
                        <span class="link_name"> Posts</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Posts</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('banner-index') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-people-fill'></i>
                        <span class="link_name"> Banner</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Banner</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>

            <li class="mt-2 ">
                <a href="{{ route('setting-index') }}">


                    <div class="iocn-link">
                        <i class='mainI bi bi-list'></i>
                        <span class="link_name"> Orginization Settings</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name"> Orginization Settings</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('client-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-person-add'></i>
                        <span class="link_name"> Client Section</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Client Section</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('testimonial-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-chat-text-fill'></i>
                        <span class="link_name"> Testimonial Section</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Testimonial Section</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('boardmember-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-chat-text-fill'></i>
                        <span class="link_name"> Boardmember Section</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Boardmember Section</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('tag-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-chat-text-fill'></i>
                        <span class="link_name"> tag Section</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">tag Section</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('technology-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-chat-text-fill'></i>
                        <span class="link_name"> technology Section</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">technology Section</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('project-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-chat-text-fill'></i>
                        <span class="link_name"> project Section</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">project Section</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('post-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-chat-text-fill'></i>
                        <span class="link_name"> post Section</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">post Section</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('contact-index') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-chat-text-fill'></i>
                        <span class="link_name"> Contact Inbox</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Contact Inbox</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            <li class="mt-2 ">
                <a href="{{ route('application-index') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-chat-text-fill'></i>
                        <span class="link_name"> Submitted Applications</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Submitted Applications</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li>
            {{-- <li class="mt-2 ">
                <a href="{{ route('user-create') }}">

                    <div class="iocn-link">
                        <i class='mainI bi bi-person-add'></i>
                        <span class="link_name"> Users</span>
                        <ul class="sub-menu blank">
                            <li>
                                <div class="link_name">Users</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </li> --}}



        </ul>
    </div>





    <main class="home-section p-0 m-0" style="background-color: #fffbeb; overflow-x:hidden;">
        <!-- mini menu bar -->
        <div class="container-fluid d-flex justify-content-between py-1"
            style="background-color: #fff; box-shadow:1px 1px 1px 0px #c8c8c8;">
            <div class="home-content px-1">
                <i class='bx bx-menu'></i>
            </div>

            <div class="container-fluid d-flex justify-content-end mx-0 px-0">
                <div class="home-content">
                    <div class="dropdown custom-dropdown">
                        <button class="btn dropdown-toggle border-0" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false" style="-webkit-appearance: none;">
                            <div class="d-flex" style="border-radius:10px; box-shadow:1px 1px 2px #7a7a7a">
                                <i class='bx bxs-user-circle' style="font-size: 36px;"></i>
                                <i class='bx bx-caret-down' style="padding-top:10px; margin-left:-5px;"></i>
                            </div>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            {{-- <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li> --}}
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <!-- <i class='bx bx-bell' style="font-size: 24px;"></i> -->
                </div>
            </div>
        </div>
        @yield('content')
    </main>
    <footer class="bg-light text-right text-lg-start ">

        <!-- Copyright -->
        <!-- Copyright -->
    </footer>
    @yield('footer')
    <script src="../js/dashboard.js"></script>
</body>

</html>
