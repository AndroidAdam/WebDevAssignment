<?php

    if (!defined('APPPATH'))
        exit('No direct script access allowed');

/**
 * Controller page for the "Membership" page view
 *
 */
class Membership extends Application{
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        
        $this->data['pagebody'] = 'Membership';
        
        //Retrieve the gym information
        $gym_info = $this->GymDB->get(3);
       
        $this->data['name'] = $gym_info['name'];
        $this->data['image'] = $gym_info['image'];
        $this->data['description'] = $gym_info['description'];
        
        $this->render();
    }
    
    //this function will grab one membership option, specified by id
    function getOne($_id) {

        $this->data['pagebody'] = 'membership_sub';

        //grab our attraction id
        $membership_info = $this->GymDB->get($_id);


}
}