<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/7.15.4/video.js"></script>
</head>
<style>
    .footer-primary-section {
        padding: 40px;
        background: #171A1F;
        color: #fff;
    }

    .footer-primary-section .questions-contact {
        color: #FFF;
        font-family: Outfit;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
    }

    .footer-primary-section .questions-contact a {
        color: #FF5402;
        cursor: pointer;
        text-decoration: none;
    }

    .footer-primary-section .social-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #2B3038;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
    }

    .footer-end-section {
        background: #23262C;
    }

    #my-video{
        width: 45vw;
        height: 40vh;
    }

    .vjs-big-play-button {
        display: non;
    }

</style>

<body>
    <!-- Header section -->


    <header class="header-section text-white p-4 d-flex justify-content-between">
        <div class="d-flex p-3">
            <a href="#"><img src="{{ asset('assets/images/sofast-white-background 1.png') }}"></a>
            <ul class="nav justify-content-center ms-5">
                <li class="nav-item me-3">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <!-- <div class="search-content">
                <input  class="search-input form-control form-input p-3" type="search" name="search" placeholder="Search here">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                    <path d="M13.6409 12.1978L10.4277 8.93819C11.0804 7.87458 11.3621 6.62415 11.2285 5.38304C11.0948 4.14192 10.5535 2.98031 9.68929 2.08041C8.82512 1.18051 7.68707 0.593226 6.45355 0.410659C5.22004 0.228093 3.96088 0.460574 2.87358 1.07164C1.78627 1.68271 0.932213 2.63781 0.445554 3.78712C-0.0411053 4.93642 -0.132871 6.21494 0.184516 7.42213C0.501904 8.62933 1.21058 9.69691 2.19936 10.4574C3.18815 11.218 4.40111 11.6284 5.64803 11.6244C6.80267 11.6243 7.9288 11.2655 8.8711 10.5975L12.0442 13.8182C12.1484 13.9243 12.2727 14.0085 12.4098 14.066C12.5468 14.1235 12.694 14.1531 12.8426 14.1531C12.9912 14.1531 13.1383 14.1235 13.2754 14.066C13.4124 14.0085 13.5367 13.9243 13.6409 13.8182C13.8519 13.6014 13.97 13.3107 13.97 13.008C13.97 12.7053 13.8519 12.4146 13.6409 12.1978ZM5.64803 9.76834C4.88055 9.77964 4.127 9.56213 3.48336 9.14348C2.83971 8.72483 2.33501 8.12397 2.03346 7.41734C1.73191 6.71071 1.64717 5.93024 1.78996 5.17524C1.93275 4.42023 2.29662 3.72482 2.83533 3.17745C3.37404 2.63009 4.06325 2.25553 4.81522 2.10141C5.56718 1.9473 6.34798 2.0206 7.05821 2.31199C7.76845 2.60338 8.37595 3.09969 8.80362 3.73778C9.23129 4.37587 9.45972 5.1269 9.45981 5.89532C9.46513 6.91429 9.06706 7.89389 8.35268 8.61974C7.6383 9.34558 6.66583 9.75858 5.64803 9.76834Z" fill="white" />
                </svg>
            </div> -->
            <div class="user-profole ms-4 me-4"></div>
            <div class="dropdown">
                <button class="btn dropdown-toggle profile-button p-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">{{ $user->name }}               </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ route('profile') }}">Edit Profile</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item">logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Content section -->
    <section class="first-container">
        <div class="section-container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                    <video-js id="my-video" class="vjs-default-skin" controls preload="auto" width="1280" height="720" autoplay muted>
                        <source id="video-src"  type="application/x-mpegURL">
                    </video-js>
                </div>
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center">

                    <?php $firstGenre = true; ?>

                    @foreach ($data as $key => $d)
                    @if ($loop->first)
                    <input type="text" hidden id="selected_genre" value="{{ $key }}">
                    <h1 class="content-title" id="channel_name">CHannle name</h1>
                    <p class="product-descteption" id="description">DESCRIPTION</p>
                    <div class="mt-2">
                        <div class="pridict-info">Language :<span id="language"> LANGUAGE </span></div>
                        <div class="pridict-info">Quality:<span id="quality"> HD (16:9)</span></div>
                        <div class="pridict-info">Genre:<span id="genre"> </span></div>
                        <div class="pridict-info">Rating:<span id="rating"> RATING </span></div>
                        <div class="pridict-info">Hours:<span id="hours"> HOURS </span></div>
                        <div class="pridict-info">Refreshing:<span id="refreshing">REFRESHING</span></div>
                    </div>
                    @endif
                    @endforeach



                </div>
            </div>
        </div>
    </section>
    <section class="second-container">
        <div class="section-container">
            <div class="row">
                <div class="col-md-2">
                    <!-- <div class="search-content">
                        <input id="searchGenre" oninput="searchGenre(this)" class="search-input form-control form-input p-2" type="search" name="search" placeholder="Search here" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                            <path d="M13.6409 12.1978L10.4277 8.93819C11.0804 7.87458 11.3621 6.62415 11.2285 5.38304C11.0948 4.14192 10.5535 2.98031 9.68929 2.08041C8.82512 1.18051 7.68707 0.593226 6.45355 0.410659C5.22004 0.228093 3.96088 0.460574 2.87358 1.07164C1.78627 1.68271 0.932213 2.63781 0.445554 3.78712C-0.0411053 4.93642 -0.132871 6.21494 0.184516 7.42213C0.501904 8.62933 1.21058 9.69691 2.19936 10.4574C3.18815 11.218 4.40111 11.6284 5.64803 11.6244C6.80267 11.6243 7.9288 11.2655 8.8711 10.5975L12.0442 13.8182C12.1484 13.9243 12.2727 14.0085 12.4098 14.066C12.5468 14.1235 12.694 14.1531 12.8426 14.1531C12.9912 14.1531 13.1383 14.1235 13.2754 14.066C13.4124 14.0085 13.5367 13.9243 13.6409 13.8182C13.8519 13.6014 13.97 13.3107 13.97 13.008C13.97 12.7053 13.8519 12.4146 13.6409 12.1978ZM5.64803 9.76834C4.88055 9.77964 4.127 9.56213 3.48336 9.14348C2.83971 8.72483 2.33501 8.12397 2.03346 7.41734C1.73191 6.71071 1.64717 5.93024 1.78996 5.17524C1.93275 4.42023 2.29662 3.72482 2.83533 3.17745C3.37404 2.63009 4.06325 2.25553 4.81522 2.10141C5.56718 1.9473 6.34798 2.0206 7.05821 2.31199C7.76845 2.60338 8.37595 3.09969 8.80362 3.73778C9.23129 4.37587 9.45972 5.1269 9.45981 5.89532C9.46513 6.91429 9.06706 7.89389 8.35268 8.61974C7.6383 9.34558 6.66583 9.75858 5.64803 9.76834Z" fill="white" />
                        </svg>
                    </div> -->
                    <div class="d-flex align-items-start mt-3">
                        <div class="genreParent nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                            <!-- <button class="nav-link text-start mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-featured" type="button" role="tab" aria-controls="v-pills-featured" aria-selected="true">Featured</button> -->
                            <?php $firstGenre = true; ?>

                            @foreach ($data as $key => $d)
                            <button onclick="changeGenre(this)" data-genre="{{ $key }}" class="nav-link text-start mb-2 @if ($firstGenre) active @endif" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-featured" type="button" role="tab" aria-controls="v-pills-featured" aria-selected="{{ $firstGenre ? 'true' : 'false' }}">
                                {{ $key }}
                            </button>
                            <?php $firstGenre = false; ?>
                            @endforeach

                            <!-- <button class="nav-link text-start mb-2" id="v-pills-ESports-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ESports" type="button" role="tab" aria-controls="v-pills-ESports" aria-selected="false">E Sports</button>
                            <button class="nav-link text-start mb-2" id="v-pills-Horror-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Horror" type="button" role="tab" aria-controls="v-pills-Horror" aria-selected="false">Horror</button>
                            <button class="nav-link text-start mb-2" id="v-pills-Informative-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Informative" type="button" role="tab" aria-controls="v-pills-Informative" aria-selected="false">Informative</button>
                            <button class="nav-link text-start mb-2" id="v-pills-Kids-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Kids" type="button" role="tab" aria-controls="v-pills-Kids" aria-selected="false">Kids</button> -->
                        </div>

                    </div>
                </div>
                <div class="col-md-10" style="position: relative;">
                <div>

                <div class="vertical-line" style="left: 200px" id="verticalLine"></div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active channelParentContainer" id="v-pills-featured" role="tabpanel" aria-labelledby="v-pills-featured-tab">
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </section>
    <!-- Footer section -->

    <footer class="">

        <section class="footer-primary-section text-center">




            <a href="#"><img src="{{ asset('assets/images/sofast-white-background 1.png') }}"></a>



            <div class="questions-contact mt-3">Questions? <a>Call 1800-040-1234<a></div>


            <div class="social-links d-flex justify-content-center align-items-center mt-3">

                <div class=" me-2">FOLLOW US</div>
                <div class="social-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.02687 0.0430908H5.34707C3.45851 0.0430908 2.23808 1.38537 2.23808 3.46268V5.03962H0.548249C0.512306 5.04091 0.476967 5.04929 0.444258 5.06425C0.411548 5.0792 0.382126 5.10045 0.357639 5.12679C0.333151 5.15313 0.31409 5.18402 0.301559 5.21773C0.289027 5.25145 0.283277 5.28731 0.284613 5.32325V7.60728C0.283279 7.64318 0.289046 7.67902 0.301589 7.71268C0.314133 7.74633 0.3332 7.77718 0.3577 7.80344C0.382199 7.8297 0.411646 7.85083 0.444349 7.86568C0.477052 7.88053 0.512351 7.88878 0.548249 7.88994H2.23808V13.6545C2.23565 13.7271 2.26216 13.7979 2.31178 13.851C2.36139 13.9042 2.43004 13.9355 2.50272 13.9381H4.70687C4.77955 13.9355 4.84823 13.9042 4.89785 13.851C4.94746 13.7979 4.97397 13.7271 4.97155 13.6545V7.88896H6.94699C6.98289 7.8878 7.01818 7.87955 7.05089 7.8647C7.08359 7.84985 7.11304 7.82867 7.13754 7.80241C7.16204 7.77614 7.18113 7.7453 7.19368 7.71164C7.20622 7.67799 7.21199 7.6422 7.21065 7.60631V5.32228C7.21049 5.2485 7.18311 5.17736 7.13376 5.12252C7.10996 5.09665 7.08109 5.07595 7.04897 5.06169C7.01684 5.04743 6.98213 5.03991 6.94699 5.03962H4.97155V3.70236C4.93588 3.57256 4.9344 3.43571 4.96728 3.30517C5.00016 3.17463 5.06627 3.05484 5.15917 2.95741C5.25207 2.85999 5.36859 2.78829 5.49742 2.74925C5.62624 2.7102 5.76298 2.70516 5.89433 2.73462H7.02687C7.09937 2.73176 7.16781 2.70029 7.21721 2.64715C7.26661 2.594 7.29297 2.5235 7.29054 2.45099V0.330683C7.29324 0.257996 7.267 0.187216 7.21757 0.133855C7.16814 0.0804937 7.09955 0.048937 7.02687 0.0460777V0.0430908Z" fill="white" />







                    </svg>
                </div>

                <div class="social-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">

                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4073 1.6869C16.7826 1.96618 16.1204 2.1526 15.4418 2.2402C16.1603 1.7977 16.6929 1.1085 16.9399 0.301665C16.2741 0.708525 15.5424 0.995857 14.7777 1.1506C14.4618 0.801862 14.0766 0.522979 13.6466 0.331899C13.2166 0.140819 12.7514 0.0417403 12.2809 0.0410156C11.3639 0.0544289 10.4897 0.431449 9.85052 1.08916C9.21135 1.74687 8.85949 2.63147 8.8723 3.5485C8.86952 3.81695 8.89633 4.08488 8.95221 4.34746C7.5864 4.2742 6.25217 3.90895 5.03948 3.27633C3.8268 2.64372 2.76385 1.75845 1.9223 0.680204C1.61644 1.22063 1.45545 1.83092 1.45492 2.4519C1.45307 3.02394 1.58995 3.58791 1.85382 4.09547C2.11768 4.60302 2.50067 5.03905 2.96996 5.36616C2.42869 5.35085 1.89948 5.20268 1.42895 4.93471V4.97263C1.42202 5.77275 1.68939 6.55109 2.18658 7.17803C2.68376 7.80496 3.38075 8.24266 4.16141 8.41818C3.86997 8.49641 3.5693 8.53503 3.26754 8.53302C3.05061 8.53689 2.83393 8.5168 2.62141 8.47311C2.83236 9.16128 3.25275 9.7665 3.82402 10.2044C4.39528 10.6423 5.08892 10.8911 5.80827 10.916C4.61139 11.8839 3.11905 12.4126 1.57976 12.4141C1.30702 12.4158 1.03444 12.3998 0.763794 12.3661C2.314 13.3962 4.13481 13.9436 5.99604 13.9391C12.2719 13.9391 15.7025 8.59498 15.7025 3.96197C15.7025 3.80817 15.7025 3.66236 15.6905 3.50955C16.3686 3.01118 16.9503 2.39356 17.4073 1.6869Z" fill="white" />
                    </svg>



                </div>
                <div class="social-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">

                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75239 7.97813L7.11866 7.47116C6.98718 7.38598 6.87745 7.27125 6.79826 7.13608C6.71906 7.00091 6.67259 6.84909 6.66258 6.69276C6.67998 6.51895 6.7327 6.35051 6.81748 6.19778C6.90225 6.04505 7.01731 5.91124 7.1556 5.80453C7.58565 5.55199 7.94581 5.19602 8.20336 4.76895C8.46091 4.34189 8.60768 3.85727 8.63039 3.35907C8.65309 2.86088 8.55099 2.36489 8.33335 1.91618C8.1157 1.46746 7.78941 1.0802 7.38412 0.789599H8.47195L9.61464 0.0501208H6.15362C4.95564 0.0211231 3.78384 0.403224 2.83328 1.1329C2.48687 1.43613 2.2079 1.80863 2.01434 2.22634C1.82078 2.64406 1.71697 3.09776 1.70956 3.55807C1.70598 3.93861 1.77945 4.31592 1.92559 4.66729C2.07173 5.01867 2.28749 5.33678 2.55987 5.60254C2.83225 5.8683 3.15561 6.07617 3.51047 6.21362C3.86534 6.35106 4.24435 6.41527 4.62469 6.40232C4.80033 6.40232 4.99293 6.38435 5.18654 6.36639C5.07741 6.58633 5.01781 6.82752 5.01191 7.07297C5.03427 7.53307 5.22127 7.96978 5.53883 8.30347C4.36996 8.3122 3.21982 8.59779 2.18261 9.13681C1.78529 9.35637 1.45178 9.67536 1.21474 10.0625C0.977699 10.4496 0.845234 10.8917 0.830322 11.3454C0.830322 12.6867 2.05885 13.9351 4.60772 13.9351C7.62864 13.9351 9.22742 12.2156 9.22742 10.514C9.20484 10.0036 9.05884 9.50623 8.80195 9.06457C8.54505 8.62291 8.18492 8.25012 7.75239 7.97813ZM5.45103 5.89535C3.93907 5.89535 3.25543 3.88539 3.25543 2.67283C3.23025 2.19555 3.36591 1.72359 3.64067 1.33251C3.7899 1.14898 3.97743 1.0003 4.19017 0.896866C4.4029 0.793431 4.63566 0.73776 4.87217 0.733742C6.32824 0.733742 7.08473 2.76265 7.08473 4.06602C7.11439 4.54711 6.95666 5.02102 6.64461 5.38837C6.32446 5.7036 5.8962 5.8849 5.44704 5.89535H5.45103ZM5.46799 13.1807C3.58877 13.1807 2.37421 12.2565 2.37421 10.9701C2.39236 10.5384 2.549 10.1241 2.82094 9.78833C3.09288 9.45258 3.46568 9.21329 3.88417 9.10587C4.48299 8.92456 5.10391 8.82651 5.72946 8.81446C5.86281 8.81065 5.99626 8.81698 6.12865 8.83341C7.46496 9.81044 8.0438 10.2985 8.0438 11.2286C8.0438 12.3484 7.14562 13.1837 5.46102 13.1837L5.46799 13.1807ZM5.46799 13.1807L12.1885 5.87141V4.06103H11.3192V5.87141H9.56375V6.7756H11.3212V8.59189H12.1905V6.7706H13.9549V5.86739H12.1885L5.46799 13.1807Z" fill="white" />
                    </svg>
                </div>
                <div class="social-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3578 2.069C10.7667 1.43388 10.0513 0.926999 9.25607 0.579868C8.46087 0.232737 7.60279 0.0527262 6.73512 0.0510254C4.95748 0.100679 3.2719 0.852495 2.0472 2.14191C0.822497 3.43132 0.158402 5.15332 0.200268 6.93116C0.197527 8.13258 0.49753 9.31539 1.07254 10.3703L0.145386 13.9361L3.61043 12.983C4.56039 13.5299 5.63699 13.8186 6.73314 13.8203C8.51105 13.7709 10.1969 13.019 11.4217 11.7294C12.6465 10.4397 13.3104 8.71723 13.268 6.93914C13.2806 5.13113 12.5957 3.38791 11.3558 2.07198L11.3578 2.069ZM6.73411 12.6557C5.75614 12.653 4.79847 12.3765 3.96969 11.8573L3.77008 11.7325L1.71422 12.3004L2.26313 10.1896L2.13439 9.97307C1.58734 9.05298 1.30036 8.00159 1.30406 6.93116C1.26891 5.45303 1.82091 4.02123 2.83921 2.94924C3.85752 1.87726 5.25914 1.25248 6.73713 1.21171C7.45798 1.21358 8.17076 1.36342 8.83133 1.65199C9.49191 1.94056 10.0862 2.36169 10.5774 2.88931C11.6079 3.98329 12.1773 5.43229 12.1672 6.93518C12.2023 8.41314 11.6505 9.84483 10.6324 10.9168C9.61427 11.9887 8.21293 12.6137 6.73512 12.6547L6.73411 12.6557ZM9.71313 8.37229C9.55046 8.28646 8.74806 7.87326 8.59737 7.81238C8.56846 7.79122 8.53534 7.7766 8.50024 7.76944C8.46514 7.76228 8.42889 7.76281 8.39401 7.77096C8.35913 7.77911 8.32642 7.79467 8.29813 7.81664C8.26984 7.83862 8.24666 7.86649 8.23012 7.89827C8.12134 8.06992 7.80897 8.4581 7.71316 8.57287C7.69367 8.60007 7.66873 8.62294 7.63994 8.64C7.61116 8.65706 7.57917 8.66794 7.54596 8.67198C7.51274 8.67601 7.47903 8.67312 7.447 8.66345C7.41497 8.65378 7.3853 8.63756 7.35987 8.61582C6.87486 8.41168 6.43011 8.1227 6.0465 7.76249C5.68781 7.41162 5.3819 7.01058 5.13833 6.5719C5.10534 6.51467 5.09445 6.44736 5.10769 6.38264C5.12092 6.31792 5.15739 6.26029 5.2102 6.22061C5.36046 6.03493 5.49688 5.83847 5.61838 5.63281C5.63959 5.58528 5.64937 5.53343 5.64695 5.48144C5.64452 5.42945 5.62994 5.37877 5.6044 5.33342C5.56348 5.24759 5.23714 4.40131 5.1054 4.057C4.97367 3.71269 4.83793 3.76753 4.73813 3.75755C4.63833 3.74757 4.53355 3.75158 4.42477 3.75158C4.34103 3.75425 4.25884 3.77488 4.18377 3.81207C4.10869 3.84926 4.04249 3.90215 3.98964 3.96715C3.80274 4.15522 3.65576 4.37911 3.55749 4.62537C3.45923 4.87164 3.41171 5.13517 3.41779 5.40024C3.46832 6.04426 3.69938 6.661 4.08445 7.17968C4.7746 8.27274 5.73773 9.16703 6.87884 9.77443C7.18212 9.91268 7.49298 10.0337 7.80995 10.1367C8.142 10.2425 8.49481 10.2658 8.83788 10.2046C9.06872 10.1533 9.2862 10.054 9.47618 9.91319C9.66617 9.77238 9.82443 9.59315 9.94067 9.38721C10.0491 9.1293 10.0837 8.84632 10.0405 8.56989C9.95273 8.48018 9.8455 8.41187 9.72711 8.37028L9.71313 8.37229Z" fill="white" />
                    </svg>
                </div>
            </div>
            <div class="questions-contact mt-3"><a style="color:#FFF" href="#">Privacy Policy</a> | <a style="color:#FFF" href="#">Terms of service</a></div>
        </section>
        <section class="footer-end-section text-white py-3">
            <div class="container text-center">
                <div>Copyright @ {{ date('Y') }} Videospire. All Right Reserved</div>
            </div>
        </section>
    </footer>




    <script>

        // helper function
        function calculateTimeDifference(startTimeStamp, endTimeStamp) {
            const startDate = new Date(
                parseInt(startTimeStamp.slice(0, 4)),
                parseInt(startTimeStamp.slice(4, 6)) - 1,
                parseInt(startTimeStamp.slice(6, 8)),
                parseInt(startTimeStamp.slice(8, 10)),
                parseInt(startTimeStamp.slice(10, 12)),
                parseInt(startTimeStamp.slice(12, 14))
            );

            const endDate = new Date(
                parseInt(endTimeStamp.slice(0, 4)),
                parseInt(endTimeStamp.slice(4, 6)) - 1,
                parseInt(endTimeStamp.slice(6, 8)),
                parseInt(endTimeStamp.slice(8, 10)),
                parseInt(endTimeStamp.slice(10, 12)),
                parseInt(endTimeStamp.slice(12, 14))
            );

            const timeDifferenceMillis = endDate - startDate;
            const timeDifferenceMinutes = timeDifferenceMillis / (1000 * 60);

            return timeDifferenceMinutes;
        }

        async function getXmlData(url) {

            try {
                const response = await fetch(url);
                const xmlString = await response.text();

                const parser = new DOMParser();
                const xmlDoc = parser.parseFromString(xmlString, 'text/xml');

                // Now you can work with the xmlDoc object
                const channels = Array.from(xmlDoc.getElementsByTagName('channel'));

                const returnObject = {}
                channels.forEach(channel => {
                    const channelId =  channel.getAttribute("id");
                    const programmeElements = Array.from(xmlDoc.getElementsByTagName('programme'));

                    // add channel
                    returnObject.channel = channelId;
                    returnObject.programs = programmeElements;
                });

                return returnObject;
            } catch (error) {
                console.error('Error fetching XML data:', error);
                throw error;
            }

        }


    function convertToFormattedUTCDate(inputValue) {
        const year = parseInt(inputValue.substr(0, 4));
        const month = parseInt(inputValue.substr(4, 2)) - 1; // Months are 0-based (January is 0)
        const day = parseInt(inputValue.substr(6, 2));
        const hour = parseInt(inputValue.substr(8, 2));
        const minute = parseInt(inputValue.substr(10, 2));
        const second = parseInt(inputValue.substr(12, 2));
        const utcDate = new Date(Date.UTC(year, month, day, hour, minute, second));

        const options = {
            year: 'numeric',
            month: 'numeric',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric',
            hour12: true
        };

        const formattedDate = new Date().toLocaleString(undefined, options);
        return formattedDate
    }

        const data = <?php echo json_encode($data) ?>;
        const dataArray = [];

        let currentGenre = document.getElementById("selected_genre").value;

        // genre list
        const genreList = [];
        for (const key in data) {
            genreList.push(key);
            if (data.hasOwnProperty(key)) {
                dataArray.push(data[key]);
            }
        }

        function searchGenre(element) {

            const genreParent = document.querySelector(".genreParent");
            function searchElements(array, searchTerm) {
                const lowerSearchTerm = searchTerm.toLowerCase();
                // console.log(array.filter(item => item.toLowerCase().includes(lowerSearchTerm)));
                return array.filter(item => item.toLowerCase().includes(lowerSearchTerm));
            }

            function resetDefault(){

                genreParent.innerHTML = "";
                genreList.forEach(el => {
                        genreParent.innerHTML += `<button onclick="changeGenre(this)" data-genre="${el}" class="nav-link text-start mb-2 ${el == currentGenre ? 'active' : '' }"  id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-featured" type="button" role="tab" aria-controls="v-pills-featured" aria-selected="false">
                                ${el}
                        </button>`;
                })
            }

            if(element.value.trim() != "")
            {
                // genreParent.innerHTML = "";
                const foundElements =  searchElements(genreList, element.value);

                if(foundElements.length) {

                    genreParent.innerHTML = "";
                    foundElements.forEach(el => {
                        genreParent.innerHTML += `<button onclick="changeGenre(this)" data-genre="${el}" class="nav-link text-start mb-2 ${el == currentGenre ? 'active' : '' }"  id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-featured" type="button" role="tab" aria-controls="v-pills-featured" aria-selected="false">
                                ${el}
                        </button>`;

                    })
                } else {
                    genreParent.innerHTML = "";
                    const newDiv = document.createElement("div");
                    // Set the content and style using inline CSS
                    newDiv.textContent = "No genre found";
                    newDiv.style.color = "white";
                    newDiv.style.padding = "10px";
                    genreParent.appendChild(newDiv)
                }

            } else {
                resetDefault();
            }
        }

        function changeGenre(e){
            const genre = e.getAttribute("data-genre")
            currentGenre = genre;
            setBanner(data[genre]);
            setChannels(genre);
        }

        function giveTimeRow(){
            const timeBlocks = generateTimeBlocks(2);

            return ` <div class="row timeRow">
                                <div class="col-md-9">
                                    <div class="d-flex justify-content-between">
                                        <div class="text-gray-14">${timeBlocks[0]}</div>
                                        <div class="text-gray-14">${timeBlocks[1]}</div>
                                        <div class="text-gray-14">${timeBlocks[2]}</div>
                                        <div class="text-gray-14">${timeBlocks[3]}</div>
                                        <div class="text-gray-14">${timeBlocks[4]}</div>
                                    </div>
                                </div>
                            </div>`;
        }

        function giveChannelRow(imagePath, elements){

            const randomNumber = generateRandomNumber();
            console.log(randomNumber);

            return `<div class="channelRow row mt-3">
                <div class="col-md-3 row-padding-imp">
                    <div style="gap:3px" class="d-flex fix-img-text-content">
                    <div class="static-div d-flex">
                        <div style="width: 25%;" class="d-flex align-items-center bg-black text-gray-14 p-3">001</div>
                        <p class="large-arrow left-arrow" onclick="leftSlide('scroll${randomNumber}')" >←</p>
                        <div id="logoImageContainer" class="d-flex justify-content-center align-items-center">
                            <img class='height-100 channel-logo' src=${imagePath}>
                        </div>
                        <p class="large-arrow right-arrow"  onclick="rightSlide('scroll${randomNumber}')">→</p>
                    </div>
                    <div id="scroll${randomNumber}" class="d-flex scrollable_parent">
                        ${elements}
                    </div>
                    </div>
                </div>
            </div>`;
        }

        function generateRandomNumber() {
            const min = 1000000000; // Minimum 10-digit number
            const max = 9999999999; // Maximum 10-digit number
            const randomNum = Math.floor(Math.random() * (max - min + 1)) + min;
            return randomNum;
        }


        function leftSlide(elementId){
            const element = document.getElementById(elementId);
            if(element.style.left == "0px") return;
            element.style.left = parseInt(element.style.left || 0) + 200 + 'px';
        }

        function rightSlide(elementId) {
            const element = document.getElementById(elementId);
            element.style.left = parseInt(element.style.left || 0) - 200 + 'px'; // Adjust the left value as needed
        }

        function parseTimeRange(start, stop) {
            const startDateString = start.split(' ')[0];
            const startTimeString = start.split(' ')[1];

            const stopDateString = stop.split(' ')[0];
            const stopTimeString = stop.split(' ')[1];

            // Extract the time zone offset from the input strings
            const startTimezoneOffset = parseInt(start.split(' ')[2], 10);
            const stopTimezoneOffset = parseInt(stop.split(' ')[2], 10);

            // Calculate the time zone offset in milliseconds
            const startTimezoneOffsetMs = startTimezoneOffset * 60 * 1000;
            const stopTimezoneOffsetMs = stopTimezoneOffset * 60 * 1000;

            // Create Date objects with the calculated time zone offset
            const startDateTime = new Date(`${startDateString}T${startTimeString}`);
            const stopDateTime = new Date(`${stopDateString}T${stopTimeString}`);

            // Apply the time zone offset to the Date objects
            startDateTime.setTime(startDateTime.getTime() - startTimezoneOffsetMs);
            stopDateTime.setTime(stopDateTime.getTime() - stopTimezoneOffsetMs);

            return [startDateTime, stopDateTime];
    }

        function setBanner(currentData) {

            if(currentData[0]['HLS']){
                const videoURL = currentData[0]['HLS'];
                player.src(videoURL);
            }

            const ChannelNameEl = document.getElementById("channel_name");
            ChannelNameEl.textContent = currentData[0]['CHANNEL NAME'];

            const DescriptionEl = document.getElementById("description");
            DescriptionEl.textContent = ` ${currentData[0]['DESCRIPTION']}`;

            const LangEl = document.getElementById("language");
            LangEl.textContent = ` ${currentData[0]['LANGUAGE']}`;

            const genreEl = document.getElementById("genre");
            genreEl.textContent = ` ${currentData[0]['GENRE']}`;

            const RatingEl = document.getElementById("rating");
            RatingEl.textContent = ` ${currentData[0]['RATING']}`;

            const HoursEL = document.getElementById("hours");
            HoursEL.textContent = ` ${currentData[0]['HOURS']}`;

            const RefreshEl = document.getElementById("refreshing");
            RefreshEl.textContent = ` ${currentData[0]['REFRESHING']}`;

        }



        function extractTimestampComponents(timestamp) {
            const year = parseInt(timestamp.slice(0, 4), 10);
            const month = parseInt(timestamp.slice(4, 6), 10);
            const day = parseInt(timestamp.slice(6, 8), 10);
            const hour = parseInt(timestamp.slice(8, 10), 10);
            const minute = parseInt(timestamp.slice(10, 12), 10);
            const second = parseInt(timestamp.slice(12, 14), 10);

            const ampm  = hour < 12 ? 'AM': 'PM'

            return {
                year,
                month,
                day,
                hour,
                minute,
                second,
                ampm
            };
    }

    function calculateTimeDifferenceInHoursAndMinutes(startTimestamp, stopTimestamp) {
        const startTimeComponents = extractTimestampComponents(startTimestamp);
        const stopTimeComponents = extractTimestampComponents(stopTimestamp);

        const startDateTime = new Date(
            startTimeComponents.year,
            startTimeComponents.month - 1,
            startTimeComponents.day,
            startTimeComponents.hour,
            startTimeComponents.minute,
            startTimeComponents.second
        );

        const stopDateTime = new Date(
            stopTimeComponents.year,
            stopTimeComponents.month - 1,
            stopTimeComponents.day,
            stopTimeComponents.hour,
            stopTimeComponents.minute,
            stopTimeComponents.second
        );

        const timeDifferenceMillis = stopDateTime - startDateTime;
        const hours = Math.floor(timeDifferenceMillis / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifferenceMillis % (1000 * 60 * 60)) / (1000 * 60));

        return {
            hours,
            minutes
        };
    }


    function generateTimeBlocks(hoursAhead) {
        const timeBlocks = [];
        const intervalMinutes = 30;
        const now = new Date();
        let blockCount = 0;

        for (let i = 0; blockCount < 5; i++) {
            const currentTime = new Date(now.getTime() + i * intervalMinutes * 60 * 1000);

            const hours = currentTime.getHours();
            const minutes = currentTime.getMinutes();
            const ampm = hours >= 12 ? 'pm' : 'am';
            const formattedHours = (hours % 12 === 0 ? 12 : hours % 12).toString().padStart(2, '0');
            const formattedMinutes = minutes.toString().padStart(2, '0');

            timeBlocks.push(`${formattedHours}:${formattedMinutes} ${ampm}`);
            blockCount++;
        }

        return timeBlocks;
    }

    function setChannels(genre){

            const channelParentContainer = document.getElementsByClassName("channelParentContainer")[0];
            channelParentContainer.innerHTML = "";
            channelParentContainer.innerHTML += giveTimeRow();

            const currentData = data[currentGenre];

            currentData.forEach(async element => {
                const xmlUrl = element['EPG'];
                const { channel, programs } = await getXmlData(xmlUrl);

                let programDivs = '';
                programs.forEach(program => {
                    const startTimeStamp =  program.getAttribute("start");
                    const stopTimeStamp =  program.getAttribute("stop");

                    const durationMinutes = (calculateTimeDifference(startTimeStamp, stopTimeStamp));

                    // Get the inner width of the window
                    const windowWidth = window.innerWidth;


                    const startCompo =  extractTimestampComponents(startTimeStamp);
                    const endCompo = extractTimestampComponents(stopTimeStamp);

                    // Calculate the width as a percentage of the window's inner width
                    const widthPercentage = 66; // Adjust as needed
                    const widthPixels = (durationMinutes / 120) * (widthPercentage / 100) * windowWidth;

                    // title
                    const title = program.getElementsByTagName("title")[0].textContent;

                    // const description = program.getElementsByTagName("desc")[0]
                    const description = program.getElementsByTagName("desc")[0].textContent;

                    let myTimeComponents = [startCompo.hour, startCompo.minute, endCompo.hour, endCompo.minute]

                    for (let i = 0; i < myTimeComponents.length; i++) {

                        if (myTimeComponents[i].toString().length == 1) {
                            myTimeComponents[i] = "0" + myTimeComponents[i];
                    }
                    }

                    programDivs += `<div style='width:${widthPixels}px' class="bg-gray-2 p-1">
                    <div class="text-white-18 mt-2 truncate-text">${title}</div>
                    <div class="text-white-14 mt-2 truncate-text">${description}</div>
                    <div class="text-gray-14">${myTimeComponents[0]}:${myTimeComponents[1]} - ${myTimeComponents[2]}:${myTimeComponents[3]}</div>
                    </div>`;

                });

                channelParentContainer.innerHTML += giveChannelRow(element['LOGO COLOR'], programDivs);
                // console.log(programs.getAttribute("start"));
            });





            // currentData.forEach(el => {
            //     channelParentContainer.innerHTML += giveChannelRow(el['LOGO COLOR']);
            // });
        }

        function moveLine() {
            const verticalLine = document.getElementById("verticalLine");
            const currentTime = new Date(); // Get the current time
            const currentMinutes = currentTime.getHours() * 60 + currentTime.getMinutes();
            const totalMinutes = 120; // Total duration of the time line

            // console.log(currentTime.getHours(), currentTime.getMinutes(), currentTime.getSeconds());

            const containerWidth = verticalLine.parentElement.offsetWidth; // Get the container's width

            let linePosition = (currentMinutes / totalMinutes) * containerWidth; // Calculate position in pixels

            // Handle cases where linePosition exceeds container width
            if (linePosition > containerWidth) {
                linePosition = containerWidth;
            }

            verticalLine.style.left += linePosition + "px"; // Set the position
        }

        var player = videojs('my-video');
        setInterval(moveLine, 1000);
        setBanner(dataArray[0]);
        setChannels(currentGenre);

        document.addEventListener("DOMContentLoaded", function () {


            const playButton = document.querySelector(".vjs-big-play-button");
            playButton.style.position = "absolute";
            playButton.style.top = "50%";
            playButton.style.left = "50%";
            playButton.style.transform = "translate(-50%, -50%)";
        });

    </script>
</body>

</html>
