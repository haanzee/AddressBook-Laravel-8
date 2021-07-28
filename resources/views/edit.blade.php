@extends('layouts.mainLayout')
@section('title', 'Update Address')
@section('content')
    <div>
        @if(session()->has('status'))
            <div class="alert alert-success">
                    {{session('status')}}
            </div>
        @endif
   </div>
<div class="row mt-3">
        @foreach ($addbook as $ab)
        <div class="col-sm-4">
            <div class="card text-dark bg-light border-info mb-3 shadow">
                <div class="card-header border-info">
                    <h4>{{$ab->name}} </h4>
                </div>
                    <div class="card-body">
                        <h5 class="card-title">Address</h5>
                        <p class="card-text">
                            {{$ab->email}}<br>
                            {{$ab->phone}}<br>
                            {{$ab->city}} <br>
                            {{$ab->country}} - ({{$ab->pincode}}) 
                        </p>
                    </div>
                    <div class="card-footer text-center border-info" >
                        <a class="btn btn-outline-info" href="{{ url('/editForm', $ab->id)}}">Update Record</a><br>
                    </div>  
                </div>    
            </div>
        @endforeach
    </div>
    <div class="text-center" >         
        {{$addbook->links()}}
    </div>
</div>

@endsection