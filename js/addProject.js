$(function() {
   $("#datepicker").datepicker({
     dateFormat: 'dd/mm/yy'
   })
});


$('.selectUserNewProject').click(event => {

  if ( $(event.target).val() == "non" ) {
    $(event.target).val("oui");
    $(event.target).css('color', 'green')
  }

  else {
    $(event.target).val("non");
    $(event.target).css('color', 'white')
  }

})


$('#selectUserGNewProject').click(event => {

  if ($('.userGHidden').val() == "non") {
    $(event.target).css('color', 'green')
    $('.userGHidden').val("oui")
  }

  else {
    $(event.target).css('color', 'white')
    $('.userGHidden').val("non")
  }

})

$('#selectUserJNewProject').click(event => {

  if ($('.userJHidden').val() == "non") {
    $(event.target).css('color', 'green')
    $('.userJHidden').val("oui")
  }

  else {
    $(event.target).css('color', 'white')
    $('.userJHidden').val("non")
  }

})

$('#selectUserLNewProject').click(event => {

  if ($('.userLHidden').val() == "non") {
    $(event.target).css('color', 'green')
    $('.userLHidden').val("oui")
  }

  else {
    $(event.target).css('color', 'white')
    $('.userLHidden').val("non")
  }

})
