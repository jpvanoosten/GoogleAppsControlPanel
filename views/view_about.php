<?php

/**
 * view_about short summary.
 *
 * view_about description.
 *
 * @version 1.0
 * @author jeremiah
 */

function viewAbout()
{
    $ret = <<<ABOUT

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>About</h1>
      </div>
      <p class="lead">You have reached the about page.</p>
    </div>
    
ABOUT;
    
    return $ret;
}

echo pageHeader( PROJECT_NAME . " - About");

echo navBar("about");

echo viewAbout();

echo pageFooter();