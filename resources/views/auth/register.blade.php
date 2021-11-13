@extends('layouts.site')
@section('title', 'Sign Up')
@section('content')
<div class="container">
    <div class="row justify-content-center registration">
        <div class="col-11 col-md-5 mx-auto card shadow">
            <form method="POST" action="{{ route('register') }}" class="my-3 py-3 px-4" id="form-registration">
                @csrf
                <div class="form-group">
                    <label for="">First name</label>
                    <input type="text" name="first_name" id="fname" class="form-control required partial_name" placeholder="" aria-describedby="helpId">

                </div>
                <div class="form-group">
                    <label for="">Last name</label>
                    <input type="text" name="last_name" id="lname" class="form-control required partial_name" placeholder="" aria-describedby="helpId">

                </div>
                <input type="hidden" name="name" id="full_name">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" id="" class="form-control required" placeholder="" aria-describedby="helpId">

                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" id="" class="form-control required" placeholder="" aria-describedby="helpId">

                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control password" placeholder="" aria-describedby="helpId">

                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm-password" id="confirm-password" class="form-control password pwd2" placeholder="" aria-describedby="helpId">

                </div>
                <br>
                <span id="StrengthDisp" class="badge displayBadge"> </span>
                <br>
                <button class="btn btn-sign-up btn-block">Sign Up</button>
            </form>
        </div>
    </div>
</div>
@stop
@section('js')
<script src="{{asset('js/register.js')}}"></script>
@endsection
