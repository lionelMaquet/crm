let currentUser = "all";

function setUser(user) {
  currentUser = user;
}


function getProjects(statut) {



    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "php/getprojects.php?q=" + statut + "&user=" + currentUser, true);
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ul_list_of_projects").innerHTML = this.responseText;

            console.log(this.responseText);
        }
    };

    xmlhttp.send();


}

getProjects("avenir");

$('.button_statut').click(event => {
  $('.button_statut').removeClass("selected");
  $(event.target).addClass("selected");
})

function resetStatutHighlight() {
  $('.button_statut').removeClass("selected");
  $('.avenir').addClass("selected");



}
