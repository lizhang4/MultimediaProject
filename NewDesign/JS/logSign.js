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

// document.querySelector(".login-button").addEventListener("click", () => {
//     console.log("Login Click");
//     document.querySelector(".login").classList.add("active");
//     $(".register").removeClass("active");
// });

$(".login-button").click(function () {
    $(".login").addClass("active");
    $(".register").removeClass("active");

});

$(".register_open").click(function () {
    $(".register").addClass("active")
    $(".login").removeClass("active");
});

$(".login_close").click(function() {
    $(".login").removeClass("active");
})

$(".register_close").click(function() {
    $(".register").removeClass("active");
})

// form.onsubmit = (u) =>{
//     u.preventDefault();
//     if(uInput.value == ""){
//         uField.classList.add("shake", "error");
//     }
//     else{
//         uField.classList.remove("error");
//     }
//     if(pInput.value == ""){
//         pField.classList.add("shake", "error");
//     }
//     else{
//         pField.classList.remove("error");
//     }
//     setTimeout(() =>{
//         uField.classList.remove("shake");
//         pField.classList.remove("shake");
//     }, 500);

//     // uInput.onkeuyp = ()=>{
//     //     if(uInput.value == ""){
//     //        uField.classList.add("error"); 
//     //     }
//     //     else{
//     //         uField.classList.remove("error");
//     //     }
//     // }

//     // pInput.onkeuyp = ()=>{
//     //     if(pInput.value == ""){
//     //        pField.classList.add("error"); 
//     //     }        
//     //     else{
//     //         pField.classList.remove("error");
//     //     }
//     // }

//     if(!uField.classList.contains("error") && !pField.classList.contains("error")){
//         window.location.href = "#";
//         console.log("submitted");
//     }
// }
// let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
// !eInput.value.match(pattern)
// let errortext = eField.querySelector(".error-text");
// (eInput.value != "")? errortext.innerText = "enter a valid email address" : errortext.innerText = "Email can't be blank"



// form2.onsubmit = (e) =>{
//     e.preventDefault();
//     if(ruInput.value == ""){
//         ruField.classList.add("shake", "error");
//     }
//     else{
//         ruField.classList.remove("error");
//     }
//     if(rpInput.value == ""){
//         rpField.classList.add("shake", "error");
//     }
//     else{
//         rpField.classList.remove("error");
//     }
//     if(rrpInput.value == ""){
//         rrpField.classList.add("shake", "error");
//     }
//     else{
//         rrpField.classList.remove("error");
//     }
//     if(reInput.value == ""){
//         reField.classList.add("shake", "error");
//     }
//     else if (!reInput.value == ""){
//         check_email();
//     }
//     else{
//         reField.classList.remove("error");
//     }
//     setTimeout(() =>{
//         ruField.classList.remove("shake");
//         rpField.classList.remove("shake");
//         rrpField.classList.remove("shake");
//         reField.classList.remove("shake");
//     }, 500);

//     function check_email(){
//         let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
//         if(!reInput.value.match(pattern)){
//             reField.classList.add("shake", "error");
//             let errortext = reField.querySelector(".error-text");
//             (reInput.value != "")? errortext.innerText = "enter a valid email address" : errortext.innerText = "Email can't be blank";
//         }
//         else{
//             reField.classList.remove("error");
//         }
//     }

//     // uInput.onkeuyp = ()=>{
//     //     if(uInput.value == ""){
//     //        uField.classList.add("error"); 
//     //     }
//     //     else{
//     //         uField.classList.remove("error");
//     //     }
//     // }

//     // pInput.onkeuyp = ()=>{
//     //     if(pInput.value == ""){
//     //        pField.classList.add("error"); 
//     //     }        
//     //     else{
//     //         pField.classList.remove("error");
//     //     }
//     // }

//     if(!ruField.classList.contains("error") && !rpField.classList.contains("error") && 
//     !rrpField.classList.contains("error") && !reField.classList.contains("error")){
//         // window.location = "./includes/signup.inc.php";
//         console.log("submitted");
//     }
// }


function loginErrorHandler() {
    if(uInput.value == ""){
        uField.classList.add("shake", "error");
    }
    else{
        uField.classList.remove("error");
    }
    if(pInput.value == ""){
        pField.classList.add("shake", "error");
    }
    else{
        pField.classList.remove("error");
    }
    setTimeout(() =>{
        uField.classList.remove("shake");
        pField.classList.remove("shake");
    }, 500);

    // uInput.onkeuyp = ()=>{
    //     if(uInput.value == ""){
    //        uField.classList.add("error"); 
    //     }
    //     else{
    //         uField.classList.remove("error");
    //     }
    // }

    // pInput.onkeuyp = ()=>{
    //     if(pInput.value == ""){
    //        pField.classList.add("error"); 
    //     }        
    //     else{
    //         pField.classList.remove("error");
    //     }
    // }

    if(!uField.classList.contains("error") && !pField.classList.contains("error")){
        // window.location.href = "#";
        console.log("submitted");
    }
}

function registrationErrorHandler()  {
    
    if(ruInput.value == ""){
        $(".error-text-username").html("Username can't be blank");
        ruField.classList.add("shake", "error");
    }
    else{
        ruField.classList.remove("error");
    }
    if(rpInput.value == ""){
        rpField.classList.add("shake", "error");
    }
    else{
        rpField.classList.remove("error");
    }
    if(rrpInput.value == ""){
        rrpField.classList.add("shake", "error");
    }
    else{
        rrpField.classList.remove("error");
    }
    if(reInput.value == ""){
        reField.classList.add("shake", "error");
    }
    else if (!reInput.value == ""){
        check_email();
    }
    else{
        reField.classList.remove("error");
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
            reField.classList.remove("error");
        }
    }

    

    // uInput.onkeuyp = ()=>{
    //     if(uInput.value == ""){
    //        uField.classList.add("error"); 
    //     }
    //     else{
    //         uField.classList.remove("error");
    //     }
    // }

    // pInput.onkeuyp = ()=>{
    //     if(pInput.value == ""){
    //        pField.classList.add("error"); 
    //     }        
    //     else{
    //         pField.classList.remove("error");
    //     }
    // }

    if(!ruField.classList.contains("error") && !rpField.classList.contains("error") && 
    !rrpField.classList.contains("error") && !reField.classList.contains("error")){
        // window.location = "./includes/signup.inc.php";
        console.log("submitted");
        return true;
    }

    return false;

    
}

$(document).ready(function(){
    // $('#login_form').submit(function(e){
    //     $.ajax({
    //         type: "POST",
    //         url: "action.php",
    //         data: $("#login_form").serialize(),
    //         success:function(data)
    //         {
    //             if(data == '1')
    //             {
    //                 $('#login_form').hide();
    //                 location.reload();
    //             }
    //             else if(data == '2')
    //             {
    //                 alert('wrong password');
    //             }
    //             else if(data == '3')
    //             {
    //                 alert('no such data please register');
    //                 location.reload();
    //             }
    //             else if(data == '4')
    //             {
    //                 alert('password is blank');
    //             }
    //             else if(data == '5')
    //             {
    //                 alert('username is blank');
    //             }
    //             else if(data == '6')
    //             {
    //                 alert('both field are required');
    //             }
    //             else
    //             {
    //                 alert('error');
    //             }
    //         }
    //     });
    //     e.preventDefault();
    // });

    // $('#logout').click(function(){
    //     var action = 'logout';
    //     $.ajax({
    //         url: "action.php",
    //         method: "POST",
    //         data: {action:action},
    //         success:function()
    //         {
    //             location.reload();
    //         }
    //     });
    // });

    
});


