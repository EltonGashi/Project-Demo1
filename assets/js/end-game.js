
/*MODAL HEADER*/

// const autoprefixer = require("autoprefixer");

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

$(window).scroll(function(){
    if ($(window).scrollTop() >= 20) {
        $('nav').addClass('fixed-header');
    }
    else {
        $('nav').removeClass('fixed-header');
    }
});


//parseInt($('.fa-star').parent().data('user')) RATING
var ratedIndex=-1,cardID=-1, uID=0;//no Rating
$(document).ready(function(){
    resetStarColors();
    var cards =document.querySelectorAll('.fa-star');
    if(localStorage.getItem('ratedIndex') !=null){
        setStars(parseInt(localStorage.getItem('ratedIndex')),parseInt(localStorage.getItem('cardID')));//ME e configuru hala
        uID = localStorage.getItem('uID');
    }
    
    cards.forEach(card => {
        card.addEventListener('click', () => {
            ratedIndex = parseInt($(card).data("index"));
            cardID = parseInt($(card).parent().data("index"));
            localStorage.setItem('ratedIndex', ratedIndex);
            localStorage.setItem('cardID',cardID);
            saveToTheDB();
        });
        
        card.addEventListener('mouseover', () => {
            resetStarColors();
            var currentIndex= parseInt($(card).data("index"));
            setStars(currentIndex,card);
        });
        card.addEventListener('mouseout', () => {
            resetStarColors();
            if(ratedIndex != -1){
               setStars(ratedIndex,card);
            }
        });

    });
});
function saveToTheDB(){
    $.ajax({
        url: "index.php",
        method:"POST",
        dataType:'json',
        data:{
            save:1,
            uID: uID,
            cardID: cardID,
            ratedIndex: ratedIndex
        }, success: function (r) {
            uID = r.id;
            localStorage.setItem('uID',uID);
       }
    });
}

function setStars(max,card){
    $('.fa-star').css('cursor','pointer');
    for(var i=0; i<=max; i++){
      $( card ).prevAll().css( "color", "green" );
      $( card ).css( "color", "green" );
    }
};

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



jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
	$('.misha_loadmore').click(function(){
 
		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
			'page' : misha_loadmore_params.current_page
		};
 
		$.ajax({ // you can also use $.post here
			url : misha_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) { 
					button.text( 'More posts' ).prev().before(data); // insert new posts
					misha_loadmore_params.current_page++;
 
					if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page ) 
						button.remove(); // if last page, remove the button
 
					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});
});