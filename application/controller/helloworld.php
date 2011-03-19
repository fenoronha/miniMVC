<?php

class Controller_Helloworld 
{
   public $load;
   public $model;

   function __construct()
   {
      $this->load = new Load();
   }
   
   function index()
   {
   		var_dump('miniMVC/helloWorld/index');
   }

   // miniMVC/helloworld/home
   function home()
   {
      $this->model 		= new Model_Helloworld();
      $data->user_info	= $this->model->user_info();
      $data->login 		= $this->model->login();
      
      // carrega a view e manda os dados 
      $this->load->view('helloworld.php', $data);
   }
}
