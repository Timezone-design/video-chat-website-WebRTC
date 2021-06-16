<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- x-icon -->
    <link rel="shortcut icon" href="{{url('images/x-icon.png')}}" type="image/x-icon">

    <!-- Other css -->
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.cs')}}s">
    <link rel="stylesheet" href="{{url('css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{url('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <title>TuruLav</title>
    <style>
        .styled_navigation nav > div:first-of-type{
            display: none;
        }

        .styled_navigation nav > div:last-of-type > div:first-of-type {
            display: none;
        }

        .styled_navigation nav > div:last-of-type > div:last-of-type {
            display: flex;
            justify-content: center;
            margin:100px;
        }

        .styled_navigation nav > div:last-of-type > div:last-of-type > span {
            display: flex;
            align-items: center;
        }

        .styled_navigation nav > div:last-of-type > div:last-of-type > span > a,
        .styled_navigation nav > div:last-of-type > div:last-of-type > span > span
         {
            margin-left: 10px;
            margin-right: 10px;
        }

        .styled_navigation nav > div:last-of-type > div:last-of-type > span * {
            color: white;
            background-color: #210053 !important;
        }

        .styled_navigation nav > div:last-of-type > div:last-of-type > span > a {
            padding: 20px !important;
            line-height: 58% !important;
            border-radius: 50%;
            border: none !important;
        }

        .styled_navigation nav > div:last-of-type > div:last-of-type > span > a:hover {
            background: #df314d !important;
        }

        .styled_navigation nav > div:last-of-type > div:last-of-type > span > span[aria-current="page"] {
            padding: 20px !important;
            line-height: 58% !important;
            border-radius: 50%;
        }

        .styled_navigation nav > div:last-of-type > div:last-of-type > span > span[aria-current="page"] span {
            padding: 0px !important;
            line-height: 58% !important;
            border: none !important;
            background: #df314d !important;

        }

        .styled_navigation nav > div:last-of-type > div:last-of-type > span > span[aria-current="page"] {
            background: #df314d !important;
        }

        .w-5 .h-5 svg{
            width:15px;
        }
        .styled_navigation nav > div:last-of-type > div:last-of-type > span > span[aria-disabled="true"] {
            line-height: 58% !important;
            padding: 20px !important;
            border-radius: 50%;
        }
        .styled_navigation nav > div:last-of-type > div:last-of-type > span > span[aria-disabled="true"] > span{
           padding: 0px !important;
           border: transparent !important;
        }


        .styled_navigation nav > div:last-of-type > div:last-of-type > span svg {
            width: 20px;
            background: transparent !important;
        }
        /* .styled_navigation nav > div:last-of-type > div:last-of-type > span svg {
            width:20px;
        } */

    </style>
</head>

