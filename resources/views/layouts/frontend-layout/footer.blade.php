<footer class="bg-light text-right text-lg-start ">

    <!-- Copyright -->
    <div class="text-light p-4" style="background-color: #0f749c; color: white;">
        <div class="row p-0 m-0">
            <div class="col-12 col-lg-5">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <img src="{{ asset('/images/photos/' . $setting->site_logo) }}" height="50px" width="350px"
                            alt="{{ $setting->site_alt_text }}">
                    </div>
                    <div class="col-12 col-md-6 col-lg-12">
                        <div
                            class="container-fluid d-flex justify-content-start justify-content-md-center pt-3 pt-sw-0">
                            <div class="col-4 d-flex justify-content-evenly">
                                <a class="btn btn-primary" style="background-color: #3b5998;" href="{{ $setting->facebook_link }}" target="_blank"
                                    role="button"><i class="fa-brands fa-facebook" style="color: white;"></i></a>
                                <a class="btn btn-primary" style="background-color: #55acee;" href="{{ $setting->twitter_link}}" target="_blank"
                                    role="button"><i class="fa-brands fa-twitter" style="color: white;"></i></a>
                                <a class="btn btn-primary" style="background-color: #dd4b39;" href="{{ $setting->linkedin }}" target="_blank"
                                    role="button"><i class="fa-brands fa-linkedin" style="color: white;"></i></a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-7 pt-5 pt-lg-0">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <h4 class="text-light pt-2 pt-sm-0">Industries</h4><br>
                        <p class="text-light"><a class="text-decoration-none text-light" href="#">Fintech</a></p>
                        <p class="text-light"><a class="text-decoration-none text-light" href="#">Core Banking
                                Support</a></p>
                        <p class="text-light"><a class="text-decoration-none text-light" href="#">IS Audit</a></p>
                        <p class="text-light"><a class="text-decoration-none text-light" href="#">Office
                                Automation</a></p>
                        <p class="text-light"><a class="text-decoration-none text-light" href="#">Aviation</a></p>

                    </div>
                    <div class="col-12 col-sm-4">
                        <h4 class="text-light  pt-2 pt-sm-0">Services</h4><br>
                        <p class="text-light"><a class="text-decoration-none text-light" href="#">Web
                                Development</a></p>
                        <p class="text-light"><a class="text-decoration-none text-light" href="#">IT
                                Consulting</a></p>
                        <p class="text-light"><a class="text-decoration-none text-light" href="#">System
                                Development</a></p>
                        <p class="text-light"><a class="text-decoration-none text-light" href="#">Web
                                Designing</a></p>
                        <p class="text-light"><a class="text-decoration-none text-light" href="#">QA and
                                Testing</a></p>

                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="row justify-content-start justify-content-sw-center">
                            <div class="col-9 ">
                                <h4 class="text-light text-lg-start  pt-2 pt-sm-0">Address</h4><br>
                            </div>
                        </div>
                        <div class="row  d-flex justify-content-center align-items-center">
                            <div class="col-3 text-lg-end">
                                <h3><i class="fa-solid fa-house-chimney" style="color: #ff555a;"></i></h3>
                            </div>
                            <div class="col-9 text-lg-start px-4">
                                <p class="text-light">{!! $setting->site_location !!}</p>
                            </div>
                        </div>
                        <p>
                        </p>
                        <div class="row">
                            <div class="col-3 text-lg-end">
                                <h3><i class="fa-solid fa-phone" style="color: #ff555a;"></i></h3>
                            </div>
                            <div class="col-9 text-lg-start pt-2">{{ $setting->site_phone_number}}</div>
                        </div>
                        <p></p>
                        <div class="row">
                            <div class="col-3 text-lg-end">
                                <h3><i class="fa-solid fa-envelope" style="color: #ff555a;"></i></h3>
                            </div>
                            <div class="col-9 text-lg-start pt-2">{{ $setting->site_email}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid d-flex justify-content-center">
            <p class="text-light p-0 m-0">@copyright by MIT</p>
        </div>
    </div>
    <!-- Copyright -->
</footer>
