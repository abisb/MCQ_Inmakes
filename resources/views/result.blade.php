@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Results of your test</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    <p>{{ session('status') }}</p>

                                    <a href="{{ route('test_page') }}" class="btn btn-primary">Start test again</a>
                                </div>
                            </div>
                        </div>
                    @endif

                    <p>Total Mark: {{ $result->total_points }}/10 </p>

                    <h3 style="color: green;">Correct Answers</h3>
                    @foreach($questions as $quest)
                <div class="card mb-3 ">
                    <div class="card-header">
                       {{$quest->question}}
                    </div>
                        <div class="card-body">
                        @foreach($quest['questionOptions'] as $option)
                            <div class="form-check">
                                <input type="radio" name="questions[{{ $quest->id }}]" id="option-{{ $option->id }}" @if($option->points==1) checked @endif value="{{$option->id}}" class="form-check-input group">  
                                <label for="option-{{ $option->id }}" class="form-check-label" @if($option->points==1) style="color: green;" @endif>{{$option->option}} </label>
                            </div>
                            @endforeach
                        </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
$(window).load(function() {
  $('.group').attr('disabled', true);
});

    </script>
@endsection