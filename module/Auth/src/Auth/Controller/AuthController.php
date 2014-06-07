<?php

namespace Auth\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

    public function loginAction()
    {
        return new ViewModel();
    }

    public function logoutAction()
    {
        return new ViewModel();
    }

    public function registerAction()
    {
        return new ViewModel();
    }


}

