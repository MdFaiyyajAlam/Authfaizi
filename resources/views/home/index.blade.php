@extends('masterpage.homebase')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3">
            <div class="row">
                @foreach ($products as $p)

                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset('image/'.$p->image) }}" alt="" width="" height="230px" class="">
                        <div class="card-body">
                            <h5>{{ $p->title}}</h5>
                            <h6>Price {{ $p->price}}</h6>
                            <a href="#" class="btn btn-danger">Buy</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
