@extends('ticket')

@section('title')
    Prikaz događaja
@endsection
@section('content')
    <div class="module module-login span4 offset4">


    <form name="barcode" action="/ticket" method="post" class="form-vertical">
        {{ csrf_field() }}
        <div class="module-head">
            <h3>Scan Barcode</h3>
        </div>
        <div class="module-body">
            <div class="control-group">
                <div class="controls row-fluid">
                </div>
            </div>
        </div>
        <div class="module-body">
            <div class="control-group">
                <div class="controls row-fluid">
                    <input class="span12" type="text" name="barcode" id="barcode" placeholder="Barcode">

                </div>

            </div>
        </div>
        <br />
        <div class="module-foot">
            <div class="control-group">
                <div class="controls clearfix">
                    <button type="submit" value="Submit" name="Submit" class="btn btn-primary pull-right">Provjeri kartu</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection