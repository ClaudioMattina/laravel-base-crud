
@extends('layouts.main')

@section('main-content')

    <div class="my-container">

          <div class="card mb-3">
            <img src="{{$fumettis->thumb}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$fumettis->title}}</h5>
              <p class="card-text">{{$fumettis->description}}</p>
              <p class="card-text"><small class="text-muted">{{$fumettis->type}}</small></p>
              <p class="card-text"><small class="text-muted">{{$fumettis->price}}</small></p>
              <p class="card-text"><small class="text-muted">{{$fumettis->series}}</small></p>
            </div>
          </div>
    </div>



    
@endsection


