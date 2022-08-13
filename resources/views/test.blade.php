@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
           <h3><strong>All questions are compulsory​</strong></h3>
                <form method="POST" action="{{ route('test.create') }}" id="testform">
                        @csrf

@foreach($questions as $quest)
                <div class="card mb-3 ">
                    <div class="card-header">
                       {{$quest->question}}
                    </div>
                        <div class="card-body">
                        @foreach($quest['questionOptions'] as $option)
                            <div class="form-check">
                                <input type="radio" name="questions[{{ $quest->id }}]" id="option-{{ $option->id }}" value="{{$option->id}}" class="form-check-input">
                                <label for="option-{{ $option->id }}" class="form-check-label">{{$option->option}} </label>
                            </div>
                            @endforeach
                        </div>
                </div>
                @if ($errors->has('questions'))
                                      <span class="text-danger">{{ $errors->first('questions') }}</span>
                                  @endif                                
@endforeach

<button type="submit" class="btn btn-info">Submit</button>
</form>









                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<!-- <script>

$("#testform").validate({ 
   rules: { 
           "questions[]": { 
                   required: true, 
                   minlength: 1 
           } 
   }, 
   messages: { 
           "questions[]": "Please select at least two types of spam."
   } 
}); 
    </script> -->
@endsection