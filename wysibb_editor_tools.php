<?php

if (!defined(PHORUM)) return;

/**
	Inject link to WysiBB CDN.
	hook: tpl_javascript_includes
*/
function phorum_mod_wysibb_editor_tools_tpl_javascript_includes () {
	echo <<<HEREDOC
<!-- WysiBB editor tools plugin, load from CDN -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://cdn.wysibb.com/js/jquery.wysibb.min.js"></script>
<link rel="stylesheet" href="http://cdn.wysibb.com/css/default/wbbtheme.css" type="text/css" />
HEREDOC;
}

/** Prit WysiBB calling script */
function phorum_mod_wysibb_editor_tools_tpl_editor_before_textarea () {
	echo <<<HEREDOC
<!-- Init WysiBB BBCode editor -->
<script>
	$(function() {
		$("#editor").wysibb();
	})
</script>
HEREDOC;
}
