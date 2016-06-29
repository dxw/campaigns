/* globals jQuery */

'use strict'

require('./common')
var enquire = require('./plugins/enquire')
require('./plugins/jquery-accessibleMegaMenu')

jQuery(function ($) {
  // Mega menu
  $(function () {
    enquire.register('screen and (min-width:500px)', {
      match: function () {
        // Main Nav
        $('.menu-header-container').accessibleMegaMenu({
          uuidPrefix: 'accessible-nav',
          menuClass: 'nav-menu',
          topNavItemClass: 'nav-item',
          panelClass: 'sub-nav',
          panelGroupClass: 'sub-nav-group',
          hoverClass: 'hover',
          focusClass: 'focus',
          openClass: 'open'
        })
      },
      unmatch: function () {}
    })
  })

  // Extend jQuery to make a toggle text function.
  jQuery.fn.extend({
    toggleText: function (stateOne, stateTwo) {
      return this.each(function () {
        stateTwo = stateTwo || ''
        $(this).text() !== stateTwo && stateOne ? $(this).text(stateTwo) : $(this).text(stateOne)
      })
    }
  })

  // Toggle navigation
  $(function () {
    $('#js-navigation-toggle').click(function () {
      $(this).toggleText('Close', 'Menu')
      $('#js-navigation').toggleClass('open')
    })
  })
// end
})
