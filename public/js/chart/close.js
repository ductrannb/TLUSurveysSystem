function myFunction() {
    const element = document.getElementById("btn");
    element.remove();
}       
const optionClose = document.querySelectorAll(".option-icon")

function handleClose(e){
    console.log(e.target.parentNode.parentNode)
}

document.addEventListener("click",function(e){
    
    if(e.target.matches(".option-icon")){
    e.target.parentNode.parentNode.removeChild(e.target.parentNode)
        console.log(e.target.parentNode.parentNode)
    }
})
