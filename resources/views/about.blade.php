{{--<h1>This is About Page</h1>--}}

{{--<a href="{{ route('home') }}">Home</a>--}}
{{--<a href="{{ route('bitm') }}">BITM</a>--}}
{{--<a href="{{ route('about') }}">About</a>--}}
{{--<a href="{{ route('contact') }}">Contact</a>--}}


@extends('master')

@section('title')
    About Page
@endsection


@section('section')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $product['image'] }}" alt="" class="card-img-top h-250">
                        <div class="card-body">
                            <h3 class="card-title">{{ $product['name'] }}</h3>

                            <p class="card-text">Price: {{ $product['price'] }} </p>
                            <hr />
                            <a href="{{route('detail', ['id' => $product['id']])}}" class="btn btn-outline-success">Details</a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
