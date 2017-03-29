@extends('components.head')
@extends('components.header')

@section('content')

    <div class="editcontent col-md-8 col-md-offset-2">
        <h3>Edit this outro</h3>

        <form action="{{action('outrosController@update', $outros->id)}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" value="{{$outros->name}}" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="50" rows="20">{{$outros->message}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="update">
            </div>
        </form>
    </div>

@endsection
<footer>
    @include('components.footer')
</footer>
@extends('components.foot')