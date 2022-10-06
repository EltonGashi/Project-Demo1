
/*MODAL HEADER*/

window.addEventListener('DOMContentLoaded', () =>{
    /*Login MODAL*/
    const overlayLogin = document.querySelector('#overlay-login');
    const loginBtn = document.querySelector('#login-btn');
    const closeLogin = document.querySelector('#close-lglogin');
    

    const loginModal = () => {
        overlayLogin.classList.toggle('hidden');
        overlayLogin.classList.toggle('flex');
    };
    loginBtn.addEventListener('click', loginModal);

    closeLogin.addEventListener('click', loginModal);

    /*Register MODAL*/

    const overlayRegister = document.querySelector('#overlay-register');
    const registerBtn = document.querySelector('#register-btn');
    const closeRegister = document.querySelector('#close-lgregister');

    const registerModal = () => {
        overlayRegister.classList.toggle('hidden');
        overlayRegister.classList.toggle('flex');
    };
    registerBtn.addEventListener('click', registerModal);

    closeRegister.addEventListener('click', registerModal);

 
});


const toggle = () => {
    const nav = document.getElementById("topnav");
    nav.className === "topnav" ? nav.className += " responsive" : nav.className = "topnav";
};




// RATING
var ratedIndex=-1, uID=0;//no Rating

$(document).ready(function(){
    resetStarColors();
    if(localStorage.getItem('ratedIndex')!= null){
        setStars(parseInt(localStorage.getItem('ratedIndex')));
        uID=localStorage.getItem('uID');
    }

    $('.fa-star').on('click',function(){
        ratedIndex=parseInt($(this).data('index'));
        localStorage.setItem('ratedIndex',ratedIndex);
        savetoDB();
    });
    $('.fa-star').mouseover(function(){
        resetStarColors();
        var currentIndex = parseInt($(this).data('index'));
        setStars(currentIndex);
    });
    $('.fa-star').mouseleave(function(){
        resetStarColors();
        if(ratedIndex !=-1)
        setStars(ratedIndex);
    });
});
function savetoDB(){
    $.ajax({
        url:"index.php",
        method:"POST",
        dataType:'json',
        data:{
            save:1,
            uID:uID,
            ratedIndex:ratedIndex
        }, success: function(r){
            uID=r.uid;
            localStorage.setItem('uID', uID);
        }
    })
}

function setStars(max){
    for(var i=0; i<=max; i++)
        $('.fa-star:eq('+i+')').css('color','green');
}

function resetStarColors(){
    $('.fa-star').css('color','black');
}


function sendMail() {
    var params = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value,
    };
    const serviceID = "service_40kbdgs";
    const templateID = "template_l0skm5n";
    emailjs.send(serviceID, templateID, params)
    .then(res=>{
        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("message").value = "";
        console.log(res);
        alert("Your message sent successfully!!")

    })
    .catch(err=>console.log(err));
}
