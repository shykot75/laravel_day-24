{{--<h1>This is BITM Page</h1>--}}

{{--<a href="{{ route('home') }}">Home</a>--}}
{{--<a href="{{ route('bitm') }}">BITM</a>--}}
{{--<a href="{{ route('about') }}">About</a>--}}
{{--<a href="{{ route('contact') }}">Contact</a>--}}

@extends('master')

@section('title')
    BITM Page
@endsection


@section('section')

{{--                <h1>BITM Page</h1>--}}

    <h1>{{ $shykot }}</h1>
    <h1>{{ $topu }}</h1>


{{--    Ami app flder er provider folder er AppServiceProvider.php te akta view email name e globally define kore dsi...akhn sob view te chaile ami ata show korate parbo--}}
    <h1>{{ $email }}</h1>

{{--    single array--}}
    @foreach($fahim as $value)
        <span>{{$value}}</span>
    @endforeach
<hr>
    @foreach($fahim as $key => $value)
        <span>Index No: {{$key}} and Value : {{$value}}</span> <br />
    @endforeach
<hr>
    @foreach($fahim as $key => $value)
       @if($key >= 2 && $key <=4)
           <span>Index No: {{$key}} and Value : {{$value}}</span> <br />
       @endif
    @endforeach
<hr>
    <h1>{{$fahim[3]}}</h1>
<hr>
<hr>
<hr>

@foreach($multiArray as $value)
    <span>{{ $value['name'] }}</span>
@endforeach
<hr>
<hr>
<hr>

{{--//multi dimention array--}}
@foreach($multiArray as  $value)
    @foreach($value as $item)
        <span>{{ $item }}</span>
    @endforeach
    <br />
@endforeach
<hr>
<hr>
<hr>








@endsection
