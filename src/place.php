<?php

    class Places
    {
        private $city_name;

        function __contruct($city_name)
        {
            $this->city_name = $city_name;
        }

        function setCityName($new_city_name)
        {
            $this->city_name=$new_city_name;
        }

        function getCityName()
        {
            return $this->city_name;
        }

        function save()
        {
            array_push($_SESSION['list_of_cities'], $this);
        }


    }

?>
