<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DashBoard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Poppins:wght@300;400;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/formmain.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/abcd.css') }}" />

</head>
<body>
    <div class="overlay-send-target">
        <div class="form-send-target">
            <h2 class="form-send-target-header">Gửi biểu mẫu</h2>
            <p class="survey-code-title">Mã phiếu khảo sát: </p>
            <input value="{{$survey->id}}" type="text" class="survey-code" readonly>
            <input class="form-send-target-link" readonly value="Links: {{route('result.make', ['survey_id'=>$survey->id])}}">
            <button class="form-send-target-submit">Kết thúc</button>
        </div>
    </div>
    <div class="app">
        <header class="header header-with-search">
            <img src="{{ asset('img/img-logo.jpg') }}" alt="" class="header-logo" />
            <div class="header-title">
                <h1 class="header-main-title">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
                <p class="header-sub-title">THUYLOI UNIVERSITY</p>
            </div>
        </header>

        <div class="survey-navbar">
            <div class="survey-navbar-wrap">
                <ul class="survey-navbar-list">
                    <li class="survey-navbar-item active">Câu hỏi</li>
                    <li class="survey-navbar-item">Câu trả lời</li>
                    <li class="survey-navbar-item">Cài đặt</li>
                </ul>
                <a href="#" class="survey-navbar-btn">Gửi</a>
            </div>
        </div>

        <div class="survey active">
            <form action="{{route('survey.update')}}" method='POST' class="survey-main">
                <div class="survey-head">
                    <input class="survey-heading" name="name" value="{{$survey->name}}" type="text">
                    <input class="survey-sub-heading" value="Mô tả" type="text">
                </div>
                @csrf
                <input type="hidden" name="id" value="{{$survey->id}}">
                <input class="input-hidden-1" type="hidden" name="type" value="0" >
                <input class="input-hidden-2" id="start_at" type="hidden" name="start_at" value="{{$survey->start_at}}">
                <input class="input-hidden-3" id="end_at" type="hidden" name="end_at" value="{{$survey->end_at}}">
                <input type="hidden" name="user_id" value="{{$survey->user_id}}">
                <div id="add-question">
                    @foreach($survey->questions as $question)
                    <div class="survey-main-wrap" id="survey-main-wrap">
                        <input name="questions[{{$question->id}}]" value="{{$question->content}}" placeholder="Câu hỏi" class="survey-main-title" type="text">
                        <select name="types[{{$question->id}}]" class="form-select" aria-label="Default select example">
                            <option value="3" @if(abs($question->type) == 3) selected @endif>Trả lời ngắn</option>
                            <option value="4" @if(abs($question->type) == 4) selected @endif>Đoạn</option>
                            <option value="1" @if(abs($question->type) == 1) selected @endif>Trắc Nghiệm</option>
                            <option value="2" @if(abs($question->type) == 2) selected @endif>Hộp kiểm</option>
                        </select>

                        <div class="survey-data">
                            <div class="survey-choose-new">
                                @foreach($question->answers as $answer)
                                <div class="survey-choose">
                                    {{-- dap an dung --}}
                                    <input name="correct_answers[{{$question->id}}][{{$answer->id}}]" class="survey-choose-input"
                                           type=
                                                @if(abs($question->type) == 1) 'radio'
                                                @elseif(abs($question->type) == 2) 'checkbox'
                                                @endif
                                    >
                                    {{-- dap an --}}
                                    <input name="answers[{{$question->id}}][{{$answer->id}}]" class="survey-choose-input-init" value="{{$answer->content}}" type="text">
                                    <i class="survey-choose-input-icon choose-delete-js fa-solid fa-x"></i>
                                </div>
                                @endforeach
                            </div>
                            @if(abs($question->type) == 1 || abs($question->type) == 2)
                            <div class="survey-add-ques">
                                <input class="survey-add-input" type=
                                    @if(abs($question->type) == 1) 'radio'
                                    @elseif(abs($question->type) == 2) 'checkbox'
                                   @endif
                                >
                                <input placeholder="Thêm tùy chọn" type="text" class="survey-add-text">
                            </div>
                                @else
                                    <div class="insert-box">
                                        <input class="survey-add-input" type="radio" style="display: none;">
                                        <input name="essay_correct_answer[{{$question->id}}]" value="{{$question->essay_correct_answer}}" placeholder="Thêm tùy chọn" type="text" class="insert-input">
                                    </div>
                                @endif
                        </div>

                        <div class="survey-main-bottom">
                            <i class="survey-trash-icon fa-solid fa-trash"></i>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="survey-footer">
                    <button type='submit' class="survey-footer-btn">Lưu</button>
                </div>
            </form>
        </div>
        @if($survey->results->count() > 0)
        <div id="data-charts" data-json='{{ json_encode($arr_data) }}'></div>
        <form action="" class="statisticals">
            <div class="statistical-section">
                <input value="{{$survey->results->count()}} Câu trả lời" type="text" class="statistical-heading" readonly>
                <p class="statistical-title">Danh sách</p>
                <div class="statistical-section-list">
                    @foreach($survey->results as $result)
                    <div class="statistical-section-item">
                        <input value="{{$result->fullname}}" type="text" class="statistical-item-name" readonly>
                        <div class="statistical-item-icons">
                            <a class="statistical-item-icon" href="{{ route('check_result', ['survey_id'=>$survey->id,'result_id'=>$result->id,'user_id'=>$survey->user_id]) }}">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a class="statistical-item-icon" href="{{route('result.download', ['id'=>$result->id])}}">
                                <i class="fa-solid fa-download"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            @if($survey->type == 1)
            <div class="statistical-section statistical-section-positon">
                <input value="Điểm số" type="text" class="statistical-heading">
                <p class="statistical-title">Danh sách</p>
                <p class="point">Điểm/10</p>
                <div class="statistical-section-list">
                    @foreach($survey->results as $result)
                    <div class="statistical-section-item">
                        <input value="{{$result->fullname}}" type="text" class="statistical-item-name" readonly>
                        <input value="{{$result->score}}" type="text" class="statistical-item-number" readonly>
                    </div>
                    @endforeach
                </div>
                <a class="statistical-render-exel" href="{{ route('export_excel',['id'=>$survey->id]) }}">Xuất file Excel</a>
            </div>
            @endif
            @foreach($survey->questions as $question)
                @if(abs($question->type) == 1 || abs($question->type) == 2)
            <div class="statistical-section">
                <label type="text" class="statistical-heading">{{$question->content}}</label>
{{--                <input value="{{$survey->results->count()}} câu trả lời" type="text" class="statistical-title" readonly>--}}
                <div id="container-pie-chart-{{$question->id}}"></div>
            </div>
                @else
            <div class="statistical-section">
                <label type="text" class="statistical-heading">{{$question->content}}</label>
{{--                <input value="{{$survey->results->count()}} câu trả lời" type="text" class="statistical-title" readonly>--}}
                <div id="container-column-chart-{{$question->id}}"></div>
            </div>
                @endif
            @endforeach

            @if($survey->type == 1)
            <div id="data-scores" data-json='{{ json_encode($scores) }}'></div>
            <div class="statistical-section statistical-section-positon">
                <input value="Điểm số" type="text" class="statistical-heading">
                <div class="container"></div>
                <span class="chart-name">BIỂU ĐỒ ĐIỂM SỐ</span>
                <span class="colum-name">Số lượng</span>
                <span class="row-name">Điểm số</span>
            </div>
            <a class="statistical-section-review" href="{{ route('view_report',['survey_id'=>$survey->id]) }}">Xem đóng góp ý kiến</a>
            @endif
        </form>
        @else
            <div class="statisticals">
                <div class="empty-answer">
                    <p>0 Câu trả lời</p>
                </div>
            </div>
        @endif
        <form action="" class="setting">
            <div class="setting-wrap">
                <h2 class="setting-heading">Cài đặt</h2>
                <div class="setting-box">
                    <h3 class="setting-title">Đặt làm bài kiểm tra</h3>
                    <p class="setting-sub-title">Chỉ định các giá trị điểm, đặt câu trả lời và tự động cung cấp ý kiến phản hồi</p>
                </div>
                <div id="wrapper" class="setting-form-wrapper">
                    <input type="checkbox" name="" class="switch-toggle switch-toggle-setting">
                </div>
                <div class="setting-time">
                    <h3 class="setting-time-title">Đặt thời gian</h3>
                    <div class="setting-time-item">
                        <p>Thời gian bắt đầu </p>
                        <input class="dateofbirth-1" type="datetime-local" name="dateofbirth" id="dateofbirth">
                    </div>

                    <div class="setting-time-item">
                        <p>Thời gian kết thúc</p>
                        <input class="dateofbirth-2" type="datetime-local" name="dateofbirth" id="dateofbirth">
                    </div>
                </div>
            </div>
            2
        </form>
        <div class="add-survey active">
            <div class="plus-cirkle-icon">
                <i class="fa-solid fa-plus"></i>
            </div>

            <i class="add-survey-img-icon fa-regular fa-image"></i>
        </div>


    </div>
