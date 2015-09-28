(function () {

  /**
   * Make whole card clickable
   *
   */
  Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function(el) {
    var link = el.querySelector('a');
    if(!link) {
      return;
    }
    var target = link.getAttribute('href');
    if(!target) {
      return;
    }
    el.addEventListener('click', function() {
      location.href = target;
    });
  });


  /**
   * Search Form
   *
   */
  var body = document.querySelector('body');
  var searchButton = document.querySelector('button.mdl-button--search');

  searchButton.addEventListener('click', function (e) {
    body.classList.toggle('mode-search');
  });

  // pressing 'escape' close the search form
  document.addEventListener('keydown', function(e) {
    if (e.keyCode == 27) {
      body.classList.remove('mode-search');
    }
  });

})();
