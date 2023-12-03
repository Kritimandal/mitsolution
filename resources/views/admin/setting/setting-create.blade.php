@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Client Section settings
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Client Settings</button>
            </li>
            <a href="{{ route('setting-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Client Section Settings</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="/setting-store" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="mb-3">
                                <label for="site_name" class="col-form-label">Orginization Name:</label>
                                <input type="text" name="site_name" class="form-control" id="site_name"
                                    placeholder="Orginization site_name" value="{{ old('site_name') }}">
                                @if ($errors->has('site_name'))
                                    <div class="error text-danger">{{ $errors->first('site_name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3 col-6">
                                <label for="site_email" class="col-form-label">Email:</label>
                                <input type="text" name="site_email" class="form-control" id="site_email"
                                    placeholder="site_email Id" value="{{ old('site_email') }}">
                                @if ($errors->has('site_email'))
                                    <div class="error text-danger">{{ $errors->first('site_email') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="site_location" class="col-form-label">Location:</label>
                                <input type="text" name="site_location" class="form-control" id="site_location"
                                    placeholder="site_location" value="{{ old('site_location') }}">
                                @if ($errors->has('site_location'))
                                    <div class="error text-danger">{{ $errors->first('site_location') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3 col-6">
                                <label for="site_phone_number" class="col-form-label">Phone Number:</label>
                                <input type="text" name="site_phone_number" class="form-control" id="site_phone_number"
                                    placeholder="site_phone_number" value="{{ old('site_phone_number') }}">
                                @if ($errors->has('site_phone_number'))
                                    <div class="error text-danger">{{ $errors->first('phone') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="site_alt_text" class="col-form-label">Alt Text:</label>
                                <input type="text" name="site_alt_text" class="form-control" id="site_alt_text"
                                    placeholder="site_alt_text Id" value="{{ old('site_alt_text') }}">
                                @if ($errors->has('site_alt_text'))
                                    <div class="error text-danger">{{ $errors->first('site_alt_text') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3 col-6">
                                <label for="site_logo" class="col-form-label">Logo :</label>
                                <input type="file" name="site_logo" class="form-control" id="logo"
                                    placeholder="Logo" value="{{ old('site_logo') }}">
                                @if ($errors->has('site_logo'))
                                    <div class="error text-danger">{{ $errors->first('site_logo') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row">

                            <div class="mb-3 col-6">
                                <label for="instagram_link" class="col-form-label">Instagram Link:</label>
                                <input type="text" name="instagram_link" class="form-control" id="instagram_link"
                                    placeholder="Instagram link" value="{{ old('instagram_link') }}">
                                @if ($errors->has('instagram_link'))
                                    <div class="error text-danger">{{ $errors->first('instagram_link') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3 col-6">
                                <label for="facebook_link" class="col-form-label">Facebook Link:</label>
                                <input type="text" name="facebook_link" class="form-control" id="facebook_link"
                                    placeholder="Facebook link" value="{{ old('facebook_link') }}">
                                @if ($errors->has('facebook_link'))
                                    <div class="error text-danger">{{ $errors->first('facebook_link') }}
                                    </div>
                                @endif
                            </div>

                        </div>
                        <div class="row">

                            <div class="mb-3 col-6">
                                <label for="twitter_link" class="col-form-label">Twitter Link:</label>
                                <input type="text" name="twitter_link" class="form-control" id="twitter_link"
                                    placeholder="Twitter link" value="{{ old('twitter_link') }}">
                                @if ($errors->has('twitter_link'))
                                    <div class="error text-danger">{{ $errors->first('twitter_link') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3 col-6">
                                <label for="linkedin_link" class="col-form-label">Linkedin Link:</label>
                                <input type="text" name="linkedin_link" class="form-control" id="linkedin_link"
                                    placeholder="Linkedin link" value="{{ old('linkedin_link') }}">
                                @if ($errors->has('linkedin_link'))
                                    <div class="error text-danger">{{ $errors->first('linkedin_link') }}
                                    </div>
                                @endif
                            </div>

                        </div>
                        <button type="submit" class="btn blue_button">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
