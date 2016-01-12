<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class bantuan extends CMS_Priv_Strict_Controller {
    public function index(){
        $this->view($this->cms_module_path().'/bantuan', '', $this->cms_complete_navigation_name('bantuan'));
    }
}