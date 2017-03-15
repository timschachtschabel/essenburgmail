@extends('components.head')
@extends('components.header')

@section('content')

<div class="addcustomer col-md-8 col-md-offset-2">
    <h3>Add new customer</h3>

    <form action="{{action('customersController@store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Phonenumber</label>
            <input type="text" name="phonenumber" id="phonenumber" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Company name</label>
            <input type="text" name="companyname" id="companyname" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Website link</label>
            <input type="text" name="websitelink" id="websitelink" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Subscription type</label>
            <input type="text" name="subscriptiontype" id="subscriptiontype" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Register">
        </div>
    </form>
</div>

@endsection

@extends('components.foot')
