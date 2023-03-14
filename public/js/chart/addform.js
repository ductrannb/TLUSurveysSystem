const template =`<div class="form_option--selection">
<div class="row">
    <input type="text" class="col-8" placeholder="Câu hỏi">
    
    <div class="dropdown col-4">
       
            <button style="margin-top:20px ;" class="btn btn-secondary col-10" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="dropdown-title">Trắc nghiệm</p>
               <i  class="fa-solid fa-angle-down dropdown-icon--down "></i>
            </button>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Paragraph')" type="button">Đoạn</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'ShortAnswer')" type="button">Trả Lời Ngắn</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'CheckBox')" type="button">Hộp kiểm</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Multiple')" type="button">Trắc nghiệm</button></li>
        </ul>
      </div>
    <div class="option">
        <div  class="content-option root">
            <input  name="option" class=" ip-option" type="radio">
            <input type="text" placeholder="Tùy chọn">
            <i class="fa-solid fa-xmark  option-icon"></i><br>
        </div>
    </div>
    <div class="option--add">
        <input class="" type="radio">
        <span  class="option-add">Thêm tùy chọn</span>
    </div>
    
   
    <div class="border">

    </div>
    <div class="col-7"> 
    </div>
    <div class="option-btn col-5">
        <p class="form_option--require col-4">Bắt buộc</p>
        <div  id="wrapper">
        <input type="checkbox" name="" class="switch-toggle">
        </div>
        <div class="boder-end"></div>
        
    </div>
    <div class="col-11"></div>
    <i class="col-1 fa-regular btn-icon-trash fa-trash-can"></i>
</div>

</div>
`
const shortAnswer = `<div class="form_option--selection">
<div class="row">
    <input type="text" class="col-8" placeholder="Câu hỏi">
    
    <div class="dropdown col-4">
       
            <button style="margin-top:20px ;" class="btn btn-secondary col-10" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="dropdown-title">Trả lời ngắn</p>
               <i  class="fa-solid fa-angle-down dropdown-icon--down "></i>
            </button>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Paragraph')" type="button">Đoạn</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'ShortAnswer')" type="button">Trả Lời Ngắn</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'CheckBox')" type="button">Hộp kiểm</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Multiple')" type="button">Trắc nghiệm</button></li>
        </ul>
      </div>
      <div class="col-12">
        <input class="text-paragraph" type="" placeholder="Văn bản trả lời ngắn">
    </div>
    <div style="margin-top: 100px" class="border">
    
    </div>
    <div class="col-7"> 
    </div>
    <div class="option-btn col-5">
        <p class="form_option--require col-4">Bắt buộc</p>
        <div  id="wrapper">
        <input type="checkbox" name="" class="switch-toggle">
        </div>
        <div class="boder-end"></div>
        
    </div>
    <div class="col-11"></div>
    <i class="col-1 fa-regular btn-icon-trash fa-trash-can"></i>
</div>

</div>`
const checkBox = `<div class="form_option--selection">
<div class="row">
    <input type="text" class="col-8" placeholder="Câu hỏi">
    
    <div class="dropdown col-4">
       
            <button style="margin-top:20px ;" class="btn btn-secondary col-10" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="dropdown-title">Hộp kiểm</p>
               <i  class="fa-solid fa-angle-down dropdown-icon--down "></i>
            </button>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Paragraph')" type="button">Đoạn</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'ShortAnswer')" type="button">Trả Lời Ngắn</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'CheckBox')" type="button">Hộp kiểm</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Multiple')" type="button">Trắc nghiệm</button></li>
        </ul>
      </div>
      <div class="option">
        <div  class="content-option-checkbox root">
            <input class=" ip-option" type="checkbox">
            <input type="text" name="" id="" placeholder="Tùy chọn">
            <i class="fa-solid fa-xmark  option-icon"></i><br>
        </div>
    </div>
        <div class="option--add">
        <input class="" type="checkbox">
        <span  class="option-add option-add-checkbox">Thêm tùy chọn</span>
    </div>
    
    <div class="border">

    </div>
    <div class="col-7"> 
    </div>
    <div class="option-btn col-5">
        <p class="form_option--require col-4">Bắt buộc</p>
        <div  id="wrapper">
        <input type="checkbox" name="" class="switch-toggle">
        </div>
        <div class="boder-end"></div>
        
    </div>
    <div class="col-11"></div>
<i  class="col-1 fa-regular btn-icon-trash fa-trash-can"></i>
</div>

</div>`
const paragraph = `<div class="form_option--selection">
<div class="row">
    <input type="text" class="col-8" placeholder="Câu hỏi">
    
    <div class="dropdown col-4">
       
            <button style="margin-top:20px ;" class="btn btn-secondary col-10" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="dropdown-title">Đoạn</p>
               <i  class="fa-solid fa-angle-down dropdown-icon--down "></i>
            </button>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Paragraph')" type="button">Đoạn</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'ShortAnswer')" type="button">Trả Lời Ngắn</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'CheckBox')" type="button">Hộp kiểm</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Multiple')" type="button">Trắc nghiệm</button></li>
        </ul>
      </div>
      <div class="col-12">
        <input class="text-paragraph" type="" placeholder="Văn bản trả lời dài">
    </div>
    <div style="margin-top: 100px" class="border">
    
    </div>
    <div class="col-7"> 
    </div>
    <div class="option-btn col-5">
        <p class="form_option--require col-4">Bắt buộc</p>
        <div  id="wrapper">
        <input type="checkbox" name="" class="switch-toggle">
        </div>
        <div class="boder-end"></div>
       
    </div>
    <div class="col-11"></div>
<i  class="col-1 fa-regular btn-icon-trash fa-trash-can"></i>
</div>

</div>` 
const multiple =` <div class="form_option--selection">
<div class="row">
    <input type="text" class="col-8" placeholder="Câu hỏi">
    
    <div class="dropdown col-4">
       
            <button style="margin-top:20px ;" class="btn btn-secondary col-10" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="dropdown-title">Trắc nghiệm</p>
               <i  class="fa-solid fa-angle-down dropdown-icon--down "></i>
            </button>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Paragraph')" type="button">Đoạn</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'ShortAnswer')" type="button">Trả Lời Ngắn</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'CheckBox')" type="button">Hộp kiểm</button></li>
          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Multiple')" type="button">Trắc nghiệm</button></li>
        </ul>
      </div>
      <div class="option">
      <div  class="content-option-multiple root">
      <input name='radio' class=" ip-option" type="radio">
      <input type="text" name="" id="" placeholder="Tùy chọn">
      <i class="fa-solid fa-xmark  option-icon-multiple option-icon"></i><br>
      </div>
    </div>
        <div class="option--add">
        <input class="" type="radio">
        <span  class="option-add option-add-multiple">Thêm tùy chọn</span>
    </div>
    <div class="border">

    </div>
    <div class="col-7"> 
    </div>
    <div class="option-btn col-5">
        <p class="form_option--require col-4">Bắt buộc</p>
        <div  id="wrapper">
        <input type="checkbox" name="" class="switch-toggle">
        </div>
        <div class="boder-end"></div>
    </div>
    <div class="col-11"></div>
<i  class="col-1 fa-regular btn-icon-trash fa-trash-can"></i>
</div>

</div>`
const option =`<div  class="content-option root">
<input name="option" class=" ip-option" type="radio">
<input  type="text" placeholder="Tùy chọn">
<i class="fa-solid fa-xmark  option-icon"></i><br>
</div>`
const optionCheckbox=`<div  class="content-option-checkbox root">
<input  class=" ip-option" type="checkbox">
<input type="text" name="" id="" placeholder="Tùy chọn">
<i class="fa-solid fa-xmark  option-icon"></i><br>
</div>`
const optionmultiple=` <div  class="content-option-multiple root">
<input name='radio' class=" ip-option" type="radio">
<input type="text" name="" id="" placeholder="Tùy chọn">
<i class="fa-solid fa-xmark  option-icon-multiple option-icon"></i><br>
</div>`
// addForm Question
 const checkboxForm=document.querySelector(".form_option-question")
 const addForm=document.querySelector(".plus-tool")
 addForm.addEventListener("click",function(e){
    checkboxForm.insertAdjacentHTML("beforeend",template);

 })
 option 
 const optionQuestion=document.querySelector(".option")
 const addOptions=document.querySelectorAll(".option-add ")
