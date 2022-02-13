<?php


namespace App\classes;
use App\classes\User;
use App\classes\Example1;
use App\classes\Example2;
use App\classes\Teacher;
use App\classes\Category;

class Student extends Teacher implements Example1,Example2
{
    use Category;

    protected $country = 'Bangladesh';
    public static $area = 'Farmgate';

    public function __construct()
    {
//        $this->name = 'Emon';
//        $this->city = 'Savar';
    }

    public function manage(){

//        echo "Institute is $this->name and city is $this->city and country is $this->country";
//        $this->add();
        echo self::$area;
    }
    public static function demo(){

        echo 'Hello demo';
    }

    public function one()
    {
        echo 'Hello One';
    }

    public function two()
    {
        echo 'Hello Two';
    }

    public function three()
    {
        echo 'Hello Three';
    }

    public function ten()
    {
        echo 'Ten';
    }

    public function ten1()
    {
        echo 'Ten1';
    }

    public function test()
    {
        echo 'Test';
    }
}