<?php

function viewFrontpage()
{
	$ret = <<<FRONTPAGE
<p>This is the front page.</p>
<ul>
	<li><a href='user_manager'>User Manager</a></li>
</ul>
FRONTPAGE;

	return $ret;
}

echo pageHeader( PROJECT_NAME . " - Frontpage");

echo viewFrontpage();

echo pageFooter();