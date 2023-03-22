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
        
            <h2>Đóng góp ý kiến</h2>
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
           
        </div>
    </div>
</body>

</html>
