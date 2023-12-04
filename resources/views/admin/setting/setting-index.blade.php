@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Orginization Settings
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="paid-tab" data-bs-toggle="tab" data-bs-target="#paid" type="button"
                    role="tab" aria-controls="paid" aria-selected="false">Orginization setting</button>
            </li>
            {{-- <li class="nav-item" role="presentation">
                <a href="{{ route('setting-create') }}" class="text-decoration-none"><button class="nav-link">Add
                        Setting Method</button></a>
            </li> --}}

        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            @if (isset($setting))
                {{-- paid tab --}}
                <div class="tab-pane fade show active" id="paid" role="tabpanel" aria-labelledby="paid-tab">

                    <div class="row d-flex justify-content-between">

                        <div class="col-3 px-4 mx-2 col-xl-3 bg-dark">
                            <object id="branch" data="{{ asset('images/photos/' . $setting->site_logo) }}" width="150"
                                height="auto"></object>
                        </div>
                        <div class="col-3">
                            <a href="{{ route('setting-edit',$setting) }}" class="text-decoration-none">
                                <span class="btn text-light text-nowrap col-11 col-xl-10" style="background-color: #e1aa12"> Edit Details </span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-xl-4">
                            <div class="container-fluid py-2">
                                <label for="name" class="form-label h4 fw-semibold"
                                    style="color: #004781;">Name</label>
                                <h3 id="name">{{ $setting->site_name }}</h3>
                            </div>
                        </div>
                        <div class="col-6 col-xl-4">
                            <div class="container-fluid py-2">
                                <label for="location" class="form-label h4 fw-semibold" style="color: #004781;">Location
                                </label>
                                <h3 id="location">{{ $setting->site_location }}</h3>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-xl-4">
                            <div class="container-fluid py-2">
                                <label for="name" class="form-label h4 fw-semibold"
                                    style="color: #004781;">Meta Title</label>
                                <h3 id="name">{{ $setting->meta_title }}</h3>
                            </div>
                        </div>                       
                    </div>
                    <div class="col-12">
                        <div class="container-fluid py-2">
                            <label for="location" class="form-label h4 fw-semibold" style="color: #004781;">Meta Description
                            </label>
                            <h3 id="location">{{ $setting->meta_description }}</h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="container-fluid py-2">
                            <label for="location" class="form-label h4 fw-semibold" style="color: #004781;">Meta Description
                            </label>
                            <h3 id="location">{{ $setting->meta_keywords }}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-xl-4">
                            <div class="container-fluid py-2">
                                <label for="position_name" class="form-label h4 fw-semibold"
                                    style="color: #004781;">Phone</label>
                                <h3 id="position_name">{{ $setting->site_phone_number }}</h3>
                            </div>
                        </div>
                        <div class="col-6 col-xl-4">
                            <div class="container-fluid py-2">
                                <label for="branch" class="form-label h4 fw-semibold" style="color: #004781;">Email Id</label>
                                <h3 id="branch">{{ $setting->site_email }}</h3>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-6 col-xl-4">
                            <div class="container-fluid py-2">
                                <label for="branch" class="form-label h4 fw-semibold" style="color: #004781;">Instagram</label>
                                <h3 id="branch">{{ $setting->instagram_link }}</h3>

                            </div>
                        </div>
                        <div class="col-6 col-xl-4">
                            <div class="container-fluid py-2">
                                <label for="branch" class="form-label h4 fw-semibold" style="color: #004781;">Facebook</label>
                                <h3 id="branch">{{ $setting->facebook_link }}</h3>

                            </div>
                        </div>
                        <div class="col-6 col-xl-4">
                            <div class="container-fluid py-2">
                                <label for="branch" class="form-label h4 fw-semibold" style="color: #004781;">Tiktok</label>
                                <h3 id="branch">{{ $setting->twitter_link }}</h3>

                            </div>
                        </div>
                        <div class="col-6 col-xl-4">
                            <div class="container-fluid py-2">
                                <label for="branch" class="form-label h4 fw-semibold" style="color: #004781;">Youtube</label>
                                <h3 id="branch">{{ $setting->linkedin_link }}</h3>

                            </div>
                        </div>


                    </div>



                </div>
            @else
                <div class="row justify-content-evenly border-bottom border-2 border-warning pb-2 mx-2 mt-3">
                    <div class="col-6 col-xl-8 text-center mt-2">
                        <span class="h4  fw-semibold " style="color: #004781;">
                            Orginization Setting not created
                        </span>
                    </div>
                    <div class="col-6 col-xl-4 text-end px-4 mt-2">
                        <a href="{{ route('setting-create') }}" class="text-decoration-none">
                            <span class="btn text-light text-nowrap col-12" style="background-color: #dd15d0"> Add
                                Orginization Details </span>
                        </a>

                    </div>

                </div>
            @endif
        </div>
    </div>
@endsection
