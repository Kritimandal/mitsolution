@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Sub Category Section settings
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Sub Category Settings</button>
            </li>
            <a href="{{ route('subcategory-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Sub Category Section Settings</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="/subcategory-store" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Sub Category Name:</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Branch Name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="description" class="col-form-label">Description:</label>
                            <input type="text" name="description" class="form-control" id="description"
                                placeholder="Branch description" value="{{ old('description') }}">
                            @if ($errors->has('description'))
                                <div class="error text-danger">{{ $errors->first('description') }}
                                </div>
                            @endif
                        </div>
                    </div>
                        <div class="row">
                        <div class="mb-3 col-6">
                            <label for="image" class="col-form-label">Image:</label>
                            <input type="file" name="image" class="form-control" id="image"
                                placeholder="Recommended Image size: 220 X 261" value="{{ old('image') }}">
                            @if ($errors->has('image'))
                                <div class="error text-danger">{{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="alt_text" class="col-form-label">Alt Text</label>
                            <input type="text" name="alt_text" class="form-control" id="alt_text"
                                placeholder="Branch alt_text" value="{{ old('alt_text') }}">
                            @if ($errors->has('alt_text'))
                                <div class="error text-danger">{{ $errors->first('alt_text') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="col-form-label">Category:</label>
                        <select class="form-select" name="category_id" required aria-label="Default select example">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                        @if ($errors->has('category_id'))
                            <div class="error text-danger">{{ $errors->first('category_id') }}
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
