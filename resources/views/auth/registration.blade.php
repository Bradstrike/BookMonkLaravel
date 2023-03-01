@extends('components.layout')
@section('content')



<div class="a1J aL[500px] av a1W a1G aM">
    <div class="a3l a1G a3P a1H sm:a2T[60px]">
        <h1 class="a21 a1L a3n a1O aZ">
            Register Now
        </h1>

        <div class="af a2o a2e a3 a5 a1Z">
            <span class="ar at/2 a2 a3b aA aF[1px] a4 a2m/2 a3O sm:al"></span>
            <p class="aM aW a1o a1t sm:a2u">
                Or, sign up with your email
            </p>
        </div>
        <form action="{{ route('register.post') }}" method="POST">
        @csrf
            <div class="a1Y">
                <label for="email" class="a21 al aW a1o aZ">
                    Email
                </label>
                <input ttype="text" placeholder="Email" id="email_address" name="email" required autofocus class="form-control a4 a1f a1W a1G a20[#353444] aP aS aW a1o a1t a1x a1w focus:a20[#454457] focus:a2H" />
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="a1Y">
                <label for="username" class="a21 al aW a1o aZ">
                    Username
                </label>
                <input type="text" placeholder="Name" id="name" name="name" required autofocus class="form-control a4 a1f a1W a1G a20[#353444] aP aS aW a1o a1t a1x a1w focus:a20[#454457] focus:a2H" />
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="a1Y">
                <label for="phone" class="a21 al aW a1o aZ">
                    Phone
                </label>
                <input type="text" placeholder="Phone number" id="phone" name="phone" required class="form-control a4 a1f a1W a1G a20[#353444] aP aS aW a1o a1t a1x a1w focus:a20[#454457] focus:a2H" />
                @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
            </div>
            <div class="a1Y">
                <label for="password" class="a21 al aW a1o aZ">
                    Password
                </label>
                <input type="password" name="password" id="password" placeholder="Enter your password" class="a4 a1f a1W a1G a20[#353444] aP aS aW a1o a1t a1x a1w focus:a20[#454457] focus:a2H" />
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <button type="submit" class="a3 a4 a5 a1Z a1f a1C a1v aW aX aZ hover:a36">
                Sign Up
            </button>
        </form>
    </div>
    <p class="a3o a1L aW a1o a1t">
        Already have have an account?
        <a href="javascript:void(0)" class="aZ hover:a1u">
            Sign In
        </a>
    </p>
</div>
<br>
<br>
@endsection