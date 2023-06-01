<?php

class Myads extends Controller {


    public function index()
	{

        // check if user is logged in

		if(empty($_SESSION)) {
			header("Location:" . ROOT . "login");
		}

        // give title to page

        $data['page_title'] = "My Ads";

        // interact with User model

		$User = $this->load_model('User');
       	$user_data = $User->check_login();

        // interact with Ad model

        $user_url = $_SESSION['user_url'];

        $ad = $this->load_model('Ad');
        $ad_data = $ad->getAdsByUser($user_url);


        if(is_object($user_data)) {
            $data['user_data'] = $user_data;
        }

        // pass values to view

        $this->view("myads", $data);
        $this->view("myads", $ad_data);
       
	}

}