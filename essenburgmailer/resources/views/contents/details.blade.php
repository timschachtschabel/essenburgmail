@extends('components.head')
@extends('components.header')

@section('content')

    <div class="contentdetails col-md-8 col-md-offset-2" style="text-align: center;">
        <h2>{{ $contents->name  }} <span>ID: {{$contents->id}}</span></h2>
        <textarea name="" id="tinyMCE" cols="50" rows="20" readonly="readonly">{{$contents->message}}</textarea>
    </div>

    <div class="actions col-md-offset-4 col-md-6" style="margin-top: 20px;">
        <a href="{{action('contentsController@edit', $contents->id)}}" class="btn-primary btn-lg">Edit</a>
    </div>

@endsection
<footer>
    @include('components.footer')
</footer>

@extends('components.foot')