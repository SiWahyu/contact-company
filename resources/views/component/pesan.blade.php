
@if ($errors->any())
    <div class="div alert alert-danger m-4">
        <ul>
            @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (Session::has('success'))
<div class="alert alert-success m-4">
    {{Session::get('success')}}
</div>
@endif
