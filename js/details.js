console.log('wow')

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

$('.briefingTextarea').html($('.briefingP').html())
$('.remarqueTextarea').html($('.remarqueP').html())


 // cacher bouton +

 $('.modifyButton').addClass('changeStateButtonHidden')

 // montrer bouton OK

 $('.commitButton').removeClass('changeStateButtonHidden')

}

function updatebriefingandrem(projectID, briefing, remarques){



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
  xmlhttp.open("GET", "updatebriefandrem.php?id=" + id + "&briefing=" + $('.briefingTextarea').val() + "&remarque=" + $('.remarqueTextarea').val() , true);
  console.log("updatebriefandrem.php?id=" + id + "&briefing=" + $('.briefingTextarea').val() + "&remarque=" + $('.remarqueTextarea').val())
  xmlhttp.send();
  $(event.target).removeClass('hiddenColor')


}


function getUserTasksJulien(id){
  xmlhttp.open("GET", "gettasks.php&user=julien&projet_id="+id, true);
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          let newStatut = this.responseText;
          console.log(newStatut)

      }
  };
  xmlhttp.send();

}

function replaceTasksWith(list){

  $('#listeTaches').html(list);

}

$(document).on('click',".username", function(){

  let user = event.target.id
  let id = projectID
  console.log(user)
  console.log("hi")

  console.log(event.target)

  $('.username').removeClass('red');

  $(event.target).addClass('red')

  $('#nameOfCurrentUserForTasks').html(user)

  var xmlhttp = new XMLHttpRequest();

  xmlhttp.open("GET", "gettasks.php?user="+user+"&projet_id="+id, true);
  console.log("gettasks.php?user=julien&projet_id="+id)
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          let listeTache = this.responseText;
          replaceTasksWith(listeTache);

      }
  };
  xmlhttp.send();



})
