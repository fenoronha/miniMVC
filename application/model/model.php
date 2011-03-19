<?php

class Model_Helloworld {
   public function user_info()
   {
		$user->first_name = 'Fernando';
		$user->last_name = 'Noronha';
		
		return $user;
   }
   
   public function login() 
   {
   		$login->email = 'fernando.noronha@ameris.com.br';
   		$login->password = 'noronha51';
   		
   		return $login;
   }
}
