<?php


namespace App\classes;
use App\classes\User;


class Calculator extends User
{
    public $firstNumber;
   protected $secondNumber;
    private $operator;
    public $result;
    public $user;
    public function __construct($data)
    {
        $this->firstNumber =$data['first_number'];
        $this->seconNumber =$data['second_number'];
        $this->operator =$data['operator'];

    }

    public function index()
    {
        switch ($this->operator)
        {
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->sub();
                break;
            case '*':
                 $this->result = $this->multiplication();
                 break;
            case'/':
                $this->result = $this->divided();
                break;
            case'%':
                $this->result = $this->modulus();
                break;
            }
            return $this->result;
    //      echo $this->sub();

        }
        protected function add()
        {
           return $this->firstNumber + $this->seconNumber;
        }
        private function sub()
        {
            return $this->firstNumber - $this->seconNumber;
        }
        protected  function multiplication()
        {
            return $this->firstNumber * $this->seconNumber;
         }
         private function divided()
         {
             return $this->firstNumber / $this->seconNumber;
         }
         private function modulus()
         {
             return $this->firstNumber % $this->seconNumber;
         }

}