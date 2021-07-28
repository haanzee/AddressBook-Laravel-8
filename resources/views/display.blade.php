@extends('layouts.mainLayout')
@section('title', 'Display Address')
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
            <div class="card border-dark text-dark bg-light mb-3 shadow">
                <div class="card-header border-dark">
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
                </div>    
            </div>
        @endforeach
    <div class="text-center" >         
        {{$addbook->links()}}
    </div>
</div>
</div>
@endsection