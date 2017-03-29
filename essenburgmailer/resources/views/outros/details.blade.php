@extends('components.head')
@extends('components.header')

@section('content')

    <div class="outrodetails col-md-8 col-md-offset-2" style="text-align: center;">
        <h2>{{ $outros->name  }} <span>id: {{$outros->id}}</span></h2>
        <textarea name="details" id="details" cols="50" rows="20">{{$outros->message}}</textarea>
    </div>

    <div class="actions col-md-offset-4 col-md-6" style="margin-top: 20px;">
        <a href="{{action('outrosController@edit', $outros->id)}}" class="btn-primary btn-lg">Edit</a>
    </div>

@endsection
<footer>
    @include('components.footer')
</footer>

@extends('components.foot')