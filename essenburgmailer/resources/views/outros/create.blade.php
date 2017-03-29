@extends('components.head')
@extends('components.header')

@section('content')

    <div class="addoutro col-md-8 col-md-offset-2">
        <h3>Add a new message</h3>

        <form action="{{action('outrosController@store')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <textarea name="message" id="message" cols="40" rows="20"></textarea>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
        </form>
    </div>

@endsection

<footer>
    @include('components.footer')
</footer>

@extends('components.foot')

