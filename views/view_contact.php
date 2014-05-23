<?php

function viewContact()
{
    $ret = "";
    $ret = <<<CONTACT
    
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Contact</h1>
      </div>
      <p class="lead">Contact the developers.</p>
      <p>If you have any questions or concerns about the Google Apps Control Panel, please contact me.</p>
    </div>

CONTACT;

    return $ret;
}

echo pageHeader( PROJECT_NAME . " - Contact");

echo navBar();

echo viewContact();

echo pageFooter();