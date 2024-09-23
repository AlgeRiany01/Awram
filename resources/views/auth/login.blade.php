@extends('layouts.home.app')

@section('content')
    <div class="center">


        <div class="loginForm">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="inputs">
                    <h1 style="text-align: center">تسجيل الدخول</h1>

                    <input type="email" class="my-form-control rounded-pill @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" autofocus placeholder="البريد الاكتروني" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="password" class="mt-3 my-form-control rounded-pill @error('password') is-invalid @enderror"
                        name="password" placeholder="كلمة السر" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="d-flex justify-content-between mt-5">
                        <button type="submit" class="btn-gr">تسجيل الدخول</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
