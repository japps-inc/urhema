<?php

class DashboardController extends Controller
{
	/**
     * Construct this object by extending the basic Controller class
     */
	 public function __construct()
	 {
		 parent::__construct();
		 // this entire controller should only be visible/usable by logged in users, so we put authentication-check here
		 //Auth::checkAuthentication();
	 }
	 
	 /**
     * This method controls what happens when you move to /dashboard/index in your app.
     */
	 public function index()
	 {
		 $this->View->renderWithDifferentTemplates('dashboard/index',
		 array(
			'playlist' => DashboardController::playlist(),
			'favourites' => DashboardController::favourites(),
			'relationships' => DashboardController::relationships(),
			'racks' => DashboardController::racks(),
		 )
		 ,'dashboard');
	 }
	 
	 public function playlist()
	 {
		return "Good";
	 }
	 
	 public function favourites()
	 {
		 
	 }
	 
	 public function relationships()
	 {
		 
	 }
	 
	 public function racks()
	 {
		 
	 }
	 
	 public function getFile()
	 {
		 $value = $_GET['value'];
        include Config::get('PATH_VIEW') .'dashboard/'.$value.'.php';
	 }
	 
	 public function saySomething() 
	 {
		 return "MY NAME";
	 }
}