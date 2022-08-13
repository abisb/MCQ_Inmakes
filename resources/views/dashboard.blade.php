@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    Welcome {{ Auth::user()->name }},You are Logged In    

                </div>
                <a href="{{ route('test_page') }}" type="button" class="btn btn-info">START TEST</a>
            </div>
        </div>
    </div>
</div>
@endsection