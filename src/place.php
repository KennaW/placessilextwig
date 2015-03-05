<?php

    class Place
    {
        private $city_name;
        private $date;
        private $number_days;

        function __construct($user_city_name, $user_date, $number_days)
        {
            $this->city_name = $user_city_name;
            $this->date = $user_date;
            $this->number_days = $number_days;

        }

        function setNumberDays($new_number_days)
        {
            $this->number_days = (int) $new_number_days;
        }

        function setDate($new_date)
        {
            $this->date = (string) $new_date;
        }

        function setCityName($new_city_name)
        {
            $this->city_name = (string) $new_city_name;
        }

        function getDate()
        {
            return $this->date;
        }

        function getCityName()
        {
            return $this->city_name;
        }
        function getNumberDays()
        {
            return $this->number_days;
        }

        function save()
        {
            array_push($_SESSION['list_of_cities'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_cities'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_cities'] = array();
        }


    }

?>
