/* global Headroom, document */

export default () => {
  const navbar = document.querySelector('.navbar')
  const headroom  = new Headroom(navbar, {
    classes: {
      initial: 'sticky',
      pinned: 'stickyPinned',
      unpinned: 'stickyUnpinned',
      top: 'stickyTop',
      notTop: 'stickyNotTop'
    }
  })
  headroom.init()
}
