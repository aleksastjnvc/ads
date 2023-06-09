<?php

class Admin extends Controller
{
    public function index()
    {

       if(empty($_SESSION)) {
            echo "You need to have admin role to access this :)";
            die;
       } 

       $User = $this->load_model('User');
       $user_data = $User->check_login(true, ["admin"]);

        if(is_object($user_data)) {
            $data['user_data'] = $user_data;
        }

       $data['page_title'] = "Admin";
       $this->view("admin/index", $data);
    }

    public function categories()
    {
       $User = $this->load_model('User');
       $user_data = $User->check_login(true, ["admin"]);

        if(is_object($user_data)) {
            $data['user_data'] = $user_data;
        }

       $data['page_title'] = "Admin";
       $this->view("admin/categories", $data);
    }

    

}