<body>
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- ==========Header Section Starts Here========== -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="left">
                        <li>
                            <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i> Beverley, New York 224 USA
                        </li>
                    </ul>
                    <ul class="social-icons d-flex align-items-center">
                        <li>
                            <p>
                                Find us on :
                            </p>
                        </li>
                        <li>
                            <a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                        </li>
                        <li>
                            <a href="#" class="skype"><i class="icofont-skype"></i></a>
                        </li>
                        <li>
                            <a href="#" class="rss"><i class="icofont-rss-feed"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="{{route('welcome')}}">
                            <img src="{{url('images/logo/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>

                            <li>
                                <a href="#0">Features</a>
                                <ul class="submenu">
                                    <li><a href="{{route('members')}}" class="active">All Members</a></li>
                                    <li><a href="{{route('profile')}}">Member Profile</a></li>
                                    <li><a href="{{route('pricing-plan')}}">Pricing Plan</a></li>
                                    <li><a href="{{route('404')}}">404 Page</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="{{route('active-group')}}">Community</a>
                            </li>
                            <li>
                                <a href="#0">Blog</a>
                                <ul class="submenu">
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    <li><a href="{{route('blog-single')}}">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                        @auth
                            <form action="{{ route('logout') }}" method='post'>
                                @csrf
                                <button type="submit" style="border: none; padding:10px; display: inline-block; color: #df314d;
    border-radius: 2px 0 0 2px;"><i class="icofont-user"></i>LOG OUT</button>

                            </form>
                            @else
                            <a href="{{route('login')}}" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                        <a href="{{route('register')}}" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>
                            @endauth
                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="icofont-info-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->

    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1" style="background:url({{url('images/page-header.jpg')}})">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>TuruLav Dating Members</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li class="active">Members</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========Member page Section Start Here========== -->
    <section class="member-page-section">
        <div class="container">
            <div class="member-filter">
                <div class="member-filter-inner">
                    <form action="/" class="filter-form">
                        <div class="gender">
                            <div class="custom-select right w-100">
                                <select name="gender" id="gender" class="">
                                    <option value="0">I am a </option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="person">
                            <div class="custom-select right w-100">
                                <select name="gender" id="gender-two" class="">
                                    <option value="0">Looking for</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="age">
                            <div class="right d-flex justify-content-between w-100">
                                <div class="custom-select">
                                    <select name="age-start" id="age">
                                        <option value="1">18</option>
                                        <option value="2">19</option>
                                        <option value="3">20</option>
                                        <option value="4">21</option>
                                        <option value="5">22</option>
                                        <option value="6">23</option>
                                        <option value="7">24</option>
                                        <option value="8">25</option>
                                        <option value="9">26</option>
                                        <option value="10">27</option>
                                        <option value="11">28</option>
                                        <option value="13">29</option>
                                        <option value="14">30</option>
                                    </select>
                                </div>

                                <div class="custom-select">
                                    <select name="age-end" id="age-two">
                                        <option value="1">36</option>
                                        <option value="2">19</option>
                                        <option value="3">20</option>
                                        <option value="4">21</option>
                                        <option value="5">22</option>
                                        <option value="6">23</option>
                                        <option value="7">24</option>
                                        <option value="8">25</option>
                                        <option value="9">26</option>
                                        <option value="10">27</option>
                                        <option value="11">28</option>
                                        <option value="13">29</option>
                                        <option value="14">30</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="city">
                            <div class="custom-select right w-100">
                                <select name="country" id="country" class="">
                                    <option value="0">Choose Your Country
                                    </option>
                                    <option value="1">USA</option>
                                    <option value="2">UK</option>
                                    <option value="3">Spain</option>
                                    <option value="4">Brazil</option>
                                    <option value="5">France</option>
                                    <option value="6">Newzeland</option>
                                    <option value="7">Australia</option>
                                    <option value="8">Bangladesh</option>
                                    <option value="9">Turki</option>
                                    <option value="10">Chine</option>
                                    <option value="11">India</option>
                                    <option value="12">Canada</option>
                                </select>
                            </div>
                        </div>
                        <button class="lab-btn" type="submit">Search now <i class="icofont-search-2"></i></button>
                    </form>
                </div>
            </div>
            <div class="member-wrapper">
                <ul class="member-info mb-4">
                    <li class="all-member">
                        <p>All Members </p>
                        <p>20 365 587</p>
                    </li>
                    <li class="member-cat">
                        <div class="custom-select right w-100">
                            <select name="member" id="member-cat" class="">
                                <option value="0">Newest Registerd</option>
                                <option value="1">Oldest</option>
                                <option value="2">Popular</option>
                                <option value="3">Most Active</option>
                            </select>
                        </div>
                    </li>
                </ul>
                <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
                    @foreach($members as $member)
                        <div class="col">
                            <div class="lab-item member-item style-1 style-2">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{url('images/member/01.jpg')}}" alt="member-img">
                                    </div>
                                    <div class="lab-content">
                                        {{-- <form method ="POST" action="{{route(videochat)}}">
                                            <input type = "text" name="members" value="" --}}
                                        <h6><a href="{{route('videochat')}}">{{ $member->name }}</a></h6>
                                        <p>{{ $member->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="styled_navigation">
                    {{ $members->onEachSide(1)->links() }}
                </div>
                <!-- <div class="paginations">
                    <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                        <li>
                            <a href="#"><i class="icofont-rounded-double-left"></i></a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="d-none d-sm-block">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">...</a>
                        </li>
                        <li class="d-none d-sm-block">
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#"><i class="icofont-rounded-double-right"></i></a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </section>
    <!-- ==========Member page Section Ends Here========== -->

    <!-- ================ App Section start Here =============== -->
    <section class="app-section bg-theme">
        <div class="container">
            <div class="section-wrapper padding-tb">
                <div class="app-content">
                    <h4>Download App Our Turulav</h4>
                    <h2>Easy Connect to Everyone</h2>
                    <p>You find us, finally, and you are already in love. More than 5.000.000 around
                        the world already shared the same experience andng ares uses our system
                        Joining us today just got easier!</p>
                    <ul class="app-download d-flex flex-wrap">
                        <li><a href="#" class="d-flex flex-wrap align-items-center">
                                <div class="app-thumb">
                                    <img src="{{url('images/app/apple.png')}}" alt="apple">
                                </div>
                                <div class="app-content">
                                    <p>Available on the</p>
                                    <h4>App Store</h4>
                                </div>
                            </a></li>
                        <li class="d-inline-block">
                            <a href="#" class="d-flex flex-wrap align-items-center">
                                <div class="app-thumb">
                                    <img src="{{url('images/app/playstore.png')}}" alt="playstore">
                                </div>
                                <div class="app-content">
                                    <p>Available on the</p>
                                    <h4>Google Play</h4>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="mobile-app">
                    <img src="{{url('images/app/mobile-view.png')}}" alt="mbl-view">
                </div>
            </div>
        </div>
    </section>
    <!-- ================ App Section end Here =============== -->



    <!-- ================ footer Section start Here =============== -->
    <footer class="footer-section">
        <div class="footer-top">
            <div class="container">
                <div class="row g-3 justify-content-center g-lg-0">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('images/footer/icons/01.png')}}" alt="Phone-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Phone Number : +88019 339 702 520</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('images/footer/icons/02.png')}}" alt="email-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Email : admin@turulav.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('images/footer/icons/03.png')}}" alt="location-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Address : 30 North West New York 240</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle padding-tb" style="background-image: url({{url('images/footer/bg.png')}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-lg-0">
                                <div class="fm-item-title">
                                    <h4>About TuruLav</h4>
                                </div>
                                <div class="fm-item-content">
                                    <p class="mb-4">Energistically coordinate highly efficient procesr
                                        partnerships befor revolutionar growth strategie
                                        improvement viaing awesome</p>
                                    <img src="{{url('images/footer/about.jpg')}}" alt="about-image" class="footer-abt-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-lg-0">
                                <div class="fm-item-title">
                                    <h4>our Recent news</h4>
                                </div>
                                <div class="fm-item-content">
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#"> <img src="{{url('images/footer/01.jpg')}}"
                                                        alt="footer-widget-img"></a>
                                            </div>
                                            <div class="lab-content">
                                                <h6><a href="{{route('blog-single')}}">Enable Seamin Matera Forin And Our
                                                        Orthonal Create Vortals.</a></h6>
                                                <p>July 23, 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#"><img src="{{url('images/footer/02.jpg')}}"
                                                        alt="footer-widget-img"></a>
                                            </div>
                                            <div class="lab-content">
                                                <h6><a href="{{route('blog-single')}}">Dynamca Network Otuitive Catays For
                                                        Plagiarize Mindshare After</a></h6>
                                                <p>July 23, 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#"><img src="{{url('images/footer/03.jpg')}}"
                                                        alt="footer-widget-img"></a>
                                            </div>
                                            <div class="lab-content">
                                                <h6><a href="{{route('blog-single')}}">Dynamca Network Otuitive Catays For
                                                        Plagiarize Mindshare After</a></h6>
                                                <p>July 23, 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item-3 mb-lg-0">
                                <div class="fm-item-title">
                                    <h4>Our Newsletter Signup</h4>
                                </div>
                                <div class="fm-item-content">
                                    <p>By subscribing to our mailing list you will always
                                        be update with the latest news from us.</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter email">
                                        </div>
                                        <button type="submit" class="lab-btn">Send Massage <i
                                                class="icofont-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content text-center">
                            <p>&copy;2021 <a href="{{route('welcome')}}">TuruLav</a> -Best For Dating HTML Template.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ footer Section end Here =============== -->



    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->




    <!-- All Scripts -->
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('js/waypoints.min.js') }}"></script>
    <script src="{{ url('js/swiper.min.js') }}"></script>
    <script src="{{ url('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('js/wow.min.js') }}"></script>
    <script src="{{ url('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('js/functions.js')}}"></script>
    <script src="{{ url('js/custom.js')}}"></script>

</body>

</html>
