@extends('components.head')
@extends('components.header')

@section('content')

<ul class="list-group col-md-8 col-md-offset-2">
    @foreach($customers as $customer)
        <li class="list-group-item">
            <a href="{{action('customersController@show', $customer->id)}}">{{ $customer->caps() }}</a>
            <form action="{{action('customersController@show', $customer->id)}}" method="post" class="pull-right">
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
