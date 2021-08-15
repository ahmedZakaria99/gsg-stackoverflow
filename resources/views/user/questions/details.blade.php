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

<!-- start cssload-loader -->
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
================================
         START QUESTION AREA
================================= -->
<section class="question-area pt-40px pb-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="question-main-bar mb-50px">
                    <div class="question-highlight">
                        <div class="media media-card shadow-none rounded-0 mb-0 bg-transparent p-0">
                            <div class="media-body">
                                <h5 class="fs-20"><a href="#">{{ $question->title }}</a></h5>
                                <div class="meta d-flex flex-wrap align-items-center fs-13 lh-20 py-1">
                                    <div class="pr-3">
                                        <span>Asked</span>
                                        <span class="text-black">{{$question->created_at->diffForHumans()}}</span>
                                    </div>
                                    <div class="pr-3">
                                        <span class="pr-1">Active</span>
                                        <a href="#" class="text-black">19 days ago</a>
                                    </div>
                                    <div class="pr-3">
                                        <span class="pr-1">Viewed</span>
                                        <span class="text-black">89 times</span>
                                    </div>
                                </div>
                                <div class="tags">
                                    @foreach($question->tags as $tag)
                                        <a href="#" class="tag-link">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div><!-- end media -->
                    </div><!-- end question-highlight -->
                    <div class="question d-flex">
                        <div class="votes votes-styled w-auto">
                            <div id="vote" class="upvotejs">
                                <a class="upvote upvote-on" data-toggle="tooltip" data-placement="right"
                                   title="This question is useful"></a>
                                <span class="count">1</span>
                                <a class="downvote" data-toggle="tooltip" data-placement="right"
                                   title="This question is not useful"></a>
                                <a class="star" data-toggle="tooltip" data-placement="right"
                                   title="Bookmark this question."></a>
                            </div>
                        </div><!-- end votes -->
                        <div class="question-post-body-wrap flex-grow-1">
                            <div class="question-post-body">
                                <p class="code-block custom-scrollbar-styled"> {{ $question->description }} </p>
                            </div><!-- end question-post-body -->
                            <div class="question-post-user-action">
                                <div class="post-menu">
                                    <a href="#" class="btn">Edit</a>
                                </div><!-- end post-menu -->
                                <div class="media media-card user-media owner align-items-center">
                                    <a href="user-profile.html" class="media-img d-block">
                                        <img src="images/img3.jpg" alt="avatar">
                                    </a>
                                    <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <h5 class="pb-1"><a href="user-profile.html">{{ $question->user->name }}</a>
                                            </h5>
                                            <div class="stats fs-12 d-flex align-items-center lh-18">
                                                <span class="text-black pr-2">224,110</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball gold"></span>16</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball silver"></span>93</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball"></span>136</span>
                                            </div>
                                        </div>
                                        <small class="meta d-block text-right">
                                            <span class="text-black d-block lh-18">asked</span>
                                            <span
                                                class="d-block lh-18 fs-12">{{$question->created_at->diffForHumans()}}</span>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card user-media align-items-center">
                                    <a href="user-profile.html" class="media-img d-block">
                                        <img src="images/img4.jpg" alt="avatar">
                                    </a>
                                    <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <h5 class="pb-1"><a href="user-profile.html">Kevin Martin</a></h5>
                                            <div class="stats fs-12 d-flex align-items-center lh-18">
                                                <span class="text-black pr-2">6,514</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball gold"></span>3</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball silver"></span>35</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span
                                                        class="ball"></span>48</span>
                                            </div>
                                        </div>
                                        <a href="revisions.html" class="meta d-block text-right fs-13 text-color">
                                            <span class="d-block lh-18">edited</span>
                                            <span class="d-block lh-18 fs-12">6 hours ago</span>
                                        </a>
                                    </div>
                                </div><!-- end media -->
                            </div><!-- end question-post-user-action -->
                            <div class="comments-wrap">
                                <ul class="comments-list">
                                    <li>
                                        <div class="comment-actions">
                                            <span class="comment-score">1</span>
                                        </div>
                                        <div class="comment-body">
                                            <span class="comment-copy">Where are you trying to get <code class="code">prodId</code>?</span>
                                            <span class="comment-separated">-</span>
                                            <a href="user-profile.html" class="comment-user" title="15,467 reputation">Majed
                                                Badawi</a>
                                            <span class="comment-separated">-</span>
                                            <a href="#" class="comment-date">8 hours ago</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-actions">
                                            <span class="comment-score"></span>
                                        </div>
                                        <div class="comment-body">
                                            <span class="comment-copy">In a separate js file.  @MajedBadawi</span>
                                            <span class="comment-separated">-</span>
                                            <a href="user-profile.html" class="comment-user owner"
                                               title="224,110 reputation">Arden Smith</a>
                                            <span class="comment-separated">-</span>
                                            <a href="#" class="comment-date">8 hours ago</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-actions">
                                            <span class="comment-score"></span>
                                        </div>
                                        <div class="comment-body">
                                            <span class="comment-copy">@MajedBadawi I just updated the code to show where I'm trying to get it.</span>
                                            <span class="comment-separated">-</span>
                                            <a href="user-profile.html" class="comment-user owner"
                                               title="224,110 reputation">Arden Smith</a>
                                            <span class="comment-separated">-</span>
                                            <a href="#" class="comment-date">8 hours ago</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-actions">
                                            <span class="comment-score"></span>
                                        </div>
                                        <div class="comment-body">
                                            <span class="comment-copy">Your are missing quotes <code
                                                    class="code"></code> Your markup breaks after that</span>
                                            <span class="comment-separated">-</span>
                                            <a href="user-profile.html" class="comment-user" title="6,514 reputation">Kevin
                                                Martin</a>
                                            <span class="comment-separated">-</span>
                                            <a href="#" class="comment-date">8 hours ago</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-actions">
                                            <span class="comment-score"></span>
                                        </div>
                                        <div class="comment-body">
                                            <span class="comment-copy">This doesn't work either: <code
                                                    class="code"></code>. @Kevin Martin</span>
                                            <span class="comment-separated">-</span>
                                            <a href="user-profile.html" class="comment-user owner"
                                               title="224,110 reputation">Arden Smith</a>
                                            <span class="comment-separated">-</span>
                                            <a href="#" class="comment-date">8 hours ago</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="comment-form">
                                    <div class="comment-link-wrap text-center">
                                        <a class="collapse-btn comment-link" data-toggle="collapse"
                                           href="#addCommentCollapse" role="button" aria-expanded="false"
                                           aria-controls="addCommentCollapse"
                                           title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments.">Add
                                            a comment</a>
                                    </div>
                                    <div class="collapse border-top border-top-gray mt-2 pt-3" id="addCommentCollapse">
                                        <form method="post" class="row pb-3">
                                            <div class="col-lg-12">
                                                <h4 class="fs-16 pb-2">Leave a Comment</h4>
                                                <div class="divider mb-2"><span></span></div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Name</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm fs-13"
                                                               type="text" name="text" placeholder="Your name">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Email (Address never made
                                                        public)</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm fs-13"
                                                               type="text" name="text" placeholder="Your email">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Website</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm fs-13"
                                                               type="text" name="text" placeholder="Website link">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Message</label>
                                                    <div class="form-group">
                                                        <textarea
                                                            class="form-control form--control form-control-sm fs-13"
                                                            name="message" rows="5"
                                                            placeholder="Your comment here..."></textarea>
                                                        <div class="d-flex flex-wrap align-items-center pt-2">
                                                            <div
                                                                class="badge bg-gray border border-gray mr-3 fw-regular fs-13">
                                                                [named hyperlinks] (https://example.com)
                                                            </div>
                                                            <div class="mr-3 fw-bold fs-13">**bold**</div>
                                                            <div class="mr-3 font-italic fs-13">_italic_</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div
                                                    class="input-box d-flex flex-wrap align-items-center justify-content-between">
                                                    <div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="getNewComments">
                                                            <label class="custom-control-label custom--control-label"
                                                                   for="getNewComments">Notify me of new comments vai
                                                                email.</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="getNewPosts">
                                                            <label class="custom-control-label custom--control-label"
                                                                   for="getNewPosts">Notify me of new posts vai
                                                                email.</label>
                                                        </div>
                                                    </div>
                                                    <button
                                                        class="btn theme-btn theme-btn-sm theme-btn-outline theme-btn-outline-gray"
                                                        type="submit">Post Comment
                                                    </button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </form>
                                    </div><!-- end collapse -->
                                </div>
                            </div><!-- end comments-wrap -->
                        </div><!-- end question-post-body-wrap -->
                    </div><!-- end question -->
                    <div class="subheader d-flex align-items-center justify-content-between">
                        <div class="subheader-title">
                            <h3 class="fs-16">{{ $question->answers->count() }} Answer</h3>
                        </div><!-- end subheader-title -->
                        <div class="subheader-actions d-flex align-items-center lh-1">
                            <label class="fs-13 fw-regular mr-1 mb-0">Order by</label>
                            <div class="w-100px">
                                <select class="select-container">
                                    <option value="active">active</option>
                                    <option value="oldest">oldest</option>
                                    <option value="votes" selected="selected">votes</option>
                                </select>
                            </div>
                        </div><!-- end subheader-actions -->
                    </div><!-- end subheader -->
                    @if ($question->answers->count() > 0)
                        @foreach($question->answers as $answer)
                            <div class="answer-wrap d-flex">
                                <div class="votes votes-styled w-auto">
                                    <div id="vote2" class="upvotejs">
                                        <a class="upvote upvote-on" data-toggle="tooltip" data-placement="right"
                                           title="This question is useful"></a>
                                        <span class="count">2</span>
                                        <a class="downvote" data-toggle="tooltip" data-placement="right"
                                           title="This question is not useful"></a>
                                        <a class="star check star-on" data-toggle="tooltip" data-placement="right"
                                           title="The question owner accepted this answer"></a>
                                    </div>
                                </div><!-- end votes -->

                                <div class="answer-body-wrap flex-grow-1">
                                    <div class="answer-body">
                                        <p class="code-block custom-scrollbar-styled">{{$answer->content}}</p>
                                    </div><!-- end answer-body -->
                                    <div class="question-post-user-action">
                                        <div class="post-menu">
                                            <a href="#" class="btn">Edit</a>
                                        </div><!-- end post-menu -->
                                        <div class="media media-card user-media align-items-center">
                                            <a href="user-profile.html" class="media-img d-block">
                                                <img src="images/img4.jpg" alt="avatar">
                                            </a>
                                            <div class="media-body d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5 class="pb-1"><a href="user-profile.html">Majed Badawi</a></h5>
                                                    <div class="stats fs-12 d-flex align-items-center lh-18">
                                                        <span class="text-black pr-2">15.5k</span>
                                                        <span class="pr-2 d-inline-flex align-items-center"><span
                                                                class="ball gold"></span>3</span>
                                                        <span class="pr-2 d-inline-flex align-items-center"><span
                                                                class="ball silver"></span>10</span>
                                                        <span class="pr-2 d-inline-flex align-items-center"><span
                                                                class="ball"></span>26</span>
                                                    </div>
                                                </div>
                                                <small class="meta d-block text-right">
                                                    <span class="text-black d-block lh-18">answered</span>
                                                    <span class="d-block lh-18 fs-12">8 hours ago</span>
                                                </small>
                                            </div>
                                        </div><!-- end media -->
                                        <div class="media media-card user-media align-items-center">
                                            <div class="media-body d-flex align-items-center justify-content-end">
                                                <a href="revisions.html"
                                                   class="meta d-block text-right fs-13 text-color">
                                                    <span class="d-block lh-18">edited</span>
                                                    <span class="d-block lh-18 fs-12">8 hours ago</span>
                                                </a>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end question-post-user-action -->
                                    <div class="comments-wrap">
                                        <ul class="comments-list">
                                            <li>
                                                <div class="comment-actions">
                                                    <span class="comment-score">1</span>
                                                </div>
                                                <div class="comment-body">
                                                    <span class="comment-copy">Ah excellent! Thank you!</span>
                                                    <span class="comment-separated">-</span>
                                                    <a href="user-profile.html" class="comment-user owner"
                                                       title="224,110 reputation">Arden Smith</a>
                                                    <span class="comment-separated">-</span>
                                                    <a href="#" class="comment-date">8 hours ago</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="comment-form">
                                            <div class="comment-link-wrap text-center">
                                                <a class="collapse-btn comment-link" data-toggle="collapse"
                                                   href="#addCommentCollapseTwo" role="button" aria-expanded="false"
                                                   aria-controls="addCommentCollapseTwo"
                                                   title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments.">Add
                                                    a comment</a>
                                            </div>
                                            <div class="collapse border-top border-top-gray mt-2 pt-3"
                                                 id="addCommentCollapseTwo">
                                                <form method="post" class="row pb-3">
                                                    <div class="col-lg-12">
                                                        <h4 class="fs-16 pb-2">Leave a Comment</h4>
                                                        <div class="divider mb-2"><span></span></div>
                                                    </div><!-- end col-lg-12 -->
                                                    <div class="col-lg-6">
                                                        <div class="input-box">
                                                            <label class="fs-13 text-black lh-20">Name</label>
                                                            <div class="form-group">
                                                                <input
                                                                    class="form-control form--control form-control-sm fs-13"
                                                                    type="text" name="text" placeholder="Your name">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="input-box">
                                                            <label class="fs-13 text-black lh-20">Email (Address never
                                                                made
                                                                public)</label>
                                                            <div class="form-group">
                                                                <input
                                                                    class="form-control form--control form-control-sm fs-13"
                                                                    type="text" name="text" placeholder="Your email">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-12">
                                                        <div class="input-box">
                                                            <label class="fs-13 text-black lh-20">Website</label>
                                                            <div class="form-group">
                                                                <input
                                                                    class="form-control form--control form-control-sm fs-13"
                                                                    type="text" name="text" placeholder="Website link">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->
                                                    <div class="col-lg-12">
                                                        <div class="input-box">
                                                            <label class="fs-13 text-black lh-20">Message</label>
                                                            <div class="form-group">
                                                        <textarea
                                                            class="form-control form--control form-control-sm fs-13"
                                                            name="message" rows="5"
                                                            placeholder="Your comment here..."></textarea>
                                                                <div class="d-flex flex-wrap align-items-center pt-2">
                                                                    <div
                                                                        class="badge bg-gray border border-gray mr-3 fw-regular fs-13">
                                                                        [named hyperlinks] (https://example.com)
                                                                    </div>
                                                                    <div class="mr-3 fw-bold fs-13">**bold**</div>
                                                                    <div class="mr-3 font-italic fs-13">_italic_</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->
                                                    <div class="col-lg-12">
                                                        <div
                                                            class="input-box d-flex flex-wrap align-items-center justify-content-between">
                                                            <div>
                                                                <div class="custom-control custom-checkbox fs-13">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                           id="getNewCommentsTwo">
                                                                    <label
                                                                        class="custom-control-label custom--control-label"
                                                                        for="getNewCommentsTwo">Notify me of new
                                                                        comments
                                                                        vai
                                                                        email.</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox fs-13">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                           id="getNewPostsTwo">
                                                                    <label
                                                                        class="custom-control-label custom--control-label"
                                                                        for="getNewPostsTwo">Notify me of new posts vai
                                                                        email.</label>
                                                                </div>
                                                            </div>
                                                            <button
                                                                class="btn theme-btn theme-btn-sm theme-btn-outline theme-btn-outline-gray"
                                                                type="submit">Post Comment
                                                            </button>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->
                                                </form>
                                            </div><!-- end collapse -->
                                        </div>
                                    </div><!-- end comments-wrap -->
                                </div><!-- end answer-body-wrap -->
                            </div><!-- end answer-wrap -->
                        @endforeach
                    @endif
                    @if($question->status == 'open')
                        <div class="subheader">
                            <div class="subheader-title">
                                <h3 class="fs-16">Your Answer</h3>
                            </div><!-- end subheader-title -->
                        </div><!-- end subheader -->
                        <div class="post-form">
                            <form action="{{route('answers.store')}}" method="post" class="pt-3">
                                @csrf
                                <input type="hidden" name="question_id" value="{{ $question->id }}">
                                <div class="input-box">
                                    <label class="fs-14 text-black lh-20 fw-medium">Body</label>
                                    <div class="form-group">
                                    <textarea class="form-control form--control form-control-sm fs-13 user-text-editor"
                                              name="content" rows="6" placeholder="Your answer here..."></textarea>
                                    </div>
                                </div>
                                <button class="btn theme-btn theme-btn-sm" type="submit">Post Your Answer</button>
                            </form>
                        </div>
                    @endif
                </div><!-- end question-main-bar -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Number Achievement</h3>
                            <div class="divider"><span></span></div>
                            <div class="row no-gutters text-center">
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color">{{ $question->count() }}</span>
                                        <p class="fs-14">Questions</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span
                                            class="fs-20 fw-bold text-color-2">{{ $question->answers->count() }}</span>
                                        <p class="fs-14">Answers</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-3">650k</span>
                                        <p class="fs-14">Answer accepted</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-4">{{ $numberOfUsers }}</span>
                                        <p class="fs-14">Users</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12 pt-3">
                                    <p class="fs-14">To get answer of question <a href="{{ route('register') }}"
                                                                                  class="text-color hover-underline">Join<i
                                                class="la la-arrow-right ml-1"></i></a></p>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-3">
                                <svg class="mr-2" width="18" height="18" viewBox="0 0 18 18" fill="#6c727c">
                                    <path
                                        d="M1 6l8 5 8-5V4L9 9 1 4c0-1.1.9-2 2-2h12c1.09 0 2 .91 2 2v10c0 1.09-.91 2-2 2H3c-1.09 0-2-.91-2-2V6z"></path>
                                </svg>
                                <h3 class="fs-17">Love this site?</h3>
                            </div>
                            <div class="divider"><span></span></div>
                            <p class="fs-14 lh-20 py-3">Get the <span
                                    class="text-dark fw-medium">weekly newsletter!</span> In it, you'll get:</p>
                            <ul class="generic-list-item generic-list-item-bullet fs-14 pb-3">
                                <li class="lh-20">The week's top questions and answers</li>
                                <li class="lh-20">Important community announcements</li>
                                <li class="lh-20">Questions that need answers</li>
                            </ul>
                            <button class="btn theme-btn theme-btn-gray w-100">Sign up for the digest</button>
                            <p class="fs-14 pt-1 text-center">See an example newsletter</p>
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Related Questions</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">How to select the dom element with
                                                event.target</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">2 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Sudhir Kumbhare</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">How can you cut an onion without crying?</a>
                                        </h5>
                                        <small class="meta">
                                            <span class="pr-1">48 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">wimax</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">How to change the behavior of dropdown
                                                buttons in HTML</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">1 hour ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Antonin gavrel</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                            </div><!-- end sidebar-questions -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Trending Tags</h3>
                            <div class="divider"><span></span></div>
                            <div class="tags pt-4">
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">analytics</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">computer</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">python</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">javascript</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">c#</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="collapse" id="showMoreTags">
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">java</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">swift</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">html</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">angular</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">flutter</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">machine-language</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                </div><!-- end collapse -->
                                <a class="collapse-btn fs-13" data-toggle="collapse" href="#showMoreTags" role="button"
                                   aria-expanded="false" aria-controls="showMoreTags">
                                    <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                    <span class="collapse-btn-show">Show less<i
                                            class="la la-angle-up ml-1 fs-11"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end question-area -->
<!-- ================================
         END QUESTION AREA
================================= -->

<!-- start back to top -->
<div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end back to top -->

<!-- template js files -->
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

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/question-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 10:18:25 GMT -->
</html>
