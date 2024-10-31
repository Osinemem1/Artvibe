@extends('layout.app')

@section('content')

<div class="container">
    <div>Register</div>
    <form method="POST" action="{{route('store_user')}}" accept-charset="utf-8">


        @csrf

        <fieldset>
            <label for="NAME">NAME</label>
            <input type="text" name="name" placeholder="Name">
            <span style="color:red;">@error('name'){{$message}} @enderror</span>
        </fieldset>

        <fieldset>
            <label for="EMAIL">EMAIL</label>
            <input type="email" name="email" placeholder="EMAIL">
            <span style="color:red;">@error('email'){{$message}} @enderror</span>
        </fieldset>

        <fieldset>
            <label for="PHONE NUMBER">PHONE NUMBER</label>
            <input type="text" name="phone" placeholder="PHONE">
            <span style="color:red;">@error('phone'){{$message}} @enderror</span>
        </fieldset>

        <fieldset>
            <label for="ADDRESS">ADDRESS</label>
            <input type="text" name="address" placeholder="ADDRESS">
            <span style="color:red;">@error('address'){{$message}} @enderror</span>
        </fieldset>

        <fieldset>
            <label for="PASSWORD">PASSWORD</label>
            <input type="password" name="password" placeholder="PASSWORD">
            <span style="color:red;">@error('password'){{$message}} @enderror</span>
        </fieldset>

        <fieldset>
            <label for="CONFIRM PASSWORD">CONFIRM PASSWORD</label>
            <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD">
            <span style="color:red;">@error('confirm_password'){{$message}} @enderror</span>
        </fieldset>


        <button class="" name="submit" type="submit">
            <span>Sign Up</span>
        </button>
    </form>

</div>

@endsection