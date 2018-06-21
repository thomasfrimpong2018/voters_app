@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
               <div class="card-header">Confirm Vote </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

     <div class="container">
        <center>Are you Sure You Want to Vote For '{{$secretary->name}}' ? </center><br><br>

      {!!Form::open(['action'=>['HomeController@votesecretary',$secretary->id],'method'=>'POST'])!!}
      {{Form::hidden('id',$secretary->id)}}
      {{Form::hidden('votes',$secretary->votes)}}
      {{Form::submit('Yes',['class'=>'btn btn-block btn-success'])}}

      {!!Form::close()!!}<br>

      <div> 
      <a href="/home" class="btn btn-block btn-danger  ">No</a>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          </div>
      </footer>
    </div>
 
                



                   




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