//  const addOption=document.querySelector(".option-add ")
 for(addOption of addOptions) {
  addOption.addEventListener("click",function(e){
    optionQuestion.insertAdjacentHTML("afterend",option);
 })
 }
 
// option checkbox
const optionCheckBox=document.querySelector(".content-option-checkbox")
const addOptionCheckBox=document.querySelector(".option-add-checkbox ")
addOptionCheckBox.addEventListener("click",function(e){
  optionCheckBox.insertAdjacentHTML("afterend",optionCheckbox);
})
// option Multiple
const optionMultiple=document.querySelector(".content-option-multiple")
const addOptionMultiple=document.querySelector(".option-add-multiple")
addOptionMultiple.addEventListener("click",function(e){
  optionMultiple.insertAdjacentHTML("afterend",optionmultiple);
})
// ShortAnswer
 const ShortAnswerForm=document.querySelector(".form_option-shortanswer")
 const addFormShortAnswer=document.querySelector(".plus-tool-answer")
 addFormShortAnswer.addEventListener("click",function(e){
  ShortAnswerForm.insertAdjacentHTML("beforeend",shortAnswer);
 })
//Add form  CheckBox
const CheckBoxForm=document.querySelector(".form_option-checkbox")
 const addFormCheckBox=document.querySelector(".plus-tool-checkbox")
 addFormCheckBox.addEventListener("click",function(e){
  CheckBoxForm.insertAdjacentHTML("beforeend",checkBox);
 })
//Add form  Paragraph
const ParagraphForm=document.querySelector(".form_option-paragraph")
 const addParagraph=document.querySelector(".plus-tool-paragraph ")
 addParagraph.addEventListener("click",function(e){
  ParagraphForm.insertAdjacentHTML("beforeend",paragraph);
 })
 //Add form  Multiple-Choice
const MultipleForm=document.querySelector(".form_option-multiple")
const addMultiple=document.querySelector(".plus-tool-multiple ")
addMultiple.addEventListener("click",function(e){
 MultipleForm.insertAdjacentHTML("beforeend",multiple);
})
const ooption = document.querySelector('.option')
const btnOption = document.querySelector('.option-add')
btnOption.addEventListener("click",function(e){
   
})