@extends('layout.master')
@section('title')
welcom !!
@endsection
@section('content')
<div class="row">
        <div class="clo-md-6" >
            <h1>Sign up</h1>
                <form action="#" method="post">
                        <div class="form-group">
                                <label for="email">Your Email</label>
                                <input class="form-control" type="text" name="email" id="email">
                            </div>
                            <div class="form-group">
                                    <label for="firstName">Your firstName</label>
                                    <input class="form-control" type="text" name="firstName" id="firstName">
                                </div>
                                <div class="form-group">
                                        <label for="password">Your password</label>
                                        <input class="form-control" type="text" name="password" id="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                
                </form>
                 </div> 
                 <div class="clo-md-6" >
                    <h1>Sign In</h1>
                        <form action="#" method="post">
                                <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input class="form-control" type="text" name="email" id="email">
                                    </div>
                                        <div class="form-group">
                                                <label for="password">Your password</label>
                                                <input class="form-control" type="text" name="password" id="password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                        
                        </form>
                         </div>            
</div>


@endsection