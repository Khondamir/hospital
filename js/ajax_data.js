// in order to identify whether it is doctor's or analyse maker's page
var page_num=null;

// checking session id after login
function check_session_id() {
  // body...
    $.ajax({
    type : 'GET',
    url  : "../php/post_router.php?operation=get_session_id",
    dataType:"json",
   success:function(data){
    // session id came as data it is number to identify
    page_num = data;

    // if person is doctor make ...
    if (data==2) {
     // doctors_page();
      // make all input elements readonly not editable
       $('#analyse_A1 input').attr("readonly", true);

       // hide save button on doctor's page
       $('#save_A1').hide();
    }
    }
  });
}



// send request of searching word
function load_data(search)
 {
  $.ajax({
    type : 'GET',
    url  : "../php/router.php?operation=searchResult&value="+search+"",
    dataType:"json",
   success:function(data)
   {
    // value data from qeury result
    search_data = data;
    body = '';
    for (var i = 0; i < data.length; i++) {

      // make table rows after search result on side bar
      body += '<tr id="'+i+'"><td>'+data[i].register_num+'</td><td>'+data[i].name+' '+data[i].surname+' '+data[i].fath_name+'</td></tr>';
      
    }
    $('#search_result_body').html(body);
    resultRowClick(search_data);
   }
  });
 }




 function PostAnalyseA1(){

  $('#analyse_A1').on('submit',function(e) {
      e.preventDefault();
      $.post( '../php/post_router.php?operation=analyse_a1', $('#analyse_A1').serialize(), function(data) {
           $('#analyse_A1')[0].reset();
      });
});
}



function GetAnalyse1(person_id) {
  // body...
  var a1_body_data;
   $.ajax({
    type : 'GET',
    url  : "../php/router.php?operation=getAnalyse1_result&value="+person_id+"",
    async: false,
    dataType:"json",
   success:function(data)
   {
    a1_body_data = data;
    length = data.length;
   }
  });

  return a1_body_data;
}
