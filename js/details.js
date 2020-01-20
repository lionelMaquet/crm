
function toggleUserParticipation(user, projectID) {

  if ($('#addUserButton').hasClass('hidden')){ // si on est en train de modifier les users

    if ($(event.target).hasClass('hiddenColor')){ // ajouter un user
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", "adduser.php?id=" + projectID + "&user=" + user, true);
      xmlhttp.send();
      $(event.target).removeClass('hiddenColor')
    }


    else { // supprimer un user
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", "deleteuser.php?id=" + projectID + "&user=" + user, true);
      xmlhttp.send();

      $(event.target).addClass('hiddenColor')

      if ($(event.target).hasClass('selectedForTasks')){
        selectFirstUserForTasks()
      }
    }
  }
}


$('#addUserButton').on('click', () => { // fait apparaître les noms masqués et le bouton valider, cache le bouton pour ajouter
  $('.hidden').removeClass('hidden');
  $('#addUserButton').addClass('hidden');
})

$('#validateAddUser').on('click', () => { // fait disparaître les utilisateurs qui n'ont pas été ajoutés, cache le bouton pour confirmer et apparaître l'autre
  $('.hiddenColor').addClass('hidden')
  $('#validateAddUser').addClass('hidden')
  $('#addUserButton').removeClass('hidden')

})

function updateStatutButton() {
  if ($('.statut_button').val() == "avenir") {
    $('.statut_button').html("START")
    $('.statut_button').css("background-color", "green")
  } else if ($('.statut_button').val() == "encours") {
    $('.statut_button').html("END")
    $('.statut_button').css("background-color", "red")
  } else if ($('.statut_button').val() == "termine") {
    $('.statut_button').html("Réouvrir")
    $('.statut_button').css("background-color", "GREY")
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

  let statut = $('.statut_button').val();

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "updatestatut.php?id=" + projectID + "&statut=" + statut, true);
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          let newStatut = this.responseText;
          $('.statut_button').val(newStatut)
          updateStatutButton()
          updateStatutTitle()
      }
  };
  xmlhttp.send();

}





/*MODIFICATION DU BRIEFING ET DES REMARQUES*/

function allowBriefingAndRemarksChange() {


 // cacher les p
$('.briefingOuRemarqueP').addClass('textzoneHidden')
 // Montrer les textarea
$('.briefingOuRemarqueTextarea').removeClass('textzoneHidden')
// donner la meme hauteur que le div à la textarea
let heightOfBriefingP = $('.briefingP').height()

if (heightOfBriefingP > 100) { // empêche la textarea de valoir 0 de haut lorsque le p est vide
  $('.briefingTextarea').css("height", heightOfBriefingP+"px")
}

let heightOfRemarqueP = $('.remarqueP').height()
if (heightOfRemarqueP > 100) {
  $('.remarqueTextarea').css("height", heightOfRemarqueP+"px")
}

 // Insérer le texte de p dans textarea
$('.briefingTextarea').html($('.briefingP').html().replace(/<br\s*[\/]?>/gi, "\n")); // remplacement des <br> par des <\n>, le remplacement inverse s'effectue aussi
$('.remarqueTextarea').html($('.remarqueP').html().replace(/<br\s*[\/]?>/gi, "\n"));
 // cacher bouton +
 $('.modifyButton').addClass('changeStateButtonHidden')
 // montrer bouton OK
 $('.commitButton').removeClass('changeStateButtonHidden')
}



function commitBriefingAndRemarksChange(id) {

  // 1 : cacher les textarea
  $('.briefingOuRemarqueTextarea').addClass('textzoneHidden')
  // 2 : montrer les p
  $('.briefingOuRemarqueP').removeClass('textzoneHidden')
  // 3 : insérer le texte des textarea dans les p
  $('.briefingP').html($('.briefingTextarea').val())
  $('.remarqueP').html($('.remarqueTextarea').val())
  // 4 : cacher bouton OK
  $('.modifyButton').removeClass('changeStateButtonHidden')
  // 5 : montrer bouton +
  $('.commitButton').addClass('changeStateButtonHidden')
  // 6 : appeler la page updatebriefandrem.php pour changer les valeurs dans la db

  var xmlhttp = new XMLHttpRequest();

  let briefingTextAreaWithLineBreaks = $('.briefingTextarea').val().replace(/\n\r?/g, '<br />')
  let remarqueTextAreaWithLineBreaks = $('.remarqueTextarea').val().replace(/\n\r?/g, '<br />')

  xmlhttp.open("GET", "updatebriefandrem.php?id=" + id + "&briefing=" + briefingTextAreaWithLineBreaks + "&remarque=" + remarqueTextAreaWithLineBreaks , true);


  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText)

      }
  };

  xmlhttp.send();
  $(event.target).removeClass('hiddenColor')


}
