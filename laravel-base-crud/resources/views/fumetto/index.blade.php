@extends('layouts.main')

@section('main-content')
   <div class="row">
        
    @foreach ($fumettis as $fumetto)

        <div class="col-3 d-flex  justify-content-center">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$fumetto->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$fumetto->title}}</h5>
                    <p class="card-text">{{$fumetto->description}}</p>
                    <p class="card-text">{{$fumetto->series}}</p>
                    <p class="card-text">{{$fumetto->type}}</p>
                    <p class="card-text">{{$fumetto->sale_date}}</p>
                    <a href="#" class="btn btn-primary">{{$fumetto->price}}</a>
                </div>
            </div>
        </div>

    @endforeach

   </div>
@endsection