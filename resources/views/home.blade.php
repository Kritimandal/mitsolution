@extends('layouts.appDashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 p-5">
            <div class="card my-auto">
                <div class="card-header text-center border-0">{{ __('Welcome to Dashboard') }}</div>

                <div class="card-body text-center text-success">
                    @if (session('status'))
                        <div class="alert alert-success " role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
