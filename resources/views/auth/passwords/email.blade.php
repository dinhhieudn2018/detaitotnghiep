@extends('pages.layouts.master')

@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Lấy lại mật khẩu{{-- {{ __('Reset Password') }} --}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <br><br>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label for="email">Địa chỉ email{{-- {{ __('E-Mail Address') }} --}}</label>

                <div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Gửi liên kết đặt lại mật khẩu{{-- {{ __('Send Password Reset Link') }} --}}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
