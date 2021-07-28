@extends('layouts.mainLayout')
@section('title', 'Addition')
@section('content')
    <div>
        @if(session()->has('status'))
            <div class="alert alert-success">
                    {{session('status')}}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-3 border-warning border-right border-dark h-800">
            <div class="row">
                <div class="col-sm-12">

                </div>
            </div>
        </div>
        <div class="col-sm-9 px-5 py-5">
            <h3 class="text-center">Address Addition</h3>
            <hr>
            <form action="" method="POST">
            @csrf
                <div class="row">
                    <div class="col-sm-12">
                        Name :
                        <input type="text" id="name" width="100%" name="name" class="form-control">
                            @error('name')
                                {{$message}}
                           @enderror
                    </div>            
                </div>
                <br>
                <div class="row">
                   <div class= "col-sm-6">
                        E-Mail
                        <input type="text" id="email" name="email" class="form-control">
                            @error('email')
                                {{$message}}
                            @enderror
                    </div>
                    <div class= "col-sm-6">
                        Mobile Number :
                        <input type="number" id="mobile" name="mobile" class="form-control">
                            @error('mobile')
                                {{$message}}
                            @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class= "col-sm-6">
                        City :
                        <input type="text" id="city" name="city" class="form-control">
                            @error('city')
                                {{$message}}
                            @enderror
                    </div>    
                    <div class= "col-sm-6">
                        Country :
                        <input type="text" id="ccountry" name="country" class="form-control">
                            @error('country')
                                {{$message}}
                            @enderror
                    </div>    
                </div> 
                <br>   
                <div class="row">
                    <div class= "col-sm-6">
                        Post Code :
                        <input type="text" id="pincode" name="pincode" class="form-control">
                            @error('pincode')
                                {{$message}}
                            @enderror
                    </div>
                </div>    
                <div class="row text-center">
                    <div class= "col-sm-12">
                        <button type="submit" class="btn btn-outline-primary mt-5 my-5 p-md-2" >Add Record</button>
                        <button type="reset" class="btn btn-outline-info mt-5 my-5 my-5 p-md-2" >Reset</button>
                            
                    </div>  
                </div>   
            </form>
        </div>
    </div>
@endsection