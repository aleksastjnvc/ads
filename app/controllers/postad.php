<?php 

Class Postad extends Controller
{

	public function index()
	{

		if(empty($_SESSION)) {
			header("Location:" . ROOT . "login");
		}

		// user's data is needed...

		$data['page_title'] = "Post New Ad";

		$User = $this->load_model('User');
       	$user_data = $User->check_login();

        if(is_object($user_data)) {
            $data['user_data'] = $user_data;
        }

		// inserting a new ad...

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
 			
			$ad = $this->load_model("Ad");
			$ad->postAd($_POST);
		}

       
        $this->view("postad", $data);
       
	}


}