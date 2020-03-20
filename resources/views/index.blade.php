@extends('layouts.app')
@section('style')
    <style>
        @media screen and (max-width: 600px) {
            #top_image img{
                height: calc(35vh - 22px);
                width: 100%;
            }
            #middle_image img{
                height: calc(35vh - 22px);
                width: 100%;
            }
            #bottom_image img{
                height: calc(20vh - 11px);
                width: 100%;
            }
        }

    </style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12" id="top_image">
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
            <a href="{{$middle->link}}" id="middle_image">
                <img src="{{asset($middle->image)}}" alt="" width="100%" />
            </a>
        </div>
        <div class="col-12 mt-3" id="bottom_image">
            @php
                $bottom = \App\Main::where('name', 'bottom')->first();
            @endphp
            <a href="{{$bottom->link}}">
                <img src="{{asset($bottom->image)}}" alt="" width="100%" />
            </a>
        </div>
    </div>
</div>
@endsection