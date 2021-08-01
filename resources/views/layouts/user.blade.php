<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div>
    <!-- start Header -->
    <header>
        <nav class="navbar navbar-light bg-light justify-content-between">
            <div class="container">

                <a class="navbar-brand"><i class="fab fa-stack-overflow" style="color: #f48024;"></i> stack<span
                        style="font-weight: bold;">overflow</span></a>
                <a href="">About</a>
                <a href="">Products</a>
                <a href="">For Teams</a>
                <form class="form-inline" style="width: 60%;">
                    </i><input class="form-control mr-sm-2 empty" type="search" placeholder=" &#xf002;  Search"
                               aria-label="Search">
                    <button class="btn btn-custom" type="submit" style="margin-right: 5px;">Log In</button>
                    <button class="btn btn-primary" type="submit">Sign up</button>
                </form>
            </div>
        </nav>
    </header>
    <!-- End Header -->
    <!-- Stat Content -->
    <div class=" main_content">
        <!-- start Aside -->

        <div class="aside">
            <ul>

                <li class="normal1 normal"><a href="">Home</a></li>
                <li class="read">Public</li>
                <li class="normal1"><a href=""><i class="fas fa-globe-americas"></i> Question</a></li>
                <li class="inside normal1"><a href="">Tags</a></li>
                <li class="inside normal1"><a href="">Users</a></li>
                <li class="read">COLLECTIVES <i class="fas fa-info-circle"></i></li>
                <li class="normal normal1"><a href=""><i class="fas fa-certificate" style="color: #f48024;"></i> Explore
                        Collectives</a></li>
                <li class="read">FIND A JOB</li>
                <li class="inside normal1"><a href="">Jobs</a></li>
                <li class="inside normal1"><a href="">Companies</a></li>
                <li class="read">TERMS</li>
                <li>
                    <div>
                        <p><span style="font-weight: bold;">Stack Overflow for Teams</span> – Collaborate and share
                            knowledge with a private group.</p>
                        <img src="{{asset('assets/front/images/teams-illo-free-sidebar-promo.svg')}}" alt="">
                        <button class="btn btn-primary">Create a free Team</button>
                        <span>what is Team?</span>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End Aside -->

        <!--Start Main  -->
    @yield('Content')

    <!--End Main  -->
        <!--Start Notification -->

        <div class="notfication">
            <div class="">
                <h5><i class="far fa-comment-alt"></i> Notification</h5>
                <ul>
                    <li>Mohammed Comment in Your Post</li>
                    <li>Ali Comment in Your Post</li>
                    <li>Your Comment has three votes</li>
                    <li>You Make votes in Question</li>
                    <li>Mohammed Comment in Your Post</li>
                </ul>
            </div>
        </div>
        <!--End Notification -->

        <div class="clearFix"></div>
    </div>
    <!-- End Content -->

    <div class="clearFix"></div>
    <!-- Start Footer -->
    <footer class="page-footer font-small bg-dark" style="color: #fff;">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021/7/4 Copyright:
            <span style="color: #f48024;"> Mohammed Obaid</span>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Start Footer -->
</div>
</body>
<script src="{{ asset('assets/front/js/jquery-3.6.0.min.js') }}"></script>
<!-- <script type="text/javascript" src="js/jquery-2.1.4.js"></script> -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="{{ asset('assets/front/js/main.js') }}"></script>
</html>
