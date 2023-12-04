@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Category Section settings
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Category Settings</button>
            </li>
            <a href="{{ route('category-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Category List</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="/category-store" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Category Name:</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Branch Name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="meta_title" class="col-form-label">Meta Title:</label>
                                <input type="text" name="meta_title" class="form-control" id="meta_title"
                                    placeholder="enter meta title" value="{{ old('meta_title') }}">
                                @if ($errors->has('meta_title'))
                                    <div class="error text-danger">{{ $errors->first('meta_title') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3 col-6">
                                <label for="meta_description" class="col-form-label">Meta Description</label>
                                <input type="text" name="meta_description" class="form-control" id="meta_description"
                                    placeholder=" enter meta description" value="{{ old('meta_description') }}">
                                @if ($errors->has('meta_description'))
                                    <div class="error text-danger">{{ $errors->first('meta_description') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="meta_keywords" class="col-form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control" id="meta_keywords"
                                placeholder="enter meta keywords" value="{{ old('meta_keywords') }}">
                            @if ($errors->has('meta_keywords'))
                                <div class="error text-danger">{{ $errors->first('meta_keywords') }}
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
