@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger text-center">{{$error}}</div>
@endforeach
 
@endif


@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>

@endif 