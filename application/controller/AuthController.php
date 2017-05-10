<?php

class AuthController extends Controller
{
	/**
     * Construct this object by extending the basic Controller class
     */
	 public function __construct()
	 {
		 parent::__construct();
		 Auth::setAuthValue();
	 }
	 
	 /**
     * Handles what happens when user moves to URL/auth/index - or - as this is the default controller
     */
	 public function index()
	 {
		 $this->View->renderWithDifferentTemplates('auth/index','','auth');
	 }
}