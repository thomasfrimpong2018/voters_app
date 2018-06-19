@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container-fluid">
                            <div class="row">
                             @include('inc.navbar')
                      
                              <main role="main" class="col-md-8 ml-sm-auto col-lg-9 px-4">
                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                  <h1 class="h2">Form to Add An Secretary Aspirant  </h1>
                                  
                                </div>

                                @include('inc.messages')
                                {!!Form::open(['action'=>'HomeController@addSecretary','method'=>'POST','enctype'=>'multipart/form-data'])!!} 
                                <div class="form-group">  
                                 {{Form::label('name','Name Of Secretarial Aspirant')}}
                                 {{Form::text('name','',['class'=>'form-control'])}}
                                </div>
                                 
                                <div class="form-group">
                                   {{Form::label('cover_image','Upload a Profile Picture')}}<br>
                                 {{Form::file('cover_image')}}
                             </div>

                               {{Form::submit('Submit',['class'=>'btn btn-success'])}}
                             {!!Form::close()!!}
                               
                      
                                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                      
                              </main>
                            </div>
                          </div>
                      
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
