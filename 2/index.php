<?php

class Person1 {
    protected $firstName; //public, protected <-> private
    protected $lastName;
    protected $nickName;
    protected $birthday;
    protected $changedNickName;

    public function __construct($firstName, $lastName, $birthday)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->changedNickName = 0;
        $this->birthday = $birthday;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getFullInfo()
    {
        return $this->firstName.' '.$this->lastName.' '.$this->getAge();
    }

    public function getChangedNickName()
    {
        return $this->changedNickName;
    }

    public function getAge(){
        $date = str_replace("/","-",$this->birthday);
        $date = date('Y/m/d',strtotime($date));
        $today = date('Y/m/d');
        $age = $today - $date;
        return $age.' años';
    }

    public function setNickName($nickName)
    {
        $this->nickName = $nickName;
        if (strlen($nickName) > 2){
            if ($nickName != $this->firstName) {
                if ($nickName != $this->lastName) {
                    if (empty($nickName)){
                        return "Nickname está vacio...";
                    }
                    $this->changedNickName++;
                    if ($this->changedNickName < 3) {
                    }
                    else {
                        return 'No puedes cambias mas de dos veces el nickname';
                    }
                }
                return "El nickname no puede ser igual que tu apellido";
            }
            return "El nickname no puede ser igual que tu nombre";
        }
        return "El nickname debe tener mas de dos caracteres";
    }

    public function getNickName()
    {
        return strtolower($this->nickName);
    }

}

$person1 = new Person1('Jaaziel', 'Hinojosa', '1997-09-21');
exit($person1->getFullInfo());
//-----------validacion nickname--------------------------
//$person1->setNickName('Pach1');
//$person1->setNickName('Pach2');
//$person1->setNickName('Pach3');
//echo $person1->setNickName('hola');
//--------------------------------------------------------