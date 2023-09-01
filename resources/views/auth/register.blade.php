<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Sofast</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid main_comtainer">
        <div class="login-page">
            <div class="login-content card-posigition">
                <div class="card card-style">
                    <div class="card-body p-4">
                        <div class="logo-image text-center mt-3">
                            <img src="{{ asset('assets/images/sofast-white-background 1.png') }}">
                        </div>
                        <div class="text-start mt-5 mb-3 title-text">Sign Up</div>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="inpit-form-content">
                                <!-- <input class="form-control form-input p-2 mb-3" type="text" name="name" placeholder="Enter name " value="{{ old('name') }}" required autocomplete="name" autofocus> -->

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror form-input p-2 mb-3" name="name" value="{{ old('name') }}" placeholder="Enter name " required autocomplete="name" autofocus>

                                @error('name')
                                <p class="error-text"> {{ $message }} </p>
                                @enderror

                            </div>
                            <div class="inpit-form-content">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-input p-2 mb-3" name="email" placeholder="Enter email " value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <p class="error-text"> {{ $message }} </p>
                                @enderror

                                <!-- <input class="form-control form-input p-2 mb-3" type="text" name="email" placeholder="Enter email " value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <p class="error-text">Please enter name</p>
                                @enderror -->

                                <div class="svg-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                                        <g clip-path="url(#clip0_28_1045)">
                                            <path d="M12.8537 0H1.69731C1.37363 0.00891113 1.06646 0.159761 0.843072 0.419434C0.619688 0.679106 0.498401 1.02639 0.505914 1.38501V10.615C0.498881 10.9735 0.620339 11.3204 0.843623 11.58C1.06691 11.8395 1.37379 11.9906 1.69731 12H12.8537C13.0141 11.9958 13.172 11.9567 13.3187 11.8849C13.4654 11.813 13.5978 11.7098 13.7085 11.5811C13.8192 11.4525 13.9058 11.301 13.9636 11.1352C14.0213 10.9694 14.0491 10.7926 14.0451 10.615V1.38501C14.0521 1.02654 13.9307 0.679569 13.7074 0.420013C13.4841 0.160458 13.1772 0.00943454 12.8537 0ZM12.6912 0.923004L7.30261 7.19501L1.85983 0.923004H12.6912ZM1.30022 10.423V1.57001L5.11825 5.978L1.30022 10.423ZM1.85983 11.076L5.6869 6.62799L7.02275 8.173C7.05856 8.21552 7.10188 8.2494 7.15001 8.27258C7.19815 8.29576 7.25013 8.30774 7.30261 8.30774C7.3551 8.30774 7.40697 8.29576 7.45511 8.27258C7.50324 8.2494 7.54656 8.21552 7.58237 8.173L8.89122 6.65399L12.6912 11.078H1.85983V11.076ZM13.2508 10.423L9.45084 6L13.2508 1.57599V10.424V10.423Z" fill="#717986" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_28_1045">
                                                <rect width="13.5392" height="12" fill="white" transform="translate(0.505951)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="inpit-form-content">

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-input p-2 mb-3" name="password" required autocomplete="new-password" placeholder="Enter password ">

                                @error('password')
                                <p class="error-text"> {{ $message }} </p>
                                @enderror

                                <!-- <input class="form-control form-input p-2 mb-3" type="password" name="password"
                                    placeholder="Enter password " required autocomplete="new-password">

                                @error('password')
                                <p class="error-text">Please enter name</p>
                                @enderror -->

                                <div class="svg-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="16" viewBox="0 0 13 16" fill="none">
                                        <path d="M9.16586 9.59003C9.2707 9.58884 9.37346 9.62219 9.46115 9.68585C9.54884 9.74952 9.61751 9.8406 9.65838 9.94757C9.69924 10.0545 9.71045 10.1726 9.69066 10.2866C9.67087 10.4007 9.62095 10.5056 9.5472 10.5882C9.47345 10.6708 9.37912 10.7271 9.27637 10.7502C9.17363 10.7733 9.06703 10.7621 8.97007 10.718C8.8731 10.6738 8.79022 10.5987 8.73185 10.5022C8.67349 10.4057 8.64228 10.2922 8.64228 10.176C8.64192 10.0995 8.65516 10.0236 8.68128 9.9527C8.7074 9.88181 8.74593 9.81729 8.79455 9.76288C8.84316 9.70846 8.90096 9.66516 8.96467 9.6355C9.02838 9.60584 9.09676 9.59042 9.16586 9.59003ZM11.5217 10.644C11.5908 10.6436 11.659 10.6281 11.7228 10.5984C11.7865 10.5688 11.8444 10.5255 11.893 10.4711C11.9416 10.4167 11.98 10.3522 12.0061 10.2813C12.0323 10.2104 12.0455 10.1345 12.0451 10.058V7.89001C12.0473 7.27186 11.8281 6.67796 11.4355 6.23871C11.0429 5.79945 10.5091 5.5507 9.95113 5.547H9.31924V3.47998C9.31924 2.55703 8.98828 1.67191 8.39921 1.01929C7.81014 0.366661 7.01123 0 6.17816 0C5.34509 0 4.54618 0.366661 3.95711 1.01929C3.36804 1.67191 3.03709 2.55703 3.03709 3.47998V5.547H2.40519C1.84724 5.5507 1.3134 5.79945 0.920815 6.23871C0.52823 6.67796 0.309015 7.27186 0.311177 7.89001V12.69C0.308775 13.3083 0.527983 13.9024 0.920595 14.3419C1.31321 14.7814 1.84708 15.0303 2.40519 15.034H9.95113C10.5092 15.0303 11.0431 14.7814 11.4357 14.3419C11.8283 13.9024 12.0475 13.3083 12.0451 12.69C12.0451 12.5362 11.9899 12.3887 11.8918 12.2799C11.7936 12.1711 11.6605 12.11 11.5217 12.11C11.3828 12.11 11.2496 12.1711 11.1515 12.2799C11.0533 12.3887 10.9981 12.5362 10.9981 12.69C10.9993 12.9992 10.8897 13.2962 10.6934 13.5159C10.4971 13.7357 10.2302 13.8601 9.95113 13.862H2.40519C2.12614 13.8601 1.8592 13.7357 1.66289 13.5159C1.46659 13.2962 1.35704 12.9992 1.35824 12.69V7.89001C1.35704 7.58094 1.46667 7.28397 1.663 7.06439C1.85933 6.84482 2.12622 6.72058 2.40519 6.71899H9.95113C10.2301 6.72058 10.497 6.84482 10.6933 7.06439C10.8896 7.28397 10.9993 7.58094 10.9981 7.89001V10.058C10.9977 10.1345 11.011 10.2104 11.0371 10.2813C11.0632 10.3522 11.1017 10.4167 11.1504 10.4711C11.199 10.5255 11.2568 10.5688 11.3205 10.5984C11.3842 10.6281 11.4526 10.6436 11.5217 10.644ZM8.27217 5.54401H4.08415V3.47699C4.10014 2.87348 4.32772 2.30062 4.71869 1.88C5.10965 1.45939 5.63319 1.22412 6.17816 1.22412C6.72313 1.22412 7.24667 1.45939 7.63763 1.88C8.0286 2.30062 8.25618 2.87348 8.27217 3.47699V5.54401ZM5.21241 9.58698C5.31725 9.58579 5.42001 9.61914 5.5077 9.6828C5.59539 9.74646 5.66406 9.83761 5.70493 9.94458C5.74579 10.0515 5.757 10.1696 5.73721 10.2836C5.71742 10.3977 5.66751 10.5027 5.59375 10.5852C5.52 10.6678 5.42567 10.7242 5.32293 10.7473C5.22018 10.7704 5.11358 10.7591 5.01662 10.715C4.91965 10.6708 4.83677 10.5957 4.77841 10.4992C4.72004 10.4027 4.68883 10.2891 4.68883 10.173C4.68883 10.0189 4.74388 9.87109 4.84198 9.76184C4.94008 9.65259 5.07332 9.59082 5.21241 9.59003V9.58698ZM3.24467 9.58698C3.34951 9.58579 3.45227 9.61914 3.53996 9.6828C3.62765 9.74646 3.69632 9.83761 3.73718 9.94458C3.77805 10.0515 3.78926 10.1696 3.76947 10.2836C3.74967 10.3977 3.69976 10.5027 3.62601 10.5852C3.55226 10.6678 3.45804 10.7242 3.35529 10.7473C3.25254 10.7704 3.14595 10.7591 3.04899 10.715C2.95202 10.6708 2.86902 10.5957 2.81066 10.4992C2.7523 10.4027 2.7212 10.2891 2.72119 10.173C2.72119 10.0189 2.77625 9.87109 2.87435 9.76184C2.97245 9.65259 3.10558 9.59082 3.24467 9.59003V9.58698ZM7.17101 9.58698C7.27585 9.58579 7.37861 9.61914 7.4663 9.6828C7.55399 9.74646 7.62266 9.83761 7.66353 9.94458C7.70439 10.0515 7.71571 10.1696 7.69592 10.2836C7.67613 10.3977 7.62611 10.5027 7.55235 10.5852C7.4786 10.6678 7.38438 10.7242 7.28164 10.7473C7.17889 10.7704 7.07229 10.7591 6.97533 10.715C6.87836 10.6708 6.79537 10.5957 6.737 10.4992C6.67864 10.4027 6.64754 10.2891 6.64754 10.173C6.64753 10.0189 6.70259 9.87109 6.80069 9.76184C6.89879 9.65259 7.03192 9.59082 7.17101 9.59003V9.58698Z" fill="#717986" />
                                    </svg>
                                </div>
                            </div>
                            <div class="inpit-form-content">

                                <!-- <input id="password-confirm" class="form-control form-input p-2 mb-3" type="password" name="password_confirmation" placeholder="Enter confirm password..." required autocomplete="new-password"> -->

                                <input class="form-control form-input p-2 mb-3" type="password" name="password_confirmation" placeholder="Enter confirm password..." required autocomplete="new-password">

                                <div class="svg-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="16" viewBox="0 0 13 16" fill="none">
                                        <path d="M9.16586 9.59003C9.2707 9.58884 9.37346 9.62219 9.46115 9.68585C9.54884 9.74952 9.61751 9.8406 9.65838 9.94757C9.69924 10.0545 9.71045 10.1726 9.69066 10.2866C9.67087 10.4007 9.62095 10.5056 9.5472 10.5882C9.47345 10.6708 9.37912 10.7271 9.27637 10.7502C9.17363 10.7733 9.06703 10.7621 8.97007 10.718C8.8731 10.6738 8.79022 10.5987 8.73185 10.5022C8.67349 10.4057 8.64228 10.2922 8.64228 10.176C8.64192 10.0995 8.65516 10.0236 8.68128 9.9527C8.7074 9.88181 8.74593 9.81729 8.79455 9.76288C8.84316 9.70846 8.90096 9.66516 8.96467 9.6355C9.02838 9.60584 9.09676 9.59042 9.16586 9.59003ZM11.5217 10.644C11.5908 10.6436 11.659 10.6281 11.7228 10.5984C11.7865 10.5688 11.8444 10.5255 11.893 10.4711C11.9416 10.4167 11.98 10.3522 12.0061 10.2813C12.0323 10.2104 12.0455 10.1345 12.0451 10.058V7.89001C12.0473 7.27186 11.8281 6.67796 11.4355 6.23871C11.0429 5.79945 10.5091 5.5507 9.95113 5.547H9.31924V3.47998C9.31924 2.55703 8.98828 1.67191 8.39921 1.01929C7.81014 0.366661 7.01123 0 6.17816 0C5.34509 0 4.54618 0.366661 3.95711 1.01929C3.36804 1.67191 3.03709 2.55703 3.03709 3.47998V5.547H2.40519C1.84724 5.5507 1.3134 5.79945 0.920815 6.23871C0.52823 6.67796 0.309015 7.27186 0.311177 7.89001V12.69C0.308775 13.3083 0.527983 13.9024 0.920595 14.3419C1.31321 14.7814 1.84708 15.0303 2.40519 15.034H9.95113C10.5092 15.0303 11.0431 14.7814 11.4357 14.3419C11.8283 13.9024 12.0475 13.3083 12.0451 12.69C12.0451 12.5362 11.9899 12.3887 11.8918 12.2799C11.7936 12.1711 11.6605 12.11 11.5217 12.11C11.3828 12.11 11.2496 12.1711 11.1515 12.2799C11.0533 12.3887 10.9981 12.5362 10.9981 12.69C10.9993 12.9992 10.8897 13.2962 10.6934 13.5159C10.4971 13.7357 10.2302 13.8601 9.95113 13.862H2.40519C2.12614 13.8601 1.8592 13.7357 1.66289 13.5159C1.46659 13.2962 1.35704 12.9992 1.35824 12.69V7.89001C1.35704 7.58094 1.46667 7.28397 1.663 7.06439C1.85933 6.84482 2.12622 6.72058 2.40519 6.71899H9.95113C10.2301 6.72058 10.497 6.84482 10.6933 7.06439C10.8896 7.28397 10.9993 7.58094 10.9981 7.89001V10.058C10.9977 10.1345 11.011 10.2104 11.0371 10.2813C11.0632 10.3522 11.1017 10.4167 11.1504 10.4711C11.199 10.5255 11.2568 10.5688 11.3205 10.5984C11.3842 10.6281 11.4526 10.6436 11.5217 10.644ZM8.27217 5.54401H4.08415V3.47699C4.10014 2.87348 4.32772 2.30062 4.71869 1.88C5.10965 1.45939 5.63319 1.22412 6.17816 1.22412C6.72313 1.22412 7.24667 1.45939 7.63763 1.88C8.0286 2.30062 8.25618 2.87348 8.27217 3.47699V5.54401ZM5.21241 9.58698C5.31725 9.58579 5.42001 9.61914 5.5077 9.6828C5.59539 9.74646 5.66406 9.83761 5.70493 9.94458C5.74579 10.0515 5.757 10.1696 5.73721 10.2836C5.71742 10.3977 5.66751 10.5027 5.59375 10.5852C5.52 10.6678 5.42567 10.7242 5.32293 10.7473C5.22018 10.7704 5.11358 10.7591 5.01662 10.715C4.91965 10.6708 4.83677 10.5957 4.77841 10.4992C4.72004 10.4027 4.68883 10.2891 4.68883 10.173C4.68883 10.0189 4.74388 9.87109 4.84198 9.76184C4.94008 9.65259 5.07332 9.59082 5.21241 9.59003V9.58698ZM3.24467 9.58698C3.34951 9.58579 3.45227 9.61914 3.53996 9.6828C3.62765 9.74646 3.69632 9.83761 3.73718 9.94458C3.77805 10.0515 3.78926 10.1696 3.76947 10.2836C3.74967 10.3977 3.69976 10.5027 3.62601 10.5852C3.55226 10.6678 3.45804 10.7242 3.35529 10.7473C3.25254 10.7704 3.14595 10.7591 3.04899 10.715C2.95202 10.6708 2.86902 10.5957 2.81066 10.4992C2.7523 10.4027 2.7212 10.2891 2.72119 10.173C2.72119 10.0189 2.77625 9.87109 2.87435 9.76184C2.97245 9.65259 3.10558 9.59082 3.24467 9.59003V9.58698ZM7.17101 9.58698C7.27585 9.58579 7.37861 9.61914 7.4663 9.6828C7.55399 9.74646 7.62266 9.83761 7.66353 9.94458C7.70439 10.0515 7.71571 10.1696 7.69592 10.2836C7.67613 10.3977 7.62611 10.5027 7.55235 10.5852C7.4786 10.6678 7.38438 10.7242 7.28164 10.7473C7.17889 10.7704 7.07229 10.7591 6.97533 10.715C6.87836 10.6708 6.79537 10.5957 6.737 10.4992C6.67864 10.4027 6.64754 10.2891 6.64754 10.173C6.64753 10.0189 6.70259 9.87109 6.80069 9.76184C6.89879 9.65259 7.03192 9.59082 7.17101 9.59003V9.58698Z" fill="#717986" />
                                    </svg>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <input class="bg-dark me-3" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <div class="login-conf-detail">Remember Me</div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="login-button mt-4">Register Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
