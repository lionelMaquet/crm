$(document).on('click', '#login_button', function() {

  let username = $('#username_input').val();
  let password = $('#password_input').val();

  var xmlhttp = new XMLHttpRequest();

  xmlhttp.open("GET", `./php/login.php?username=${username}&password=${password}`, true);
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

        if (this.responseText == "validationOK"){
          window.location.href = "";
        }

        else {

          if (this.responseText == 'problem'){
            console.log('problem')

            // ...

          }
        }
      }
  };

  xmlhttp.send();


})
