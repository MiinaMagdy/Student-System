const welcome = document.getElementById("welCome");
const signUpBox = document.getElementById("signUp");
const loginBox = document.getElementById("logIn");

let lis = document.getElementsByClassName("links")[0].getElementsByTagName("li");
console.log(lis);
const slide1 = document.getElementById("firstSign");
const slide2 = document.getElementById("secondSign");

function toSignUp(){
    
    loginBox.style.display = "none";
    loginBox.style.opacity = "0";
    welcome.style.display = "none";
    welcome.style.opacity = "0";

    signUpBox.style.display = "block";
    window.setTimeout((function () {
        document.body.offsetHeight;
        signUpBox.style.opacity = "1";
    }), 0.3);
    //Remove class from element li
    lis[0].removeAttribute("class");
    lis[1].removeAttribute("class");
    
    lis[2].setAttribute("class", "active");
    
}

function toLogin(){

    signUpBox.style.display="none";
    signUpBox.style.opacity = "0";
    welcome.style.display = "none";
    welcome.style.opacity = "0";
    
    loginBox.style.display = "block";
    window.setTimeout((function () {
        document.body.offsetHeight;
        loginBox.style.opacity = "1";
    }), 0.3);
    lis[0].removeAttribute("class");
    lis[2].removeAttribute("class");
    lis[1].setAttribute("class", "active");

}

function toHome(){

    signUpBox.style.opacity="0";
    loginBox.style.opacity="0";
    signUpBox.style.display="none";
    loginBox.style.display="none";
    
    welcome.style.display="block";
    window.setTimeout((function () {
        document.body.offsetHeight;
        welcome.style.opacity="1";
    }), 0.3);
    lis[0].setAttribute("class", "active");
    lis[1].removeAttribute("class");
    lis[2].removeAttribute("class");
    
}

function next(){
        slide1.style.display = "none";
        slide1.style.opacity = "0";
        alert('HIII');
        const inputs = document.getElementsByClassName("filled");
        console.log(inputs);
        slide2.style.display = "block";
        if(Object.values(inputs).filter(input => input.value == "").length == 0){
            window.setTimeout((function () {
                document.body.offsetHeight;  
                slide2.style.opacity = "1";
            }), 0.5);
        }
}
