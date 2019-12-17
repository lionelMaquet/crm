function addUser(user, projectID) {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "adduser.php?id=" + projectID + "&user=" + user, true);
  xmlhttp.send();
  $(event.target).removeClass('hiddenColor')

}


$('#addUserButton').on('click', () => {
  $('.hidden').removeClass('hidden')
  $('#addUserButton').addClass('hidden');
})

$('#validateAddUser').on('click', () => {
  $('.hiddenColor').addClass('hidden')
  $('#validateAddUser').addClass('hidden')
  $('#addUserButton').removeClass('hidden')

})
