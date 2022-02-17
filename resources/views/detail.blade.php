@extends('master')

@section('title')
    Product Detail
@endsection


@section('section')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{$data['image']}}" alt="" class="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>Product Name: {{$data['name']}}</h1>
                        <h3>Product Price: {{$data['price']}} Tk.</h3>
                        <p>Product Description: {{$data['description']}}</p>
                        <hr />
                        <button type="button" class="btn btn-outline-success">Add To Cart</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
