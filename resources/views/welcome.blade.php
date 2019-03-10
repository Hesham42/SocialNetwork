@extends('layout.master')
@section('title')
welcom !!
@endsection
@section('content') 
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
        <div class="clo-md-6" >
            <h1>Sign up</h1>
                <form action="{{route('signup')}}" method="post">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email">Your Email</label>
                        <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}}">
                            </div>
                            <div class="form-group {{ $errors->has('firstName') ? 'has-error' : '' }}">
                                    <label for="firstName">Your firstName</label>
                                    <input class="form-control" type="text" name="firstName" id="firstName" value="{{ Request::old('firstName') }}}">
                                </div>
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                        <label for="password">Your password</label>
                                        <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                
                </form>
                 </div> 
                 <div class="clo-md-6" >
                    <h1>Sign In</h1>
                    <form action="{{route('signin')}}" method="post">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label for="email">Your Email</label>
                                        <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}}">
                                    </div>
                                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                            <label for="password">Your password</label>
                                                <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}}">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <input type="hidden" name="_token" value="{{ Session::token() }}">

                        </form>
                         </div>            
</div>


@endsection