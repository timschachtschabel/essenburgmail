@extends('components.head')
@extends('components.header')

@section('content')

<div class="editcustomer col-md-8 col-md-offset-2">
    <h3>Edit this customer</h3>

    <form action="{{action('customersController@update', $customer->id)}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" value="{{$customer->name}}" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" value="{{$customer->email}}" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="phonenumber">phonenumber</label>
            <input type="text" value="{{$customer->phonenumber}}" name="phonenumber" id="phonenumber" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Company name</label>
            <input type="text" name="companyname" value="{{$customer->company_name}}" id="companyname" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Website link</label>
            <input type="text" name="websitelink" value="{{$customer->website_link}}" id="websitelink" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Subscription type</label>
            <input type="text" name="subscriptiontype" value="{{$customer->subscription_type}}" id="subscriptiontype" class="form-control">
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