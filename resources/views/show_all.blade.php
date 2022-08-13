@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ALL RESULTS</div>
  
                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Total MArk</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($result  as $key => $user)
  <tr>
      <th scope="row">{{ ($result->currentpage()-1) * $result->perpage() + $key + 1 }}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->mobile}}</td>
      <td>{{$user->total_points}}/10</td>
      <td>{{ Carbon\Carbon::parse($user->created_at)->format('d-m-Y') }}</td>
    </tr>
    @endforeach


  </tbody>
</table>
{{ $result->links() }}
                </div>
           
                <a href="{{ route('test_page') }}" type="button" class="btn btn-info">START TEST</a>
            </div>
        </div>
    </div>
</div>
@endsection