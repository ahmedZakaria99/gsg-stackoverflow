@extends('layouts.user')
@section('Content')
    <div class="main container">

        <!--Stat Main Header -->
        <div>
            <div class="header_main">
                <div>
                    <h4>All Question</h4>
                </div>
                <div>
                    <button class="btn-group btn btn-primary">Ask Question</button>
                </div>
            </div>


            <div class="header_main">
                <div class="couns_question"><span>{{ $questions->count() }} questions</span></div>
                <!-- <div class="links">
                    <a href="">Newest</a>
                    <a href="">Active</a>
                    <a href="">Bountied <span style="background-color: #bee3f1; border-radius: 5px;">350</span></a>
                    <a href="">Unanswered</a>
                    <a href="">More ...</a>
                    <a href=""><i class="fas fa-cog"></i> Flutter</a>
                </div> -->
                <!-- <div class="clearFix"></div> -->
            </div>
            <!--End Main Header -->
            <!--Start Main Body For Posts -->
            @isset($questions)
                @foreach($questions as $question)
                    <div class="wrap-cntaner">
                        <div>
                            <div class="main_main">
                                <div class="post">
                                    <div class="left">
                                        <span>0</span>
                                        <div>Votes</div>
                                        <span>{{\App\Models\Answer::where('question_id','=',$question->id)->count()}}</span>
                                        <div>answer</div>
                                        <div>2 views</div>
                                    </div>
                                    <div class="right">
                                        <a href="{{ route('questions.show',$question->id) }}">{{ $question->title }}</a>
                                        <p> {{ $question->description }}
                                            ...</p>
                                        <div class="tags">
                                            <a href="">javascript</a>
                                            <a href="">html</a>
                                            <a href="">python-3x</a>
                                            <a href="">django</a>
                                            <a href="">django-models</a>
                                            <div class="user_info">
                                                <div>asked 55 secs ago</div>
                                                <div class="user_last">
                                                    <div class="left"><img src="https://via.placeholder.com/50" alt="">
                                                    </div>
                                                    <div class="right">
                                                        <div><a href="">Moh</a></div>
                                                        <div>5</div>
                                                    </div>
                                                    <div class="cleatFix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearFix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        @endisset
        <!--End Main Body For Posts -->
        </div>
    </div>
@endsection
