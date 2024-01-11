@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Post Section settings
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add post Settings</button>
            </li>
            <a href="{{ route('post-index') }}" class="text-decoration-none"><button class="nav-link">View
                    post Section Settings</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="/post-store" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="title" class="col-form-label">Title:</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="title" value="{{ old('title') }}">
                                @if ($errors->has('title'))
                                    <div class="error text-danger">{{ $errors->first('title') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="description" class="col-form-label">Description:</label>
                                <textarea id="summernote" name="description"></textarea>
                                @if ($errors->has('description'))
                                    <div class="error text-danger">{{ $errors->first('description') }}
                                    </div>
                                @endif
                            </div>
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
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="priority" class="col-form-label">Priority</label>
                                <input type="text" name="priority" class="form-control" id="priority"
                                    placeholder="priority" value="{{ old('priority') }}">
                                @if ($errors->has('priority'))
                                    <div class="error text-danger">{{ $errors->first('priority') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-6 mb-3">
                                <label for="status" class="col-form-label">Status:</label>  
                                <select class="form-select" name="status" required aria-label="Default select example">
                                    <option value="1" selected>Enable</option>
                                    <option value="0">Disable</option>
                                </select>
                                @if ($errors->has('status'))
                                    <div class="error text-danger">{{ $errors->first('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="image" class="col-form-label">Image:</label>
                                <input type="file" name="image" class="form-control" id="image"
                                    placeholder="Category image" value="{{ old('image') }}">
                                @if ($errors->has('image'))
                                    <div class="error text-danger">{{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-6 mb-3">
                                <label for="alt_text" class="col-form-label">Alt Text</label>
                                <input type="text" name="alt_text" class="form-control" id="alt_text"
                                    placeholder="alt_text" value="{{ old('alt_text') }}">
                                @if ($errors->has('alt_text'))
                                    <div class="error text-danger">{{ $errors->first('alt_text') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="sub_category_id" class="col-form-label">Sub Category:</label>
                            <select class="form-select" name="sub_category_id" required aria-label="Default select example">
                                @foreach ($subcategory as $subcat)
                                    <option value="{{ $subcat->id }}">{{ $subcat->name }}</option>
                                @endforeach

                            </select>
                            @if ($errors->has('sub_category_id'))
                                <div class="error text-danger">{{ $errors->first('category_id') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-6 mb-3">
                            <label for="slug" class="col-form-label">Title:</label>
                            <input type="text" name="slug" class="form-control" id="slug"
                                placeholder="slug" value="{{ old('slug') }}">
                            @if ($errors->has('slug'))
                                <div class="error text-danger">{{ $errors->first('slug') }}
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
@section('footer')
    <script>
        $('#summernote').summernote({
            placeholder: 'Descreption',
            tabsize: 3,
            height: 500
        });
    </script>
@endsection