// GET TASKS

let usernameOfSelectedUser;

// le double $$ est pour convertir l'élément en objet jquery. Sinon le hasClass() ne fonctionne pas
if (!$($('.username').get(0)).hasClass('hiddenColor')){
  selectUserForTask($('.username')[0])
  usernameOfSelectedUser = $('.username')[0].id
}

else if (!$($('.username').get(1)).hasClass('hiddenColor')){
  selectUserForTask($('.username')[1])
  usernameOfSelectedUser = $('.username')[1].id
}

else if (!$($('.username').get(2)).hasClass('hiddenColor')){
    selectUserForTask($('.username')[2])
    usernameOfSelectedUser = $('.username')[2].id
  }



function refreshListOfTasks(){

  var xmlhttp = new XMLHttpRequest();

  xmlhttp.open("GET", "gettasks.php?user="+usernameOfSelectedUser+"&projet_id="+projectID, true);

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
  usernameOfSelectedUser = target.id
  refreshListOfTasks()

}

$(document).on('click',".username", function(){

  selectUserForTask(event.target)

})









// DELETE TASK

$(document).on('click', ".deleteTaskButton", function() {

  let taskId = $(event.target).val()
  console.log(taskId)

  var xmlhttp = new XMLHttpRequest();

  xmlhttp.open("GET", "deleteTask.php?taskid="+taskId, true);

  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          refreshListOfTasks();

      }
  };
  xmlhttp.send();




})