</body>
<script>
    function app() {
        try {
            var jsonData = JSON.parse(JSON.parse($('#data-charts').data('json')));
            jsonData.forEach(function(element) {
                if(element.type == 1 || element.type == 2) {
                    pieChart(element.question_id, element.data)
                } else {
                    horizonChart(element.question_id, element.data)
                    // console.log(element.question_id, element.data)
                }
            });
        } catch (e) {

        }
        // console.log(jsonData)
        // console.log(typeof JSON.parse(JSON.parse($('#data-charts').data('json'))))

        try {
            columnChart()
        } catch {}
        handleGetValueSelected()
        addInput()
        deleteChooseInput()
        formSendTarget()
        deleteForm()
        getDataSetting()
    }

    app()
    // pie chart
    function pieChart(question_id, data) {
        // console.log(Array.isArray(data))
        var pie = new ej.charts.AccumulationChart({
            series: [
                {
                    dataSource: data,
                    dataLabel: {
                        visible: true,
                        position: 'Inside',
                    },
                    xName: 'essay_answer',
                    yName: 'number',
                },
            ],
        });
        pie.appendTo('#container-pie-chart-' + question_id)
    }

    // horizon chart
    function horizonChart(question_id, data) {
        // return
        // console.log(data)
        var chart = new ej.charts.Chart({
        primaryXAxis: {
            valueType: 'Category',
            title: '',
        },

        primaryYAxis: {
            title: '',
        },

        series: [
            {
                type: 'Bar',
                dataSource: data,
                xName: 'essay_answer',
                yName: 'count',
            },
        ],
        });
        chart.appendTo('#container-column-chart-' + question_id);
    }

    // column chart
    function columnChart() {
        var jsonData = JSON.parse(JSON.parse($('#data-scores').data('json')));
        var chart = new ej.charts.Chart({
        primaryXAxis: {
            valueType: 'Category'
        },
        primaryYAxis: {
        },
        series: [
            {
                type: 'Column',
                dataSource: jsonData,
                xName: 'score',
                yName: 'count',
            },
        ],
        });
        chart.appendTo('.container');
    }

    // Tab item

    const tabs = document.querySelectorAll('.survey-navbar-item')
    const surveyForm = document.querySelector('.survey')
    const statisticalsForm = document.querySelector('.statisticals')
    const settingForm = document.querySelector('.setting')

    tabs.forEach((tab, index) => {
        tab.onclick = function() {
            document.querySelector('.survey-navbar-item.active').classList.remove('active')
            this.classList.add('active')

            if(index == 0) {
                statisticalsForm.classList.remove('active');
                settingForm.classList.remove('active');
                surveyForm.classList.add('active');
            } else if(index == 1) {
                surveyForm.classList.remove('active');
                settingForm.classList.remove('active');
                statisticalsForm.classList.add('active');
            } else if(index == 2) {
                surveyForm.classList.remove('active');
                statisticalsForm.classList.remove('active');
                settingForm.classList.add('active');
            }
        }
    })
    // Plus btn click
    const plusBtn = document.querySelector('.plus-cirkle-icon');
    const addQuestion = document.getElementById('add-question');
    var surveyMains = document.getElementsByClassName('survey-main-wrap')
    function resource(numberId, answerId) {
        let htmls = `
        <div class="survey-main-wrap" id="survey-main-wrap">
            <input name="questions[${numberId}]" placeholder="Câu hỏi" class="survey-main-title" type="text">
            <select name="types[${numberId}]" class="form-select" aria-label="Default select example">
                <option value="3">Trả lời ngắn</option>
                <option value="4">Đoạn</option>
                <option selected value="1">Trắc Nghiệm</option>
                <option value="2">Hộp kiểm</option>
            </select>

            <div class="survey-data">
                <div class="survey-choose-new">
                    <div class="survey-choose">
                        <input name="correct_answers[${numberId}][${answerId}]" class="survey-choose-input" type="radio">
                        <input name="answers[${numberId}][${answerId}]" class="survey-choose-input-init" value="Tùy chọn" type="text">
                        <i class="survey-choose-input-icon choose-delete-js fa-solid fa-x"></i>
                    </div>
                </div>
                <div class="survey-add-ques">
                    <input class="survey-add-input" type="radio">
                    <input placeholder="Thêm tùy chọn" type="text" class="survey-add-text">
                </div>
            </div>

            <div class="survey-main-bottom">
                <div class="survey-constraint">
                    <label for="">Bắt buộc</label>
                    <div id="wrapper">
                        <input type="checkbox" name="" class="switch-toggle">
                    </div>
                </div>
                <i class="survey-trash-icon fa-solid fa-trash"></i>
            </div>
        </div>
    `
        return htmls;
    }
    var i = 0;
    var j = 0;
    plusBtn.addEventListener('click', function addSurvey() {
        i++;
        j = 0;
        addQuestion.insertAdjacentHTML("beforeend", resource(i,j));
        handleGetValueSelected()
        addInput()
        deleteChooseInput()
        deleteForm()
    })
    // ------------------------------------


    var surveyChooseInputs = document.getElementsByClassName('survey-choose-input')
    var surveyaddInputs = document.getElementsByClassName('survey-add-input')
    var surveyChooseInputInits = document.getElementsByClassName('survey-choose-input-init')
    var surveyChooseInputIcons = document.getElementsByClassName('survey-choose-input-icon')

    function handleGetValueSelected() {
        const formSelects = document.querySelectorAll('.form-select')
        formSelects.forEach((formSelect, index) => (
            formSelect.onchange = (e) => {
                let valueSelect = e.target.value;
                // console.log(surveyaddInputs[2])
                if(valueSelect == 1) {
                    surveyaddInputs[index].style.display = 'block';
                    surveyChooseInputs[index].style.display = 'block';

                    surveyaddInputs[index].type = 'radio';
                    surveyChooseInputs[index].type = 'radio';

                    surveyChooseInputInits[index].style.display = 'block';
                    surveyChooseInputIcons[index].style.display = 'block';
                } else if (valueSelect == 2) {
                    surveyaddInputs[index].style.display = 'block';
                    surveyChooseInputs[index].style.display = 'block';

                    surveyaddInputs[index].type = 'checkbox';
                    surveyChooseInputs[index].type = 'checkbox';

                    surveyChooseInputInits[index].style.display = 'block';
                    surveyChooseInputIcons[index].style.display = 'block';
                } else if (valueSelect == 3 || valueSelect == 4){
                    surveyaddInputs[index].style.display = 'none';
                    surveyChooseInputs[index].style.display = 'none';

                    surveyChooseInputInits[index].style.display = 'none';
                    surveyChooseInputIcons[index].style.display = 'none';
                }


            }
        ))
    }
    // add input
    function addInput() {
        var surveyAddTexts = document.querySelectorAll('.survey-add-text')
        var surveyChoose = document.getElementsByClassName('survey-choose')
        var surveyChooseNew = document.getElementsByClassName('survey-choose-new')

        function duplicate(type, numberId, answerId) {
            let html = `
                <div class="survey-choose">
                    <input name="correct_answers[${numberId}][${answerId}]" class="survey-choose-input" type="${type}" />
                    <input name="answers[${numberId}][${answerId}]" class="survey-choose-input-init" value="Tùy chọn" type="text" />
                    <i class="survey-choose-input-icon choose-delete-js fa-solid fa-x"></i>
                </div>
            `
            return html;
        }
        surveyAddTexts.forEach((surveyAddText, index) => {
            surveyAddText.onclick = () => {
                j++;
                if(surveyChooseInputs[index].type == "radio") {
                    surveyChooseNew[index].insertAdjacentHTML("beforeend", duplicate('radio', i, j));
                } else if (surveyChooseInputs[index].type == "checkbox") {
                    surveyChooseNew[index].insertAdjacentHTML("beforeend", duplicate('checkbox', i, j));
                }
            }
        })
    }

    //delete input
    function deleteChooseInput() {
        var surveyChoose = document.getElementsByClassName('survey-choose')
        const deleteChooseBtns = document.querySelectorAll('.choose-delete-js')
        deleteChooseBtns.forEach((deleteChooseBtn, index) => {
            deleteChooseBtn.onclick = () => {
                surveyChoose[index].style.display = 'none';
            }
        })
    }
    // active form send target
    function formSendTarget() {
        const overlaySendTarget = document.querySelector('.overlay-send-target')
        const formSendTarget = document.querySelector('.form-send-target')
        const btn = document.querySelector('.survey-navbar-btn')
        btn.onclick = () => {
            overlaySendTarget.style.display = 'flex';
        }

        overlaySendTarget.onclick = () => {
            overlaySendTarget.style.display = 'none';
        }

        formSendTarget.onclick = (e) => {
            e.stopPropagation()
        }
    }
    // delete Form
    function deleteForm() {
        const trashIcons = document.querySelectorAll('.survey-trash-icon')
        trashIcons.forEach((trashIcon, index) => {
            trashIcon.onclick = () => {
                surveyMains[index].style.display = 'none';
            }
        })
    }

    // get data of setting form
    function getDataSetting() {
        const inputHidden1 = document.querySelector('.input-hidden-1')
        const inputHidden2 = document.getElementById('start_at')
        const inputHidden3 = document.getElementById('end_at')
        const switchBtn = document.querySelector('.switch-toggle-setting')
        const time1 = document.querySelector('.dateofbirth-1')
        const time2 = document.querySelector('.dateofbirth-2')
        // click switchBtn
        let isOpen = false
        switchBtn.onclick = () => {
            console.log(time1.value);
            if(isOpen) {
                isOpen = false;
                inputHidden1.value = '0';
            } else {
                isOpen = true;
                inputHidden1.value = '1';
            }
        }
        // send data date and time
        time1.onchange = (e) => {
            console.log(inputHidden2.value = e.target.value);
        }

        time2.onchange = (e) => {
            console.log(inputHidden3.value = e.target.value);
        }
    }

</script>
</html>
