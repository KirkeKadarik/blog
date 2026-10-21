@extends('partials.layout')

@section('content')
    <div class="container mx-auto p-4">
        <form method="POST" action="{{ route('password.email') }}"
            class="card bg-base-300 shadow-sm w-full max-w-xl mx-auto p-6">
            @csrf

            <p class="mb-4">
                @lang('Forgot your password? Enter your email address and we will send you a password reset link.')
            </p>

            @if (session('status'))
                <div role="status" class="alert alert-success mb-4">
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Email')</legend>
                <input id="email" name="email" type="email"
                    value="{{ old('email') }}"
                    class="input w-full @error('email') input-error @enderror"
                    required autofocus autocomplete="username">

                @error('email')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex flex-wrap items-center justify-end gap-2 mt-4">
                <a href="{{ route('login') }}" class="btn btn-link">
                    @lang('Log in')
                </a>

                <button type="submit" class="btn btn-primary">
                    @lang('Email Password Reset Link')
                </button>
            </div>
        </form>
    </div>
@endsection