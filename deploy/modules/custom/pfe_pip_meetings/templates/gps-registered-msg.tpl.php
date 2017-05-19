<?php  if (!in_array('guest', $GLOBALS['user']->roles)): ?>
<a class="export-list" href="/node/<?php print $items; ?>/register"><?php print t('Register Other GP');?> </a>
<?php endif; ?>
<a class="export-list"  href="/node/<?php print $items; ?>"><?php print t('Go Back To Meeting');?> </a>
