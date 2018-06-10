@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
         @if (session('status'))
            <div class="notification is-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="card-content">
                    <h1 class="title">{{ __('Reset Password') }}</h1>
                    <div class="field">
                        <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                        <p class="control">
                            <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        </p>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="control">
                        <button class="button is-primary is-outlined is-fullwidth m-t-20">{{ __('Send Password Reset Link') }}</button>
                    </div>
                </div>    
            </form>
        </div>
        <h5 class="has-text-centered m-t-10"><a href="{{ route('login') }}" class="has-text-grey-light">Back To Login</a></h5>
    </div>
</div>
@endsection


