// GET TASKS


function replaceTasksWith(list){

  $('#listeTaches').html(list);

}

$(document).on('click',".username", function(){

  let user = event.target.id
  let id = projectID
  console.log(user)
  console.log("hi")

  console.log(event.target)

  $('.username').removeClass('selectedForTasks');

  $(event.target).addClass('selectedForTasks');

  $('.hiddenValueCurrentUser').val(user) // pour l'ajout de taches, savoir à qui l'ajouter


  $('#nameOfCurrentUserForTasks').html(user)

  var xmlhttp = new XMLHttpRequest();

  xmlhttp.open("GET", "gettasks.php?user="+user+"&projet_id="+id, true);
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          let listeTache = this.responseText;
          replaceTasksWith(listeTache);

      }
  };
  xmlhttp.send();

})


// ADD TASK
