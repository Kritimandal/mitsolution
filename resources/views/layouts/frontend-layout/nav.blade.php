
<div class="container-fluid navbar-top nav-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="row p-0 d-flex justify-content-between  m-0">
            <div class="col-xl-2 py-2 col-sm-3 col-4">
                <a class="navbar-brand px-3" href="{{ route('homepage') }}"><img src="{{ asset('/images/photos/' . $setting->site_logo) }}"  alt="{{ $setting->site_alt_text }}" width="100%" alt=""></a>

            </div>
            <div class="col-sm-9 col-8 ">

                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex justify-content-evenly">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                                About Us
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('our-team') }}">Our Teams</a>
                                <a class="dropdown-item" href="{{ route('our-clients') }}">Our
                                    Clients</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('service') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('careers') }}">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </nav>
</div>