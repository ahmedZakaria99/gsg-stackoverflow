<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/question-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 10:18:23 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Disilab - Social Questions and Answers HTML Template</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset('assets/front/images/favicon.png') }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/jquery-te-1.4.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/upvotejs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/selectize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <!-- end inject -->
</head>
<body>
<section class="question-area pt-40px pb-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="subheader">
                    <div class="subheader-title">
                        <h3 class="fs-16">Edit Your Answer</h3>
                    </div><!-- end subheader-title -->
                </div><!-- end subheader -->
                <div class="post-form">
                    <form action="{{route('answers.update',$answer->id)}}" method="post" class="pt-3">
                        @csrf
                        @method('put')
                        <input type="hidden" name="question_id" value="{{ $answer->question_id }}">
                        <div class="input-box">
                            <label class="fs-14 text-black lh-20 fw-medium">Body</label>
                            <div class="form-group">
                                 <textarea class="form-control form--control form-control-sm fs-13 user-text-editor"
                                           name="content" rows="6"
                                           placeholder="Your answer here...">{{$answer->content}}</textarea>
                            </div>
                        </div>
                        <button class="btn theme-btn theme-btn-sm" type="submit">Update Your Answer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('assets/front/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery-te-1.4.0.min.js') }}"></script>
<script src="{{ asset('assets/front/js/upvote.vanilla.js') }}"></script>
<script src="{{ asset('assets/front/js/upvote-script.js') }}"></script>
<script src="{{ asset('assets/front/js/selectize.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.multi-file.min.js') }}"></script>
<script src="{{ asset('assets/front/js/main.js') }}"></script>
</body>
