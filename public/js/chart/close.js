function myFunction() {
    const element = document.getElementById("btn");
    element.remove();
}       
function handleClose(e){
    console.log(e.target.parentNode.parentNode)
}

document.addEventListener("click",function(e){
    
    if(e.target.matches(".option-icon")){
    e.target.parentNode.parentNode.removeChild(e.target.parentNode)
        console.log(e.target.parentNode.parentNode)
    }
})
const a = document.getElementsByClassName('form_option--selection')
console.log(a)
document.addEventListener("click",function(e){
    
    if(e.target.matches(".btn-icon-trash")){
    e.target.parentNode.parentNode.removeChild(e.target.parentNode)
        console.log(e.target.parentNode.parentNode)
    }
})

