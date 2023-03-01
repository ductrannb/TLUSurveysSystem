function login(e){
    event.preventDefault();
    var username =  document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var user = localStorage.getItem(username)
    var data = JSON.parse(user);
    
    if(user==null){
        alert("vui lòng nhập username password")
    }
    else if(username==data.username && password==data.password){
        alert("Đăng nhập thành công")
        window.location.href="{{ asset('api/formfieldoption') }}"
    }
    else("Đăng nhập thất bại")
}   