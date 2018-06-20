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

                  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">2018 ELECTIONS FOR THE S.R.C. EXECUTIVE </h5>
      
      
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 class="display-4">Vote For Your President </h2>
      
    </div>


    <div class="container">
      
        <div class="card-deck mb-3 text-center">
        @foreach($presidents as $president)
          <div class="card mb-4 box-shadow">
          
            <div class="card-body">
                    <img align="center" style="float:center;" width='110px' height="100px" src="/storage/cover_image/{{$president->picture}}">
            
            </div>
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">{{$president->name}}</h4>
              </div>
              <a type="button" href="/confirm-president/{{$president->id}}" class="btn btn-lg btn-block btn-primary">Click to Vote </a>
           </div>
        @endforeach
       
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
