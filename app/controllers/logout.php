<?php

class Logout extends Controller {

    public function index() {

        $User = $this->load_model('User');
        $User->logout();
    
        if(is_array($data['user_data'])) {
            $data['user_data'] = $user_data;
        }

        $data['page_title'] = 'Home';
        $this->view("index", $data);
    }
}