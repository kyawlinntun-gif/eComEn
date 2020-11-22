@extends('layouts.master')

@section('content')

    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-4">
                    <form action="{{ url('login') }}" method="POST">
                        @csrf
                        <div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection