@if ( session()->has('success') )
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-success">
                {!! session('success') !!}
            </div>
        </div>
    </div>
@endif
@if ( session()->has('error') )
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger">
                {!! session('error') !!}
            </div>
        </div>
    </div>
@endif
@if (count($errors) > 0)
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif