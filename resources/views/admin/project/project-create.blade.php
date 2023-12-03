@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Project Section settings
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Project Settings</button>
            </li>
            <a href="{{ route('project-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Project Section Settings</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="/project-store" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="name" class="col-form-label">Project Name:</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder=" Name"
                                    value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <div class="error text-danger">{{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="demo_url" class="col-form-label">Demo url:</label>
                                <input type="text" name="demo_url" class="form-control" id="demo_url"
                                    placeholder=" demo_url" value="{{ old('demo_url') }}">
                                @if ($errors->has('demo_url'))
                                    <div class="error text-danger">{{ $errors->first('demo_url') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="status" class="col-form-label">Status</label>
                                <input type="text" name="status" class="form-control" id="status" placeholder=" status"
                                    value="{{ old('status') }}">
                                @if ($errors->has('status'))
                                    <div class="error text-danger">{{ $errors->first('status') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="priority" class="col-form-label">Priority:</label>
                                <input type="text" name="priority" class="form-control" id="priority"
                                    placeholder=" priority" value="{{ old('priority') }}">
                                @if ($errors->has('priority'))
                                    <div class="error text-danger">{{ $errors->first('priority') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="image" class="col-form-label">Image:</label>
                                <input type="file" name="image" class="form-control" id="image"
                                    placeholder="post image" value="{{ old('image') }}">
                                @if ($errors->has('image'))
                                    <div class="error text-danger">{{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="alt_text" class="col-form-label">Alt Text</label>
                                <input type="text" name="alt_text" class="form-control" id="alt_text"
                                    placeholder=" alt_text" value="{{ old('alt_text') }}">
                                @if ($errors->has('alt_text'))
                                    <div class="error text-danger">{{ $errors->first('alt_text') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="post_id" class="col-form-label">Post Id:</label>
                            <select class="form-select" name="post_id" required aria-label="Default select example">
                                @foreach ($posts as $post)
                                    <option value="{{ $post->id }}">{{ $post->title }}</option>
                                @endforeach
    
                            </select>
                            @if ($errors->has('post_id'))
                                <div class="error text-danger">{{ $errors->first('post_id') }}
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
