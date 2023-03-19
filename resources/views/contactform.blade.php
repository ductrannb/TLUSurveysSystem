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
            <span>Có {{$survey->questions->count()}} câu hỏi trong cuộc khảo sát này.</span>

            <h2 class="form-name">I. THÔNG TIN CHUNG</h2>
            <form action="{{route('result.create')}}" method='POST'>
            @csrf
            <input name = "survey_id" value="{{ $survey->id }}" type="hidden">
            <input name = "total_question" value="{{ $survey->questions->count() }}" type="hidden">
            <input name = "survey_type" value="{{ $survey->type }}" type="hidden">

            <div class="form-insert">
                <div class="form-insert-wrap">
                    <span>*</span>
                    <label for="{{"anser-text-box-0"}}" class="form-insert-label">Họ và tên</label>
                    <input type="text" class="form-input" id="{{"anser-text-box-0"}}" name="fullname" />
                    <div class="form-warn">
                        <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>
                        <p class="form-warn__title">
                            Đây là một câu hỏi bắt buộc
                        </p>
                    </div>
                </div>
            </div>
            <div class="form-insert">
                <div class="form-insert-wrap">
                    <span>*</span>
                    <label for="{{"anser-text-box-0"}}" class="form-insert-label">Mã sinh viên</label>
                    <input type="text" class="form-input" id="{{"anser-text-box-0"}}" name="student_id" />
                    <div class="form-warn">
                        <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>
                        <p class="form-warn__title">
                            Đây là một câu hỏi bắt buộc
                        </p>
                    </div>
                </div>
            </div>
            <div class="form-insert">
                <div class="form-insert-wrap">
                    <span>*</span>
                    <label for="{{"anser-text-box-0"}}" class="form-insert-label">Email</label>
                    <input type="text" class="form-input" id="{{"anser-text-box-0"}}" name="email" />
                    <div class="form-warn">
                        <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>
                        <p class="form-warn__title">
                            Đây là một câu hỏi bắt buộc
                        </p>
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
                                        <input type="radio" id="answer-id-{{$answer->id . "-". $question->id}}" name="choice_answer[{{$question->id}}]" value="{{$answer->id}}" />
                                        <label for="answer-id-{{$answer->id . "-". $question->id}}">{{$answer->content}}
                                        </label>
                                    </div>
                                @endforeach
                        @elseif(abs($question->type) == 2)
                            @foreach($question->answers as $answer)
                                <div class="form-data-choose">
                                        <input type="checkbox" id="answer-id-{{$answer->id . "-". $question->id}}" name="multi_answer[{{$question->id}}][{{$answer->id}}]" />
                                        <label for="answer-id-{{$answer->id . "-". $question->id}}">{{$answer->content}}
                                        </label>
                                </div>
                            @endforeach
                        @elseif(abs($question->type) == 3)
                            <input placeholder="Câu trả lời của bạn" class="form-data-answer" name="essay_answer[{{ $question->id }}]">
                        @elseif(abs($question->type) == 4)
                            <textarea placeholder="Câu trả lời của bạn" class="form-data-answer text-area" name="essay_answer[{{ $question->id }}]></textarea>
                        @endif
                        @if($question->type < 0)
                        <div class="form-warn">
                            <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>
                            <p class="form-warn__title">
                                Đây là một câu hỏi bắt buộc
                            </p>
                        </div>
                        @endif
                    </div>
                </div>

            @endforeach
                <div class="handle">
                    <input type="submit" value="Gửi" class="submit-form-btn" />
                    <p class="delete-form">Xóa hết câu trả lời</p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
