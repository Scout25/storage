// you can override default options globally, so they apply to every .expander() call
$.expander.defaults.slicePoint = 120;

$(document).ready(function() {
  // simple example, using all default options unless overridden globally
  $('div.expandable p').expander();

  // *** OR ***

  // override default options (also overrides global overrides)
  $('div.expandable p').expander({
    slicePoint:       20,  // default is 100
    expandPrefix:     ' ', // default is '... '
    expandText:       'read more', // default is 'read more'
    collapseTimer:    0, // re-collapses after 5 seconds; default is 0, so no re-collapsing
    userCollapseText: 'read less'  // default is 'read less'
  });

});