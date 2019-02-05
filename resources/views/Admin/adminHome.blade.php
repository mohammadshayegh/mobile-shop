@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <a href="{{route('addmobile')}}" class="btn btn-primary">Add mobile</a>
                    </div>
                </div>
            </div>
            @foreach($mobiles as $mobile)
                <div class="col-md-8" style="margin-top:10px;">
                    <div class="card">
                        <a href="{{route('sellmobile',['s_id' => $mobile->s_id])}}">
                            <div class="card-header">Mobile</div>
                        </a>
                        <div class="card-body">
                            <div class="row">
                                <label>Id:</label>
                                <label>{{$mobile->s_id}}</label>
                            </div>
                            <div class="row">
                                <label>Model:</label>
                                <label>{{$mobile->model}}</label>
                            </div>
                            <div class="row">
                                <label>Company:</label>
                                <label>{{$mobile->company}}</label>
                            </div>
                            <div class="row">
                                <a href="{{route('editmobile',['s_id' => $mobile->s_id])}}">Edit</a>
                                <a href="{{route('deletemobile',['s_id' => $mobile->s_id])}}">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection