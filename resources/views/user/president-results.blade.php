@extends('layouts.app1')

@section('content')
<div class="row">
    <div class="container">
      <h4>The Results Of The Presidential Elections</h4>
        <div class="card-deck mb-3 text-center">
            @foreach($presidents as $president)
          <div class="card mb-4 box-shadow">
          
            <div class="card-body">
            <img align="center" style="float:center;" width='100px' height="100px" src="/storage/cover_image/{{$president->picture}}">
            <h5>{{$president->name}}</h5>
            </div>
            <div class="card-header">
                
                <h4 class="my-0 font-weight-normal"> Votes:{{$president->votes}} </h4>
              </div>
             
           </div>
           @endforeach
       
         </div>
    </div>
</div>
@endsection