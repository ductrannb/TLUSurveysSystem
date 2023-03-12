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
            <form action="">
            @foreach($survey->questions as $question)
                @if($question->type == 0)
                <div class="form-insert">
                    <div class="form-insert-wrap">
                        <span>*</span>
                        <label for="{{"anser-text-box-" . $question->id}}" class="form-insert-label">{{$question->content}}</label>
                        <input type="text" class="form-input" id="{{"anser-text-box-" . $question->id}}" />
                    </div>

                    <div class="form-warn">
                        <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>
                        <p class="form-warn__title">
                            Đây là một câu hỏi bắt buộc
                        </p>
                    </div>
                </div>
                @endif
            @endforeach

            <h2 class="form-name">II. ĐÁNH GIÁ CỦA SINH VIÊN</h2>

            @foreach($survey->questions as $question)
                @if($question->type == 0)
                    @continue
                @endif
                <div class="form-data">
                    <div class="form-data-wrap">
                        <label class="form-data-title">{{$question->content}}</label>
                        @if($question->type == 1)
                                @foreach($question->answers as $answer)
                                    <div class="form-data-choose">
                                        <input type="radio" id="answer-id-{{$answer->id}}" name="answer[{{$survey->id}}][{{$question->id}}] id" />
                                        <label for="answer-id-{{$answer->id}}">{{$answer->content}}
                                        </label>
                                    </div>
                                @endforeach
                        @elseif($question->type == 2)
                            @foreach($question->answers as $answer)
                                <div class="form-data-choose">
                                        <input type="checkbox" name="data" />
                                        <label for="">{{$answer->content}}
                                        </label>
                                </div>
                            @endforeach
                        @elseif($question->type == 3)
                            <input placeholder="Câu trả lời của bạn" class="form-data-answer">
                        @elseif($question->type == 4)
                            <textarea placeholder="Câu trả lời của bạn" class="form-data-answer text-area"></textarea>
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
