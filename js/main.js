var link_number=1;
$(document).ready(function(){

  // a1 analiz input show
  $('#a1_body').show();
  $('#pageMainAnalyse').show();



///**********************************///
   var search_data;
    // on keyboard pressed make search 
   $('#search').keyup(function(){
    var search = $(this).val(); // get search input value
    // make search when at least there are there letters
    if(search != '' && search.length >= 3)
    {
      // use function load_data to search from database get request
     load_data(search);
    }
    else
    {}
   });
///***********************************///





// ###############Using PostAnalyseA1 check if submit is button is pressed
 PostAnalyseA1();
// ###############

//*************** Check who logged in doctor or analysist
 check_session_id();
//***************



//############################
navbar_Control();
// Control pages of navbar is here


//###############################
// Header Analyse types clicked show and hide
  $('#a1_link').click(function(){
    hide_body();
    $('#a1_body').show();
    link_number=1;

  });
  $('#a2_link').click(function(){
    hide_body();
    $('#a2_body').show();
    link_number=2;
  });
  $('#a3_link').click(function(){
    hide_body();
    $('#a3_body').show();
    link_number=3;
  });
  $('#a4_link').click(function(){
    hide_body();
    $('#a4_body').show();
    link_number=4;
  });
  $('#a5_link').click(function(){
    hide_body();
    $('#a5_body').show();
    link_number=5;
  });
//###############################

});


function navbar_Control() {
  // body...
  $('#navMainLinkHosp').click(function(){
    navbar_hidePage();
    $('#mainPageHospital').show();
  });
  $('#nav_analyse').click(function(){
    navbar_hidePage();
    $('#pageMainAnalyse').show();
  });

  $('#nav_uziwoman').click(function(){
    navbar_hidePage();
    $('#page_uzi_woman').show();
  });

  $('#nav_uziman').click(function(){
    navbar_hidePage();
    $('#page_uzi_man').show();
  })

}

function navbar_hidePage() {
  // body...
  $('#mainPageHospital').hide();
  $('#pageMainAnalyse').hide();
  $('#page_uzi_woman').hide();
  $('#page_uzi_man').hide();
}



//******************* Analyse types' forms hide
function hide_body() {
  // body...
  $('#a1_body').hide();
  $('#a2_body').hide();
  $('#a3_body').hide();
  $('#a4_body').hide();
  $('#a5_body').hide();
}



// Make inputs in forms readonly
function read_only() {
  // body...
  $("analyse_A1 input").attr("readonly", true);
}




// Get date and show it on submit Analyse form
function todayValue(){
    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear()+"-"+(month)+"-"+(day);
    $('input[name="datetime"]').val(today);
}



}