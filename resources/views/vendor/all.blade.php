@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cars dashboard</div>

                <div class="card-body">
                    @foreach($vendors as $vendor)
                        <p>{{$vendor->id}}</p>
                        <p>{{$vendor->name}}</p>
                        <p>{{$vendor->site}}</p>
                        <div>
                          <ul>


                          @foreach($vendor->car as $car)
                            <li>{{$car->name}}</li>
                          @endforeach

                          </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
