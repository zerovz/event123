@if (count($errors) > 0)
    <div class="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif