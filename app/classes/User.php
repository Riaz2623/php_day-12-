<?php


namespace App\classes;


class User
{
    public $city='Dhaka';
    protected $country ='Bangladesh';
    private $area= 'Kawranbazar';

    public function login()
    {
        echo 'In Login';
    }
    protected function logout()
    {
        echo 'in logout';
    }
    private function profile()
    {
        echo 'in profile';
    }

}