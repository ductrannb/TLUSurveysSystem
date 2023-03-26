<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$survey->name}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/newreport.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Poppins:wght@300;400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="app">
         <div class="header">
            <div class="logo-img">
                <img src="{{ asset('img/img-logo.jpg') }}" alt="">
            </div>
            <div>
                <h1 class="title-heading_1">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
                <h2 class="title-heading_2">THUY LOI UNIVERSITY</h2>
            </div>
        </div>
        <div class="nav"></div>
        <div class="content">
            <div class="row">
                <div class="col">
                    <form class="container" action="">
                        <h1 class="content-heading">{{$survey->name}}</h1>
                        <h2 class="content-title">Đóng góp ý kiến</h2>
                        @foreach ($survey->reports as $report)
                        <div class="form-data">
                        <div class="form-data-wrap">
                            <h3>
                                {{ App\Models\Result::find($report['result_id'])->fullname }}
                            </h3>
                            <p>{{ $report['content'] }}</p>
                        </div>
                        </div>
                        @endforeach
                    </form> 
                    <a class="go-back" href="{{ route('survey.view',['id'=>$survey->id]) }}">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
