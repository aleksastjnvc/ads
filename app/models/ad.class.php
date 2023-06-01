<?php

class Ad {

    private $error = '';

    public function postAd($POST) {

        $data = array();
        $db = Database::getInstance();

        $data['heading'] 		=   trim($POST['heading']);
		$data['description']    =   trim($POST['description']);
		$data['location']       =   trim($POST['location']);
		$data['visibility']     =   isset($_POST['visibility']) ? trim($POST['visibility']) : 'average';
        $data['user_url']       =   $_SESSION['user_url'];


        $data['image'] = '';

        if (!empty($_FILES['image']['name'])) {
        
        $targetDirectory = "assets/eshop/images/uploads/";
        $targetFile = $targetDirectory . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            
            $data['image'] = $targetFile;
        } else {
            $this->error .= "Failed to upload the image. Please try again.";
        }
    }

    
        if(strlen($data['heading']) < 5) {
            $this->error .= "Heading must have more than 5 characters.";
        }

        if(strlen($data['location']) < 3) {
            $this->error .= "Please enter a valid city/country name";
        }

        if(strlen($data['description']) < 20) {
            $this->error .= "Ad description must have more than 20 characters.";
        }


        if(!empty($data['image'])) {

            $query = "INSERT INTO ads (heading, description, location, visibility, user_url, image) VALUES (:heading, :description, :location, :visibility, :user_url, :image)";
			
			$result = $db->write($query,$data);

            header("Location" . ROOT . "postad");

        } else {

            $query = "INSERT INTO ads (heading, description, location, visibility, user_url, image) VALUES (:heading, :description, :location, :visibility, :user_url, '')";

			$result = $db->write($query,$data);

            header("Location" . ROOT . "postad");

        }

    }

    public function getOneAd($id)
	{

		$id = (int)$id;

		$db = Database::newInstance();
		$data = $DB->read("select * from ads where ad_id = '$id' limit 1");
		return $data[0];
	}

    public function getAdsByUser($user_url) 
    {
        $db = Database::newInstance();
        $arr['user_url'] = $user_url;

        $query = "select * from ads where user_url = :user_url ";
        $result = $db->read($query, $arr);

        return $result;
    } 


}