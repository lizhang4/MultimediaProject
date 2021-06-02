document.querySelector(".login_open").addEventListener("click",function(){
    document.querySelector(".login").classList.add("active");
});

document.querySelector(".close_login").addEventListener("click",function(){
    document.querySelector(".login").classList.remove("active");
});

document.querySelector(".register_open").addEventListener("click",function(){
    document.querySelector(".register").classList.add("active");
});

document.querySelector(".close_register").addEventListener("click",function(){
    document.querySelector(".register").classList.remove("active");
});
