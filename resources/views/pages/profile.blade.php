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
                        <div class="text-start mt-5 mb-3 title-text">Profile</div>
                        <form action="{{ route('profileEdit') }}" method="POST">
                            @csrf
                            <div class="inpit-form-content">


                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror form-input p-2 mb-3" name="name" value="{{$user->name}}" placeholder="Enter name " required autocomplete="name" autofocus>

                                @error('name')
                                <p class="error-text"> {{ $message }} </p>
                                @enderror

                            </div>
                            <div class="inpit-form-content">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-input p-2 mb-3" name="email" placeholder="Enter email " value="{{$user->email}}" required autocomplete="email">

                                @error('email')
                                <p class="error-text"> {{ $message }} </p>
                                @enderror

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

                            <!-- <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <input class="bg-dark me-3" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <div class="login-conf-detail">Remember Me</div>
                                </div>
                            </div> -->
                            <div>
                                <button type="submit" class="login-button mt-4">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>


