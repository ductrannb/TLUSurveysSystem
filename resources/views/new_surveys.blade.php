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
        <form action="" class="form-send-target">
            <h2 class="form-send-target-header">Gửi biểu mẫu</h2>
            <p class="survey-code-title">Mã phiếu khảo sát: </p>
            <input value="PKSK62CNTT" type="text" class="survey-code">
            <input placeholder="Links:" type="text" class="form-send-target-link">
            <a href="/" class="form-send-target-submit">Kết thúc</a>
        </form>
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
            <form action="{{route('survey.create')}}" method='POST' class="survey-main">
                <div class="survey-head">
                    <input class="survey-heading" name="name" value="Tiêu đề" type="text">
                                    <input class="survey-sub-heading" value="Mô tả" type="text">
                </div>

                {{-- click cai dat thi set vlue = 1 va ngc lai--}}
                @csrf
                <input class="input-hidden-1" type="hidden" name="type" value="0" >
                <input class="input-hidden-2" id="start_at" type="hidden" name="start_at">
                <input class="input-hidden-3" id="end_at" type="hidden" name="end_at">
                <input type="hidden" name="user_id" value="{{$user_id}}">
                <div id="add-question">
                    <div class="survey-main-wrap" id="survey-main-wrap">
                        {{-- cau hoi --}}
                        <input name="questions[0]" placeholder="Câu hỏi" class="survey-main-title" type="text">
                        {{-- select --}}
                        <select name="types[0]" class="form-select" aria-label="Default select example">
                            <option value="3">Trả lời ngắn</option>
                            <option value="4">Đoạn</option>
                            <option selected value="1">Trắc Nghiệm</option>
                            <option value="2">Hộp kiểm</option>
                        </select>

                        <div class="survey-data">
                            <div class="survey-choose-new">
                                <div class="survey-choose">
                                    {{-- dap an dung --}}
                                    <input name="correct_answers[0][0]" class="survey-choose-input" type="radio">
                                    {{-- dap an --}}
                                    <input name="answers[0][0]" class="survey-choose-input-init" value="Tùy chọn" type="text">
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
                </div>
                <div class="survey-footer">
                    <button type='submit' class="survey-footer-btn">Lưu</button>
                </div>
            </form>
        </div>

        <form action="" class="statisticals">
            <div class="statistical-section">
                <input value="20 Câu trả lời" type="text" class="statistical-heading">
                <p class="statistical-title">Danh sách</p>
                <div class="statistical-section-list">
                    <div class="statistical-section-item">
                        <input value="Nguyễn Văn A" type="text" class="statistical-item-name">
                        <div class="statistical-item-icons">
                            <i class="statistical-item-icon fa-regular fa-eye"></i>
                            <i class="statistical-item-icon fa-solid fa-download"></i>
                        </div>
                    </div>

                    <div class="statistical-section-item">
                        <input value="Nguyễn Văn A" type="text" class="statistical-item-name">
                        <div class="statistical-item-icons">
                            <i class="statistical-item-icon fa-regular fa-eye"></i>
                            <i class="statistical-item-icon fa-solid fa-download"></i>
                        </div>
                    </div>

                    <div class="statistical-section-item">
                        <input value="Nguyễn Văn A" type="text" class="statistical-item-name">
                        <div class="statistical-item-icons">
                            <i class="statistical-item-icon fa-regular fa-eye"></i>
                            <i class="statistical-item-icon fa-solid fa-download"></i>
                        </div>
                    </div>

                    <div class="statistical-section-item">
                        <input value="Nguyễn Văn A" type="text" class="statistical-item-name">
                        <div class="statistical-item-icons">
                            <i class="statistical-item-icon fa-regular fa-eye"></i>
                            <i class="statistical-item-icon fa-solid fa-download"></i>
                        </div>
                    </div>

                    <div class="statistical-section-item">
                        <input value="Nguyễn Văn A" type="text" class="statistical-item-name">
                        <div class="statistical-item-icons">
                            <i class="statistical-item-icon fa-regular fa-eye"></i>
                            <i class="statistical-item-icon fa-solid fa-download"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="statistical-section">
                <input value="20 Câu trả lời" type="text" class="statistical-heading">
                <p class="statistical-title">Danh sách</p>
                <div class="statistical-section-list">
                    <div class="statistical-section-item">
                        <input value="Nguyễn Văn A" type="text" class="statistical-item-name">
                        <input value="8" type="text" class="statistical-item-number">
                    </div>

                    <div class="statistical-section-item">
                        <input value="Nguyễn Văn A" type="text" class="statistical-item-name">
                        <input value="8" type="text" class="statistical-item-number">
                    </div>

                    <div class="statistical-section-item">
                        <input value="Nguyễn Văn A" type="text" class="statistical-item-name">
                        <input value="8" type="text" class="statistical-item-number">
                    </div>

                    <div class="statistical-section-item">
                        <input value="Nguyễn Văn A" type="text" class="statistical-item-name">
                        <input value="8" type="text" class="statistical-item-number">
                    </div>

                    <div class="statistical-section-item">
                        <input value="Nguyễn Văn A" type="text" class="statistical-item-name">
                        <input value="8" type="text" class="statistical-item-number">
                    </div>
                </div>
            </div>

            <div class="statistical-section">
                <input value="20 Câu trả lời" type="text" class="statistical-heading">
                <p class="statistical-title">Danh sách</p>
                <div class="wrapper">
                    <div class="pie-wrap">

                        <div class="light-yellow entry">
                            <p>25%</p>
                            <p class="entry-value">Rice</p>
                        </div>

                        <div class="sky-blue entry">
                            <p>25%</p>
                            <p class="entry-value">Pasta</p>
                        </div>

                        <div class="pink entry">
                            <p>12.5%</p>
                            <p class="entry-value">Beans </p>
                        </div>

                        <div class="purple entry">
                            <p> 12.5%</p>
                            <p class="entry-value">Plantain</p>
                        </div>

                        <div class="green entry">
                            <p> 12.5%</p>
                            <p class="entry-value">Potato</p>
                        </div>

                        <div class="wheat entry">
                            <p> 12.5%</p>
                            <p class="entry-value">Yam</p>
                        </div>

                        </div>


                </div>
            </div>

            <div class="statistical-section">
                <input value="20 Câu trả lời" type="text" class="statistical-heading">
                <p class="statistical-title">Danh sách</p>
                <div id="container"></div>
            </div>

            <div class="statistical-section">
                <input value="20 Câu trả lời" type="text" class="statistical-heading">
                <p class="statistical-title">Danh sách</p>
                <div class="container"></div>
            </div>
        </form>

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
        horizonChart()
        handleGetValueSelected()
        addInput()
        deleteChooseInput()
        columnChart()
        formSendTarget()
        deleteForm()
        getDataSetting()
    }

    app()
    // horizon chart
    function horizonChart() {
        var chart = new ej.charts.Chart({
        primaryXAxis: {
            valueType: 'Category',
            title: 'Months',
        },

        primaryYAxis: {
            title: 'Number of Visitors',
        },

        series: [
            {
                type: 'Bar',
                dataSource: [
                    { month: 'Jan', visitors: 50 },
                    { month: 'Feb', visitors: 57 },
                    { month: 'Mar', visitors: 48 },
                    { month: 'Apr', visitors: 60 },
                    { month: 'May', visitors: 70 },
                    { month: 'Jun', visitors: 40 },
                ],
                xName: 'month',
                yName: 'visitors',
            },
        ],
        });
        chart.appendTo('#container');
    }

    // column chart
    function columnChart() {
        var chart = new ej.charts.Chart({
        //Initializing Primary X Axis
        primaryXAxis: {
            valueType: 'Category',
            title: 'Countries',
        },
        //Initializing Primary Y Axis
        primaryYAxis: {
            title: 'Medals in number',
        },

        //Initializing Chart Series
        series: [
            {
                type: 'Column',
                dataSource: [
                    { country: 'USA', medal: 50 },
                    { country: 'China', medal: 40 },
                    { country: 'Japan', medal: 70 },
                    { country: 'Australia', medal: 60 },
                    { country: 'France', medal: 30 },
                ],
                xName: 'country',
                yName: 'medal',
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
        console.log(i,j)
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
