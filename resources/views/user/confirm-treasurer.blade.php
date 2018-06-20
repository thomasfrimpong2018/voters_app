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
        Are you Sure You Want to Vote For '{{$treasurer->name}}' ? <br>

      {!!Form::open(['action'=>['HomeController@votetreasurer',$treasurer->id],'method'=>'POST'])!!}
      {{Form::hidden('id',$treasurer->id)}}
      {{Form::hidden('votes',$treasurer->votes)}}
      {{Form::submit('Yes',['class'=>'btn btn-success'])}}

      {!!Form::close()!!}

      <div  style="float:left"> 
      <a href="/home" class="btn btn-danger  ">No</a>
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
