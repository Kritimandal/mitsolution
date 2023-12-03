@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Client Section settings
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            {{-- <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Client Settings</button>
            </li> --}}
            <a href="{{ route('client-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Client Section Settings</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="{{ route('client-update',$client) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Client Name:</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Branch Name" value="{{ old('name', $client->name) }}">
                            @if ($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3 col-6">
                            <label for="Logo" class="col-form-label">Logo :</label>
                            <input type="file" name="image" class="form-control" id="logo"
                                placeholder="Logo" value="{{ old('image') }}">
                            @if ($errors->has('image'))
                                <div class="error text-danger">{{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn blue_button">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
