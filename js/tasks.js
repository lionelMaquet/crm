
// SELECTION D'UN UTILISATEUR

let usernameOfSelectedUser;

function selectFirstUserForTasks() {

  // le double $$ est pour convertir l'élément en objet jquery. Sinon le hasClass() ne fonctionne pas
  if (!$($('.username').get(0)).hasClass('hiddenColor')){
    console.log('first should')
    selectUserForTask($('.username').get(0))
    usernameOfSelectedUser = $('.username').get(0).id
  }

  else if (!$($('.username').get(1)).hasClass('hiddenColor')){
    console.log('second should')
    selectUserForTask($('.username').get(1))
    usernameOfSelectedUser = $('.username').get(1).id
  }

  else if (!$($('.username').get(2)).hasClass('hiddenColor')){
    console.log('third should')
      selectUserForTask($('.username').get(2))
      usernameOfSelectedUser = $('.username').get(2).id
    }

}

selectFirstUserForTasks()


function selectUserForTask(target){ // target is the p

    $('.username').removeClass('selectedForTasks');
    $(target).addClass('selectedForTasks');
    $('.hiddenValueCurrentUser').val(target.id) // pour l'ajout de taches, savoir à qui l'ajouter
    $('#nameOfCurrentUserForTasks').html(target.id)
    usernameOfSelectedUser = target.id
    refreshListOfTasks()

}

$(document).on('click',".username", function(){

    if  (!$('#addUserButton').hasClass('hidden')){
    selectUserForTask(event.target)
  }
})


// RAFRAICHISSEMENT DES LISTES

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



// ADD TASK


$(document).on('click', ".addTaskButton", function() {

  let username = usernameOfSelectedUser
  let description = $('.textareaAddTask').val()


  var xmlhttp = new XMLHttpRequest();
  let url = "addTask.php?projectID="+projectID+"&username="+username+"&description="+description
  url = encodeURI(url);

  xmlhttp.open("GET", url, true);

  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          refreshListOfTasks();
          $('.textareaAddTask').val('')
      }

  };
  xmlhttp.send();

})


// MARQUER TACHE COMME FAITE

function changerStyleStatutTache(element){
  if (element.hasClass('taskDone')){
    element.removeClass('taskDone')
  }else {
    element.addClass('taskDone')
  }
}

$(document).on('click', ".taskDiv p", function(){

  let taskID = $(event.target).next().val()
  let p = $(event.target)


  var xmlhttp = new XMLHttpRequest();

  xmlhttp.open("GET", "editTask.php?q=taskstatut&taskid="+taskID, true);

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText)
        changerStyleStatutTache(p)

    }


  };
  xmlhttp.send();

})
