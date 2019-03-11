@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-4 col-md-offset-4 error">
            
                @foreach($errors->all() as $error)
                    <div class="form-group has-danger">
                            <label class="form-control-label" for="inputDanger1">Invalid input</label>
                            <input type="text" value="{{$error}}" class="form-control is-invalid" id="inputInvalid">
                            <div class="invalid-feedback"> </div>
                    </div>                
                          @endforeach
            
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 success">
               <div class="form-group has-success">
                <label class="form-control-label" for="inputSuccess1">Valid input</label>
                <input type="text" value="{{Session::get('message')}}" class="form-control is-valid" id="inputValid">
                <div class="valid-feedback"></div>
              </div>
            </div>
    </div>
@endif