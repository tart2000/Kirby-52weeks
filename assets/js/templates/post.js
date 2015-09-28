/* jshint strict: false, camelcase: false, unused: false */

(function() {
  var disqus = document.getElementById('disqus_thread');
  window.disqus_shortname  = disqus.getAttribute('data-disqus-shortname');
  var disqus_title      = disqus.getAttribute('data-disqus-title');
  var disqus_identifier = disqus.getAttribute('data-disqus-identifier');
  var disqus_url        = disqus.getAttribute('data-disqus-url');

  // comments
  var dsq = document.createElement('script');
  dsq.type = 'text/javascript';
  dsq.async = true;
  dsq.src = 'https://' + disqus_shortname + '.disqus.com/embed.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);

})();
