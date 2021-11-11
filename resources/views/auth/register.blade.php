@extends('layouts.site')
@section('title', 'Sign Up')
@section('content')
    <div class="container">
        <div class="row justify-content-center registration">
            <div class="col-11 col-md-5 mx-auto card shadow">
                <form method="POST" action="{{ route('register') }}" class="my-3 py-3 px-4">
                    @csrf
                    <div class="form-group">
                        <label for="">First name</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                       
                    </div>
                    <div class="form-group">
                        <label for="">Last name</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                       
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                       
                    </div> 
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                       
                    </div>

                    <button class="btn btn-sign-up btn-block">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
@endsection
