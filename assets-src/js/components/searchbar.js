/* global document, jQuery */

export default () => {
  const $ = jQuery
  $(document).on('click', '.searchbar-toggler', function (e) {
    e.preventDefault()
    $('.searchbar').toggleClass('searchbar--show')

    const isHide = !$('.navbarMenu').hasClass('d-lg-flex')
    $('.navbarMenu').toggleClass('d-lg-flex', isHide)

    if (!isHide) {
      $('input#s').focus()
    }
  })
}
