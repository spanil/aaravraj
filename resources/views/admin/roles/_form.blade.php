    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" value="{{$data->name}}" class="form-control" id="name" placeholder="Enter Name">
            @if ($errors->has('name'))
                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
            @endif
        </div>
       
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{$btn}}</button>
    </div>
