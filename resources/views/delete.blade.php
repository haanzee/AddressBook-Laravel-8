@extends('layouts.mainLayout')
@section('title', 'Delete Address')
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
            <div class="card text-dark border-warning bg-light mb-3 shadow">
                <div class="card-header border-warning">
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
                    <div class="card-footer text-center border-warning" >
                         <a class="btn btn-outline-warning" href="{{ url('/delete', $ab->id)}}">Delete Record</a><br>
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