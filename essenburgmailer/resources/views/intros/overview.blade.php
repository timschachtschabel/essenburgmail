@extends('components.head')
@extends('components.header')

@section('content')

    <ul class="list-group col-md-8 col-md-offset-2">
        @foreach($intros as $intro)
            <li class="list-group-item">
                <a href="{{action('introsController@show', $intro->id)}}">{{$intro->name}}</a>

                <form action="{{action('introsController@destroy', $intro->id)}}" method="post" class="pull-right">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="delete">
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