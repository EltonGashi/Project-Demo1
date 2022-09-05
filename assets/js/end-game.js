
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



