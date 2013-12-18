<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('frontpage');
      $this->load->view('include/footer');
	}
   
   public function test1()
   {
      /*
       * This breaks normal CodeIgniter convention.
       * We need to load the views first before we can
       * execute the unit testing.
       */
      
      
      $data['tests'] = 'test';
 
      $this->load->view('include/header');
      $this->load->view('templates/menubar', $data);
      $this->load->view('templates/login', $data);
      $this->load->view('include/footer');
   }

   public function test2()
   {
      /*
       * This breaks normal CodeIgniter convention.
       * We need to load the views first before we can
       * execute the unit testing.
       */
      $this->load->helper('form');
      $this->load->helper('string');
      $this->load->helper('string');
      $this->load->helper('inflector');
      
      $fields = array();
      $fields[] = array( 'name' => 'first_name', 'type' => 'text', 'default' => 'First Name');
      $fields[] = array( 'name' => 'password', 'type' => 'password', 'default' => 'First Name');
      $fields[] = array( 'name' => 'password_confirm', 'type' => 'password', 'default' => 'First Name');
      
      $data['fields'] = $fields;
 
      $this->load->view('include/header');
      $this->load->view('templates/menubar', $data);
      $this->load->view('templates/form', $data);
      $this->load->view('include/footer');
   }
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
