let d = new Date();
let currentMonth = d.getMonth()+1;
let currentYear = d.getFullYear();
let arrayOfMonths = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre']





function getGrid(month, year){

  let date = new Date();

  let numberOfDaysInMonth = new Date(year, month, 0).getDate();
  let dayOfWeekOfFirstDay = new Date(year + "-" + month + "-01").getDay();


  var xmlhttp = new XMLHttpRequest();

  xmlhttp.open("GET", `./agenda/getgridofdates.php?y=${year}&m=${month}&n=${numberOfDaysInMonth}&f=${dayOfWeekOfFirstDay}&c=`, true);
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

          $('.date-grid').html(this.responseText);

          $('.date-grid button:first-child').css('grid-column', dayOfWeekOfFirstDay.toString())
          $('.month-indicator').html(arrayOfMonths[month-1]);
          $('.year-indicator').html(year);

        }

      }

  xmlhttp.send();

}


getGrid(currentMonth, currentYear);

$(document).on('click', '.next-month', function(){

  currentMonth++;
  if (currentMonth == 13){
    currentMonth = 1;
    currentYear++
  }
  getGrid(currentMonth, currentYear)


})

$(document).on('click', '.previous-month', function(){
  currentMonth--;
  if (currentMonth == 0){
    currentMonth = 12;
    currentYear--;
  }
  getGrid(currentMonth, currentYear)
})

$(document).on('click', '.date-grid button', function(){
  console.log($(event.target).data('time'))
  let dayDate = $(event.target).data('time').toString()
  window.location.href = `agenda/day.php?d=${dayDate}`
})
