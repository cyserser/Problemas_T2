<?php


class registro {

    private $nombre;
    private $date;
    private $email;
    private $password;
    private $password2;

    /**
     * registro constructor.
     * @param $nombre
     * @param $date
     * @param $email
     * @param $password
     * @param $password2
     */
    public function __construct($nombre, $date, $email, $password, $password2)
    {
        $this->nombre = $nombre;
        $this->date = $date;
        $this->email = $email;
        $this->password = $password;
        $this->password2 = $password2;
    }

    public function getInfo(){
        echo "El nombre es: " .$this->nombre. " ". "La fecha es: " . $this->date. " " . "El email es: " .$this->email;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword2()
    {
        return $this->password2;
    }

    /**
     * @param mixed $password2
     */
    public function setPassword2($password2)
    {
        $this->password2 = $password2;
    }

}
