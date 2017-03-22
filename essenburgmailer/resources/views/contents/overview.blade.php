@extends('components.head')
@extends('components.header')

@section('content')

    <ul class="list-group col-md-8 col-md-offset-2">
        @foreach($contents as $content)
            <li class="list-group-item">
                <a href="{{action('contentsController@show', $content->id)}}">{{$content->name}}</a>
                <form action="" method="post" class="pull-right">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    <input type="submit" value="x" class="button btn-danger">
                </form>
            </li>
        @endforeach
    </ul>

@endsection

@extends('components.foot')
<footer>
    @include('components.footer')
</footer>
