@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            @php
                $top = \App\Main::where('name', 'top')->first();
            @endphp
            <a href="{{$top->link}}">
                <img src="{{asset($top->image)}}" alt="" width="100%" />
            </a>
        </div>
        <div class="col-12 mt-3">
            @php
                $middle = \App\Main::where('name', 'middle')->first();
            @endphp
            <a href="{{$top->link}}">
                <img src="{{asset($middle->image)}}" alt="" width="100%" />
            </a>
        </div>
        <div class="col-12 mt-3">
            @php
                $bottom = \App\Main::where('name', 'bottom')->first();
            @endphp
            <a href="{{$top->link}}">
                <img src="{{asset($bottom->image)}}" alt="" width="100%" />
            </a>
        </div>
    </div>
</div>
@endsection