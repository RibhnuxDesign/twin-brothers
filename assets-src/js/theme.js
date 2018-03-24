/* global jQuery, document */
import navbar from './components/navbar'
import searchbar from './components/searchbar'

($ => {
  $(document).ready(() => {
    navbar()
    searchbar()
  })
})(jQuery)
