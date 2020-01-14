// GET TASKS


function refreshListOfTasks(username){

  var xmlhttp = new XMLHttpRequest();

  xmlhttp.open("GET", "gettasks.php?user="+username+"&projet_id="+projectID, true);

  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          let listeTache = this.responseText;
          $('#listeTaches').html(listeTache);

      }
  };

  xmlhttp.send();

}

function selectUserForTask(target){ // target is the p

  $('.username').removeClass('selectedForTasks');
  $(target).addClass('selectedForTasks');
  $('.hiddenValueCurrentUser').val(target.id) // pour l'ajout de taches, savoir à qui l'ajouter
  $('#nameOfCurrentUserForTasks').html(target.id)
  refreshListOfTasks(target.id)

}

$(document).on('click',".username", function(){

  selectUserForTask(event.target)

})




// le double $$ est pour convertir l'élément en objet jquery. Sinon le hasClass() ne fonctionne pas
if (!$($('.username').get(0)).hasClass('hiddenColor')){
  selectUserForTask($('.username')[0])
}

else if (!$($('.username').get(1)).hasClass('hiddenColor')){
  selectUserForTask($('.username')[1])}

else if (!$($('.username').get(2)).hasClass('hiddenColor')){
    selectUserForTask($('.username')[2])}
