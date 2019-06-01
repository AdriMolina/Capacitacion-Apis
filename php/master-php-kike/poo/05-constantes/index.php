<?php

  class Usuario{
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
        return $this;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

  }
  $usuario = new Usuario();
  echo $usuario::URL_COMPLETA;
  var_dump($usuario);

  ?>