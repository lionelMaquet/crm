if (window.innerWidth <= 1100) {
  $('.side_section').addClass('ham-hidden')
}

$(document).on('click', '.hamburger_menu', function() {
  $('.side_section').toggleClass('ham-hidden')
})
