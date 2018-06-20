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
                                  <h1 class="h2">Display the Voting Results  </h1>

                                  
                                </div>
                                
                                <div class="btn-toolbar mb-2 mb-md-0">
                                
                                      <div class="btn-group mr-2">
                                      <a class="btn btn-sm btn-outline-secondary " href="/presidentvotes">
                                        <span data-feather="calendar"></span>
                                        President's Voting Results
                                      </a>
                                    </div>
                                    <div class="btn-group mr-2">
                                      <a class="btn btn-sm btn-outline-primary " href="/secretaryvotes">
                                            <span data-feather="calendar"></span>
                                           Secretary's Voting Results
                                    </a>
                                    </div>
                                    <div class="btn-group mr-2">
                                        <button class="btn btn-sm btn-outline-secondary ">
                                                <span data-feather="calendar"></span>
                                                Organiser's Voting Results
                                      </button>
                                    </div>
                                    <div class="btn-group mr-2">
                                            <button class="btn btn-sm btn-outline-warning">Treasurer's Results</button>
                                            
                                          </div>
                                  </div> 
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
