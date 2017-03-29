@extends('components.head')
@extends('components.header')

@section('content')

    <div class="introdetails col-md-8 col-md-offset-2" style="text-align: center;">
        <h2>{{ $intros->name  }} <span>id: {{$intros->id}}</span></h2>
        <textarea name="details" id="details" cols="50" rows="20">{{$intros->message}}</textarea>
    </div>

    <div class="actions col-md-offset-4 col-md-6" style="margin-top: 20px;">
        <a href="{{action('introsController@edit', $intros->id)}}" class="btn-primary btn-lg">Edit</a>
    </div>

@endsection
<footer>
    @include('components.footer')
</footer>

@extends('components.foot')