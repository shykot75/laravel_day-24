{{--<h1>This is a Home test page</h1>--}}

{{--First way url function  diye call korle web.php er url diye dite hbe --}}
{{--<a href="{{ url('/') }}">Home</a>--}}
{{--<a href="{{ url('/bitm') }}">BITM</a>--}}
{{--<a href="{{ url('/about') }}">About</a>--}}
{{--<a href="{{ url('/contact') }}">Contact</a>--}}


{{--Second way route function diye call korle web.php file er router er alada kore naam dite hbe--}}
{{--<a href="{{ route('home') }}">Home</a>--}}
{{--<a href="{{ route('bitm') }}">BITM</a>--}}
{{--<a href="{{ route('about') }}">About</a>--}}
{{--<a href="{{ route('contact') }}">Contact</a>--}}


@extends('master')

@section('title')
    Home Page
@endsection


@section('section')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Full Name</div>
                        <div class="card-body">
                            <form action="{{route('full-name')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="first_name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="last_name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text"  class="form-control" value="{{ isset($result) ? $result : '' }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success" value="Submit">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
