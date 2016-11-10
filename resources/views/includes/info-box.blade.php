@section('styles')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('src/css/common.css')}}">
@append

@if(Session::has('fail'))
    <section class="info-box fail">
        {{ Session::get('fail') }}
    </section>
@endif

@if(Session::has('success'))
    <section class="info-box success">
        {{ Session::get('success') }}
    </section>
@endif

@if(count($errors) > 0)
    <section class="info-box fail">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </section>
@endif