/// <reference path="../../typings/globals/jquery/index.d.ts" />


const form = document.querySelector("form");
const uField = form.querySelector(".username");
const uInput = uField.querySelector("input");
const pField = form.querySelector(".password");
const pInput = pField.querySelector("input");

const form2 = document.getElementById("form2");
const ruField = form2.querySelector(".username");
const ruInput = ruField.querySelector("input");
const rpField = form2.querySelector(".password");
const rpInput = rpField.querySelector("input");
const rrpField = form2.querySelector(".repassword");
const rrpInput = rrpField.querySelector("input");
const reField = form2.querySelector(".email");
const reInput = reField.querySelector("input");
const overlay = document.getElementById("overlay");

function openLoginPage() {
    $(".login").addClass("active");
    $(".register").removeClass("active");
    removeErrors();
}

$(".login-button").click(function () {
    $(".login").addClass("active");
    $(".register").removeClass("active");
    removeErrors();

});


$(".register_open").click(function () {
    $(".register").addClass("active")
    $(".login").removeClass("active");
    removeErrors();
});

$(".login_close").click(function() {
    $(".login").removeClass("active");
});

$(".register_close").click(function() {
    $(".register").removeClass("active");
});

// function to remove all errors class
function removeErrors() {
    uField.classList.remove("error");
    pField.classList.remove("error");
    ruField.classList.remove("error");
    rpField.classList.remove("error");
    rrpField.classList.remove("error");
    reField.classList.remove("error");

}

// function to call when summiting login form 
function loginErrorHandler() {
    removeErrors();
    if(uInput.value == ""){
        uField.classList.add("shake", "error");
        
        var username = $("#form1").children(".username");

        username.children(".error-text").html("Username cannot be blank!");
    }
    else{
        // uField.classList.remove("error");
        
        
    }
    if(pInput.value == ""){
        pField.classList.add("shake", "error");
        var pass = $("#form1").children(".password");

        pass.children(".error-text").html("Password cannot be blank!");
    }
    else{
        // pField.classList.remove("error");
    }

    setTimeout(() =>{
        uField.classList.remove("shake");
        pField.classList.remove("shake");
    }, 500);

    if(!uField.classList.contains("error") && !pField.classList.contains("error")){
        return true;

        
    }

    return false;

    
}


// function to call when summiting registration form
function registrationErrorHandler()  {
    removeErrors();
    if(ruInput.value == ""){
        $(".error-text-username").html("Username can't be blank");
        ruField.classList.add("shake", "error");
    }
    else{
        // ruField.classList.remove("error");
    }
    
    if(rpInput.value == ""){
        rpField.classList.add("shake", "error");

    }
    else{
        // rpField.classList.remove("error");
    }

    if(rrpInput.value == ""){
        rrpField.classList.add("shake", "error");
    }
    else{
        // rrpField.classList.remove("error");
    }

    if(reInput.value == ""){
        reField.classList.add("shake", "error");

    }
    else if (!reInput.value == ""){
        check_email();
    }
    else{
        // reField.classList.remove("error");
    }
    setTimeout(() =>{
        ruField.classList.remove("shake");
        rpField.classList.remove("shake");
        rrpField.classList.remove("shake");
        reField.classList.remove("shake");
    }, 500);

    function check_email(){
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if(!reInput.value.match(pattern)){

            reField.classList.add("shake", "error");
            let errortext = reField.querySelector(".error-text");
            (reInput.value != "")? errortext.innerText = "enter a valid email address" : errortext.innerText = "Email can't be blank";
        }
        else{
            // reField.classList.remove("error");
        }
    }

    if(!ruField.classList.contains("error") && !rpField.classList.contains("error") && !rrpField.classList.contains("error") && !reField.classList.contains("error")){
        return true;
    }

    return false;
}



