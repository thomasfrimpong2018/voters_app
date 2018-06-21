@extends('layouts.app1')

@section('content')
<div class="row">
    <div class="container">
      <h4>The Results Of The Organiser Elections</h4>
        <div class="card-deck mb-3 text-center">
            @foreach($sorganisers as $organiser)
          <div class="card mb-4 box-shadow">
          
            <div class="card-body">
            <img align="center" style="float:center;" width='100px' height="100px" src="/storage/cover_image/{{$organiser->picture}}">
            <h5>{{$organiser->name}}</h5>
            </div>
            <div class="card-header">
                
                <h4 class="my-0 font-weight-normal"> Votes:{{$organiser->votes}} </h4>
              </div>
             
           </div>
           @endforeach
       
         </div>
    </div>
</div>
@endsection