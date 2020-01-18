let currentUser = "all";
let currentStatut = "encours"

function setUser(user) {
  currentUser = user;

  if (currentUser == "all") {

    $('#title').html("Projets de tous")
  }

  else {
    $('#title').html("Projets de " + currentUser.charAt(0).toUpperCase() + currentUser.substring(1))
  }

}

function setStatut(statut){
  currentStatut = statut;
}


function getProjects() {


      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", "php/getprojects.php?q=" + currentStatut + "&user=" + currentUser, true);
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("ul_list_of_projects").innerHTML = this.responseText;

              $( ".datepicker" ).datepicker({
                dateFormat: 'dd-mm-yy'
              });


          }
      };

      xmlhttp.send();


}

getProjects("encours");

$('.button_statut').click(event => {
  $('.button_statut').removeClass("selected");
  $(event.target).addClass("selected");
})
