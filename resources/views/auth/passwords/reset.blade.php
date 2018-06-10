@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <form action="{{ route('password.request') }}" method="POST">
                 @csrf
                <input type="hidden" name="token" value="{{ $token }}">

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

                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="password" class="label">{{ __('Password') }}</label>
                                <p class="control">
                                    <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" id="password">
                                </p>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>    
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="password_confirmation" class="label">{{ __('Confirm Password') }}</label>
                                <p class="control">
                                    <input class="input{{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" type="password" name="password_confirmation" id="password_confirmation">
                                </p>
                                @if ($errors->has('password_confirmation'))
                                    <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="control">
                        <button class="button is-primary is-outlined is-fullwidth m-t-20">{{ __('Reset Password') }}</button>
                    </div>
                </div>    
            </form>
        </div>
        <h5 class="has-text-centered m-t-10"><a href="{{ route('login') }}" class="has-text-grey-light">Already Have an Account ?</a></h5>
    </div>
</div>
@endsection

