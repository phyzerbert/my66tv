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
                <div class="card-footer">
                    <form action="{{route('main.save')}}" method="post" class="clearfix" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="name" value="top" />
                        <div class="custom-file float-left" style="width:80%;">
                            <input type="file" class="custom-file-input" name="image" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Save</button>
                        <div class="row">
                            <div class="col-10"></div>
                        </div>
                    </form>
                </div>
            </div>
            <br />
            @php
                $middle = \App\Main::where('name', 'middle')->first();
            @endphp
            <div class="card">
                <div class="card-body">
                    <img src="{{asset($middle->image)}}" alt="" width="100%" />
                </div>
                <div class="card-footer">
                    <form action="{{route('main.save')}}" method="post" class="clearfix" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="name" value="middle" />
                        <div class="custom-file float-left" style="width:80%;">
                            <input type="file" class="custom-file-input" name="image" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Save</button>
                        <div class="row">
                            <div class="col-10"></div>
                        </div>
                    </form>
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
                <div class="card-footer">
                    <form action="{{route('main.save')}}" method="post" class="clearfix" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="name" value="bottom" />
                        <div class="custom-file float-left" style="width:80%;">
                            <input type="file" class="custom-file-input" name="image" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Save</button>
                        <div class="row">
                            <div class="col-10"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection