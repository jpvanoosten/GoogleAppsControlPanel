<?php

function viewFrontpage()
{
	$ret = <<<FRONTPAGE
    
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Home</h1>
      </div>
      <p class="lead">Welcome to Google Apps Control Panel</p>
      <p>This is the Goole Apps Control Panel. Use this page to administer your users.</p>
    </div>
    
FRONTPAGE;

	return $ret;
}

echo pageHeader( PROJECT_NAME . " - Home");

echo navBar("home");

echo viewFrontpage();

echo pageFooter();