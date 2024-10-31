@extends('layout.app')

@section('content')

<div class="container">
    <div>Register</div>
    <form method="POST" action="{{route('store_user')}}" accept-charset="utf-8">


        @csrf



        <fieldset>
            <label for="EMAIL">EMAIL</label>
            <input type="email" name="email" placeholder="EMAIL">
            <span style="color:red;">@error('email'){{$message}} @enderror</span>
        </fieldset>




        <fieldset>
            <label for="PASSWORD">PASSWORD</label>
            <input type="password" name="password" placeholder="PASSWORD">
            <span style="color:red;">@error('password'){{$message}} @enderror</span>
        </fieldset>



        <button class="" name="submit" type="submit">
            <span>login</span>
        </button>
    </form>

</div>

@endsection