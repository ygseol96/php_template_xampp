<?php

namespace login;

class Admin
{
    private $idx;
    private $account;
    private $name;
    private $password;
    private $country;
    private $hp_number;
    private $email;
    private $status;
    private $reg_date;

    /**
     * @param $idx
     * @param $account
     * @param $password
     * @param $country
     * @param $hp_number
     * @param $email
     * @param $status
     * @param $reg_date
     */
    public function __construct($idx, $account, $name, $password, $country, $hp_number, $email, $status, $reg_date)
    {
        $this->idx = $idx;
        $this->account = $account;
        $this->name = $name;
        $this->password = $password;
        $this->country = $country;
        $this->hp_number = $hp_number;
        $this->email = $email;
        $this->status = $status;
        $this->reg_date = $reg_date;
    }

    public function checkPassword($password)
    {
        return $this->password === $password;
    }

    /**
     * @return mixed
     */
    public function getIdx()
    {
        return $this->idx;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


}