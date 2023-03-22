<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$survey->name}}</title>
    <style>
        .form-data-wrap {
            margin-bottom: 30px ;
        }
        .form-data-title{
            margin-right: 15px ;
        }
    </style>
</head>

<body>
    <div class="app">
{{--        <header class="header">--}}
{{--            <img src="{{ asset('/img/img-logo.jpg') }}" alt="" class="header-logo" />--}}
{{--            <div class="header-title">--}}
{{--                <h1 class="header-main-title">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>--}}
{{--                <p class="header-sub-title">THUYLOI UNIVERSITY</p>--}}
{{--            </div>--}}
{{--        </header>--}}
        <div class="content">
            <h1 class="content-heading">{{$survey->name}}
            </h1>
            <h2 class="form-name">I. THÔNG TIN CHUNG</h2>
            <div class="form-insert">
                <div class="form-insert-wrap">
{{--                    <span>*</span>--}}
                    <label for="{{"anser-text-box-0"}}" class="form-insert-label">Họ và tên : {{ $result->fullname }}</label>
{{--                    <input type="text" class="form-input" id="{{"anser-text-box-0"}}" name="fullname" value="" readonly/>--}}
                    <div class="form-warn">
                        <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>

                    </div>
                </div>
            </div>
            <div class="form-insert">
                <div class="form-insert-wrap">
{{--                    <span>*</span>--}}
                    <label for="{{"anser-text-box-0"}}" class="form-insert-label">Mã sinh viên: {{ $result->student_id }}</label>
{{--                    <input type="text" class="form-input" id="{{"anser-text-box-0"}}" name="student_id" value="" readonly/>--}}
                    <div class="form-warn">
                        <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>

                    </div>
                </div>
            </div>
            <div class="form-insert">
                <div class="form-insert-wrap">
{{--                    <span>*</span>--}}
                    <label for="{{"anser-text-box-0"}}" class="form-insert-label">Email: {{ $result->email }}</label>
{{--                    <input type="text" class="form-input" id="{{"anser-text-box-0"}}" name="email" value="" readonly/>--}}
                    <div class="form-warn">
                        <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>

                    </div>
                </div>
            </div>

            <h2 class="form-name">II. ĐÁNH GIÁ CỦA SINH VIÊN</h2>


            <?php
                $count = 0;
            ?>
            @foreach($survey->questions as $question)
                <?php $count++; ?>
                @if($question->type == 0)
                    @continue
                @endif

                <div class="form-data">
                    <div class="form-data-wrap">
                        <label class="form-data-title">
                            {{$count . '. ' .$question->content}}
                        </label>
                        @if(abs($question->type) == 1)

                                @foreach($question->answers as $answer)
                                    <div class="form-data-choose">
                                        @if ($result->answersOfQuestion($question->id)->contains($answer->id))
                                           <input type="radio" id="answer-id-{{$answer->id . "-". $question->id}}" name="choice_answer[{{$question->id}}]" value="{{$answer->id}}" @disabled(true) @checked(true)/>
                                        @else
                                           <input type="radio" id="answer-id-{{$answer->id . "-". $question->id}}" name="choice_answer[{{$question->id}}]" value="{{$answer->id}}" @disabled(true) />
                                        @endif
                                        <label for="answer-id-{{$answer->id . "-". $question->id}}">{{ $answer->content}}
                                        </label>
                                    </div>

                                @endforeach
                        @elseif(abs($question->type) == 2)
                            @foreach($question->answers as $answer)
                                <div class="form-data-choose">
                                    @if ($result->answersOfQuestion($question->id)->contains($answer->id))
                                        <input type="checkbox" id="answer-id-{{$answer->id . "-". $question->id}}" name="multi_answer[{{$question->id}}][{{$answer->id}}]" @disabled(true) @checked(true)/>
                                    @else
                                    <input type="checkbox" id="answer-id-{{$answer->id . "-". $question->id}}" name="multi_answer[{{$question->id}}][{{$answer->id}}]" @disabled(true)/>
                                    @endif

                                        <label for="answer-id-{{$answer->id . "-". $question->id}}">{{ $answer->content}}
                                        </label>
                                </div>
                            @endforeach
                        @elseif(abs($question->type) == 3)
                            <input class="form-data-answer" name="essay_answer[{{ $question->id }}]" value='{{$result->contentEssay($question->id)}}' readonly>
                        @elseif(abs($question->type) == 4)
                            <textarea class="form-data-answer text-area"  name="essay_answer[{{ $question->id }}]" value='{{$result->contentEssay($question->id)}}' readonly ></textarea>
                        @endif

                    </div>
                </div>

            @endforeach
        </div>
    </div>
</body>

</html>

