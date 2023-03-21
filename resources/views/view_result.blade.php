<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$survey->name}}</title>
    <link rel="stylesheet" href="{{ asset('css/contactform.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Poppins:wght@300;400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="app">
        <header class="header">
            <img src="{{ asset('/img/img-logo.jpg') }}" alt="" class="header-logo" />
            <div class="header-title">
                <h1 class="header-main-title">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
                <p class="header-sub-title">THUYLOI UNIVERSITY</p>
            </div>
        </header>
        <div class="content">
            <h1 class="content-heading">{{$survey->name}}
            </h1>
            {{-- <h3>{{ $result->resultQuestions }}</h3> --}}

            <?php
             $collection = $result->resultQuestions->keyBy('question_id');
            ?>
            <h3>{{ $collection->get(22) }}</h3>
            <br>
            <br>
            @foreach ($result->resultQuestions as $item)
                <h3>{{ $item }}</h3>
                <br>
            @endforeach

            <h2 class="form-name">I. THÔNG TIN CHUNG</h2>
            <div class="form-insert">
                <div class="form-insert-wrap">
                    <span>*</span>
                    <label for="{{"anser-text-box-0"}}" class="form-insert-label">Họ và tên</label>
                    <input type="text" class="form-input" id="{{"anser-text-box-0"}}" name="fullname" value="{{ $result->fullname }}" readonly/>
                    <div class="form-warn">
                        <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>

                    </div>
                </div>
            </div>
            <div class="form-insert">
                <div class="form-insert-wrap">
                    <span>*</span>
                    <label for="{{"anser-text-box-0"}}" class="form-insert-label">Mã sinh viên</label>
                    <input type="text" class="form-input" id="{{"anser-text-box-0"}}" name="student_id" value="{{ $result->student_id }}" readonly/>
                    <div class="form-warn">
                        <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>

                    </div>
                </div>
            </div>
            <div class="form-insert">
                <div class="form-insert-wrap">
                    <span>*</span>
                    <label for="{{"anser-text-box-0"}}" class="form-insert-label">Email</label>
                    <input type="text" class="form-input" id="{{"anser-text-box-0"}}" name="email" value="{{ $result->email }}" readonly/>
                    <div class="form-warn">
                        <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>

                    </div>
                </div>
            </div>

            <h2 class="form-name">II. ĐÁNH GIÁ CỦA SINH VIÊN</h2>
   

            
            @foreach($survey->questions as $question)
                @if($question->type == 0)
                    @continue
                @endif
              
                <div class="form-data">
                    <div class="form-data-wrap">
                        <label class="form-data-title">
                            @if($question->type < 0)
                                <span style="color: red;">*</span>
                            @endif
                            {{$question->content}}
                        </label>
                        @if(abs($question->type) == 1)
                             
                                @foreach($question->answers as $answer)
                                    <div class="form-data-choose">
                                        @if ($answer->id ==  $result->resultQuestions[0]->answer_id)
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
                                    @if ($answer->id ==  $result->resultQuestions[0]->answer_id)
                                        <input type="checkbox" id="answer-id-{{$answer->id . "-". $question->id}}" name="multi_answer[{{$question->id}}][{{$answer->id}}]" @disabled(true) @checked(true)/>
                                    @else
                                    <input type="checkbox" id="answer-id-{{$answer->id . "-". $question->id}}" name="multi_answer[{{$question->id}}][{{$answer->id}}]" @disabled(true)/>
                                    @endif

                                        <label for="answer-id-{{$answer->id . "-". $question->id}}">{{ $answer->content}}
                                        </label>
                                </div>
                            @endforeach
                        @elseif(abs($question->type) == 3)
                            <input placeholder="Câu trả lời của bạn" class="form-data-answer" name="essay_answer[{{ $question->id }}]" readonly>
                        @elseif(abs($question->type) == 4)
                            <textarea placeholder="Câu trả lời của bạn" class="form-data-answer text-area"  name="essay_answer[{{ $question->id }}]" readonly ></textarea>
                        @endif

                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
</body>

</html>

