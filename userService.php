<?php 
    class user{
        protected $email;
        protected $password;
        protected $userdata;

        public function __construct($email,$password)
        {
            $this -> userdata=[
                (object)[
                    'username' => 'Andra Putra Nurrafi',
                    'email' => "andraputra@gmail.com",
                    'password' => "123",
                    'role' => "admin"   
                ],
                (object)[
                    'username' => 'Rama Aryasuta',
                    'email' => "ramaarya@gmail.com",
                    'password' => "123",
                    'role' => "normal user"   
                ],
                 (object)[
                    'username' => 'Yosef Satrio Aji',
                    'email' => "yosef@gmail.com",
                    'password' => "123",
                    'role' => "normal user"   
                ],
            ];

            $this -> email = $email;
            $this -> password = $password;
        }
        protected function auth(){
            foreach($this->userdata as $key => $value){
              if($value->email == $this->email && $value->password == $this->password ){
                return $value;
              }
            }
            return false;
          }

        public function login(){
            $isUser = $this->auth();
            if($isUser){
              return $isUser;
            } else {
              return false;
            }
          }
    }
?>