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

function updateStatutButton() {
  if ($('.statut_button').val() == "avenir" || $('.statut_button').val() == "termine") {
    $('.statut_button').html("START")
    $('.statut_button').css("background-color", "green")
  } else if ($('.statut_button').val() == "encours") {
    $('.statut_button').html("END")
    $('.statut_button').css("background-color", "red")
  }
}

function updateStatutTitle(){

  if ($('.statut_button').val() == "avenir") {
    $('.projectStatut').html("A venir")
  } else if ($('.statut_button').val() == "encours") {
    $('.projectStatut').html("En cours")
  } else if ($('.statut_button').val() == "termine") {
    $('.projectStatut').html("Terminé")
  }

}

updateStatutButton()
updateStatutTitle()




function changeStatut(projectID) {
// EN COURS

let statut = $('.statut_button').val();

var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "updatestatut.php?id=" + projectID + "&statut=" + statut, true);
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText)
        let newStatut = this.responseText;
        $('.statut_button').val(newStatut)
        updateStatutButton()
        updateStatutTitle()
    }
};
xmlhttp.send();



}
