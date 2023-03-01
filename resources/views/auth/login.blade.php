@extends('components.layout')
@section('content')



<div class="a1J aL[500px] av a1W a1G aM">
    <div class="a3l a1G a3P a1H sm:a2T[60px]">
        <h1 class="a21 a1L a3n a1O aZ">
            Sign In Now
        </h1>
        <br>
        <div class="af a2o a2e a3 a5 a1Z">
            <span class="ar at/2 a2 a3b aA aF[1px] a4 a2m/2 a3O sm:al"></span>
            <p class="aM aW a1o a1t sm:a2u">
                
            </p>
        </div>
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="a1Y">
                <label for="email" class="a21 al aW a1o aZ">
                    Email
                </label>
                <input type="text" placeholder="Email" id="email" name="email" required autofocus class="form-control a4 a1f a1W a1G a20[#353444] aP aS aW a1o a1t a1x a1w focus:a20[#454457] focus:a2H" />
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="a1Y">
                <label for="password" class="a21 al aW a1o aZ">
                    Password
                </label>
                <input type="password" placeholder="Password" id="password" name="password" required class="form-control a4 a1f a1W a1G a20[#353444] aP aS aW a1o a1t a1x a1w focus:a20[#454457] focus:a2H" />
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="a2e ah sm:a3">
                <div class="af a1Y sm:a2x">
                    <label for="checkboxLabelOne" class="a3 a3S a3T a5 aW a1o a1t">
                        <div class="relative">
                            <input type="checkbox" id="checkboxLabelOne" class="a2y" />
                            <div class="box a3U a3 a3V a2v a5 a1Z a1m a1W a3C a3W a3X a3Y">
                                <span class="aI">
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.9305 1.0795C10.8168 0.973502 10.6381 0.973502 10.5244 1.0795L4.59448 6.43975C4.54574 6.48517 4.48076 6.48517 4.43202 6.43975L1.49145 3.77476C1.37773 3.66877 1.19902 3.66877 1.08529 3.77476C0.971569 3.88076 0.971569 4.04732 1.08529 4.15331L4.02586 6.8183C4.15583 6.93943 4.33454 7 4.497 7C4.67571 7 4.83818 6.93943 4.96815 6.8183L10.898 1.45804C11.028 1.35205 11.028 1.18549 10.9305 1.0795Z"
                                            fill="white"
                                        ></path>
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M11.2146 0.797485L11.2251 0.808826C11.4696 1.07472 11.4666 1.50215 11.1602 1.76041L5.23851 7.1133C5.0308 7.30573 4.77022 7.4001 4.49712 7.4001C4.24507 7.4001 3.96679 7.3088 3.75557 7.11317L0.812654 4.44605C0.529228 4.18189 0.529254 3.74641 0.812681 3.48225C1.07921 3.23384 1.49438 3.23307 1.76182 3.47997L4.5136 5.97385L10.2545 0.784471C10.5219 0.537806 10.9369 0.538643 11.2034 0.78698L11.2146 0.797485ZM1.49156 3.77486C1.37784 3.66887 1.19913 3.66887 1.0854 3.77486C0.97168 3.88086 0.97168 4.04742 1.0854 4.15341L4.02597 6.81839C4.15594 6.93953 4.33465 7.0001 4.49712 7.0001C4.67582 7.0001 4.83829 6.93953 4.96826 6.81839L10.8981 1.45814C11.0281 1.35215 11.0281 1.18559 10.9306 1.07959C10.8169 0.973599 10.6382 0.973599 10.5245 1.07959L4.59459 6.43985C4.54585 6.48527 4.48087 6.48527 4.43213 6.43985L1.49156 3.77486Z"
                                            fill="white"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        Keep me signed in
                    </label>
                </div>
                <a href="javascript:void(0)" class="aW a1o a1t hover:aZ">
                    Forgot Password?
                </a>
            </div>
            <button type="submit" class="a3 a4 a5 a1Z a1f a1C a1v aW aX aZ hover:a36">
                Signin
            </button>
        </form>
    </div>
    <p class="a3o a1L aW a1o a1t">
        Don't you have an account?
        <a href="javascript:void(0)" class="aZ hover:a1u">
            Sign up
        </a>
    </p>
</div>
<br>
<br>
@endsection