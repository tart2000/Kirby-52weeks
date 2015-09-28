'use strict';

(function () {

  /**
   * Social share popups
   *
   */
  var url = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
  var title = document.getElementsByTagName("title")[0].innerHTML;
  var description = document.querySelector("meta[name=\'description\']").getAttribute('content');

  // Need and attribute text
  var twitter = document.querySelectorAll('button.share--twitter');
  Array.prototype.forEach.call(twitter, function(el, i){
    el.addEventListener('click', function (e) {
      e.preventDefault();
      var text = this.getAttribute('data-message') +  " " + title;
      window.open( "http://twitter.com/share?url=" +
        encodeURIComponent(url) + "&text=" +
        encodeURIComponent(text) + "&count=none/",
        "tweet", "height=300,width=550,resizable=1"
      );
    });
  });

  var facebook = document.querySelectorAll('button.share--facebook');
  Array.prototype.forEach.call(facebook, function(el, i){
    el.addEventListener('click', function (e) {
      e.preventDefault();
      window.open( "http://www.facebook.com/sharer.php?u=" +
        encodeURIComponent(url) + "&t=" +
        encodeURIComponent(title),
        "facebook", "height=300,width=550,resizable=1"
      );
    });
  });

  var googleplus = document.querySelectorAll('button.share--googleplus');
  Array.prototype.forEach.call(googleplus, function(el, i){
    el.addEventListener('click', function (e) {
      e.preventDefault();
      window.open( "https://plus.google.com/share?url=" +
        encodeURIComponent(url),
        "google +", "height=300,width=550,resizable=1"
      );
    });
  });

  var linkedIn = document.querySelectorAll('button.share--linkedIn');
  Array.prototype.forEach.call(linkedIn, function(el, i){
    el.addEventListener('click', function (e) {
      e.preventDefault();
      window.open( "https://www.linkedin.com/shareArticle?mini=true&url=" +
        encodeURIComponent(url) + '&title=' +
        encodeURIComponent(title) + '&summary=' +
        encodeURIComponent(description),
        "linkedIn", "height=300,width=550,resizable=1"
      );
    });
  });

  // Need and attibute data-image-url
  var pinterest = document.querySelectorAll('button.share--pinterest');
  Array.prototype.forEach.call(pinterest, function(el, i){
    el.addEventListener('click', function (e) {
      e.preventDefault();
      var imageUrl = this.getAttribute('data-image-url');
      window.open( "https://pinterest.com/pin/create/button/?url=" +
        encodeURIComponent(url) + '&media=' +
        encodeURIComponent(imageUrl) + '&description=' +
        encodeURIComponent(description),
        "pinterest", "height=300,width=550,resizable=1"
      );
    });
  });

  var tumbler = document.querySelectorAll('button.share--tumbler');
  Array.prototype.forEach.call(tumbler, function(el, i){
    el.addEventListener('click', function (e) {
      e.preventDefault();
      window.open( "http://www.tumblr.com/share/link?url=" +
        encodeURIComponent(url) + '&name=' +
        encodeURIComponent(title) + '&description=' +
        encodeURIComponent(description),
        "tumbler", "height=300,width=550,resizable=1"
      );
    });
  });

  var reddit = document.querySelectorAll('button.share--reddit');
  Array.prototype.forEach.call(reddit, function(el, i){
    el.addEventListener('click', function (e) {
      e.preventDefault();
      var imageUrl = this.getAttribute('data-image-url');
      window.open( "http://www.reddit.com/submit/?url=" +
        encodeURIComponent(url) + '&title=' +
        encodeURIComponent(title),
        "reddit", "height=300,width=550,resizable=1"
      );
    });
  });

})();
