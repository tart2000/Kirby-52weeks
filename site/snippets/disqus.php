<?php

// set the defaults
$disqus_shortname = (c::get('disqus.shortname'))? c::get('disqus.shortname') : die('Please pass the disqus shortname');
$disqus_title = addcslashes($page->title(), "'");
$disqus_identifier = $page->uri();
$disqus_url = thisURL();

?>
<div id="disqus_thread" data-disqus-shortname="<?php echo $disqus_shortname ?>" data-disqus-title="<?php echo html($disqus_title) ?>" data-disqus-identifier="<?php echo $disqus_identifier ?>" data-disqus-url="<?php echo $disqus_url ?>"></div>
