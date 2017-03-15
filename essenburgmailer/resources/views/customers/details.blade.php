@extends('components.head')
@extends('components.header')

@section('content')

<div class="customerdetails" style="text-align: center;">
    <h1>{{ $customer->name  }}</h1>
    <table style="width: 50%; margin: 0 auto" border="1">
        <tbody>
        <tr>
            <td>Email</td>
            <td>{{$customer->email}};</td>
        </tr>
        <tr>
            <td>Phonenumber</td>
            <td>{{ $customer->phonenumber }}</td>
        </tr>
        <tr>
            <td>Company name</td>
            <td>{{ $customer->company_name }}</td>
        </tr>
        <tr>
            <td>Website link</td>
            <td>{{ $customer->website_link }}</td>
        </tr>
        <tr>
            <td>Subscription type</td>
            <td>{{ $customer->subscription_type }}</td>
        </tr>
        </tbody>
    </table>
</div>

<div class="actions col-md-offset-4 col-md-6" style="margin-top: 20px;">
    <a href="{{action('customersController@edit', $customer->id)}}" class="btn-primary btn-lg">Edit</a>
</div>

@endsection

@extends('components.foot')