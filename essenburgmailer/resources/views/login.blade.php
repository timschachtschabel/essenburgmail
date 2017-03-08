@extends('components.head')

    <div class="login col-lg-6 col-md-offset-3">
        <div class="loginbox">
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="login" name="login">
                </div>
            </form>
        </div>
    </div>

@extends('components.foot')