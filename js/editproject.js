// la fonction datepicker de JQUERY est appelée dans projet.js lorsque les projets sont chargés.


$(document).on('click', '.img_edit_pencil', function(){

    let parent = $(event.target).parent(); // le parent est le <li>

    // cache le bouton pour éditer, montre celui pour commit et supprimer
    $(event.target).addClass('hidden')
    parent.find('.img_commit_pencil').removeClass('hidden')
    parent.find('.img_delete_project').removeClass('hidden')

    //stoppe le lien pour pouvoir éditer
    let linkLocation = parent.find('a').attr('href');
    parent.find('a').removeAttr('href')

    //affiche le textarea avec la valeur du titre
    let title = parent.find('h2').html()
    parent.find('h2').addClass('hidden')
    parent.find('textarea').val(title)
    parent.find('textarea').removeClass('hidden')

    //affiche le datepicker avec la valeur de base déjà entrée
    let date = parent.find('p').data("value")
    parent.find('p').addClass('hidden')
    parent.find('input').val(date);
    parent.find('input').removeClass('hidden')

    // remettre le lien
    // parent.find('a').attr("href", linkLocation);

})

$(document).on('click', '.img_commit_pencil', function(){

  let parent = $(event.target).parent(); // le parent est le <li>
  let projectID = $(event.target).data('projet-id');
  let newTitle = parent.find('textarea').val()
  let newDate = parent.find('input').val()

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", `php/editproject.php?action=change&projectID=${projectID}&title=${newTitle}&date=${newDate}`, true);
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        getProjects()

      }
  };

  xmlhttp.send();

})


$(document).on('click', '.img_delete_project', function(){

  let projectID = $(event.target).data('projet-id');
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", `php/editproject.php?action=delete&projectID=${projectID}`, true);
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        getProjects()
      }
  };

  xmlhttp.send();

})
