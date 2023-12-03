<div class="navbar-wrapper">
    <nav class="navbar navbar-expand-lg">

        <a class="navbar-brand" href="{{ route('homepage') }}"><img class="logo"
                src="{{ asset('/images/photos/' . $setting->site_logo) }}" alt="{{ $setting->site_alt_text }}" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <!-- <i class="fas fa-stream navbar-toggler-icon"></i> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item dropdown d-flex">

                    <a class="nav-link  text-white" href="{{ route('about-us') }}" aria-current="page">
                        About Us
                    </a>
                    <a class="nav-link  dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                    </a>


                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('our-team') }}">Out Teams</a></li>
                        <li><a class="dropdown-item" href="{{ route('our-clients') }}">Our Client</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('service') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('careers') }}">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('contact-us') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
