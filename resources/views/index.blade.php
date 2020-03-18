@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @php
                $top = \App\Main::where('name', 'top')->first();
            @endphp
            <div class="card">
                <div class="card-body">
                    <img src="{{asset($top->image)}}" alt="" width="100%" />
                </div>
            </div>
            <br />
            @php
                $bottom = \App\Main::where('name', 'bottom')->first();
            @endphp
            <div class="card">
                <div class="card-body">
                    <img src="{{asset($bottom->image)}}" alt="" width="100%" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection