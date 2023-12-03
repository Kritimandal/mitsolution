@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            boardmember Section settings
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            {{-- <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add boardmember Settings</button>
            </li> --}}
            <a href="{{ route('boardmember-index') }}" class="text-decoration-none"><button class="nav-link">View
                    boardmember Section Settings</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="{{ route('boardmember-update',$boardmember) }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="mb-3">
                                <label for="name" class="col-form-label">Name:</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="name"
                                    value="{{ old('name', $boardmember->name) }}">
                                @if ($errors->has('name'))
                                    <div class="error text-danger">{{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="designation" class="col-form-label">Designation:</label>
                                <input type="text" name="designation" class="form-control" id="designation"
                                    placeholder="designation" value="{{ old('designation', $boardmember->designation) }}">
                                @if ($errors->has('designation'))
                                    <div class="error text-danger">{{ $errors->first('designation') }}
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
                            <div class="mb-3">
                                <label for="alt_text" class="col-form-label">Alt Text</label>
                                <input type="text" name="alt_text" class="form-control" id="alt_text"
                                    placeholder="alt_text" value="{{ old('alt_text', $boardmember->alt_text) }}">
                                @if ($errors->has('alt_text'))
                                    <div class="error text-danger">{{ $errors->first('alt_text') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="content" class="col-form-label">Content</label>
                                <input type="text" name="content" class="form-control" id="content"
                                    placeholder="boardmember content" value="{{ old('content', $boardmember->content) }}">
                                @if ($errors->has('content'))
                                    <div class="error text-danger">{{ $errors->first('content') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="board_member" class="col-form-label">Is Board Member?</label>
                                <select class="form-select" name="board_member" required aria-label="Default select example">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                                @if ($errors->has('board_member'))
                                    <div class="error text-danger">{{ $errors->first('board_member') }}
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
