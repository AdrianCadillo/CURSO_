<?php

class SignIn extends Login
{
    private string $Username;

    private string $Pasword;
    
    public function SignIn(string $Usuario,string $Password):bool
    {
     return (
        $Usuario === $this->getUsername() and $Password === $this->getPasword()
     );
    }

    /**
     * Get the value of Username
     */ 
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * Set the value of Username
     *
     * @return  self
     */ 
    public function setUsername($Username)
    {
        $this->Username = $Username;

        return $this;
    }

    /**
     * Get the value of Pasword
     */ 
    public function getPasword()
    {
        return $this->Pasword;
    }

    /**
     * Set the value of Pasword
     *
     * @return  self
     */ 
    public function setPasword($Pasword)
    {
        $this->Pasword = $Pasword;

        return $this;
    }
}