@extends('layouts.main')

@section('main-content')
   <div class="row">
        
    @foreach ($fumettis as $fumetto)

        <div class="col-3 d-flex  justify-content-center my-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$fumetto->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$fumetto->title}}</h5>
                    <p class="card-text">{{$fumetto->description}}</p>
                    <p class="card-text">{{$fumetto->series}}</p>
                    <p class="card-text">{{$fumetto->type}}</p>
                    <p class="card-text">{{$fumetto->sale_date}}</p>
                    <a href='{{route("fumetto.show", $fumetto->id)}}' class="btn btn-primary">{{$fumetto->price}}</a>
                </div>
            </div>
        </div>

    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center my-4">
            {{$fumettis->links()}}
        </div>
    </div>

   </div>
@endsection