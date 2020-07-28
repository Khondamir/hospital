$(document).ready(function() {
	//this is where you'll show your loading gif
  
   login_password_check();
});

function loading_welcome(link) {
	// body...
  $('#signInForm').hide();
  $('#welcome_animation').show();
	setTimeout(function(){
   	window.location=link;}, 4000);
}

function login_password_check(argument) {
  $('#signInForm').on('submit',function(e) {
      e.preventDefault();
      $.post('php/post_router.php?operation=login_check', $('#signInForm').serialize(), function(data) {
           $('#signInForm')[0].reset();

           if (data==1) {
            page = 1;
            loading_welcome("main/");
           }else if(data==2){
            page = 2;
            loading_welcome("main/");         
           }else{

           }

          });
  });

}