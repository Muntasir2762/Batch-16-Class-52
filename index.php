<?php

    // class Test {


    //     public function __construct()
    //     {
    //         echo "Constructor"."<br>";
    //     }

    //     public function show ()
    //     {
    //         echo "Hello wordl!";
    //     }


    //     public function greetings ()
    //     {
    //         echo "Good Evening!";
    //     }

    //     public function __destruct()
    //     {
    //         echo "Destructor"."<br>";
    //     }

    // }

    // $objectTest = new Test();



    class Parents {

        public function flat()
        {
            echo "2BHK Flat <br>";
        }

        public function car()
        {
            echo "Allion <br>";
        }

        protected function bankAccount ()
        {
            echo "Account Details: 02909282-efgewygf";
        }

        private function accessAccount()
        {
            $this->bankAccount();
        }

    }

    class Child extends Parents {

        public function accessParentAccount()
        {
            $this->bankAccount();
        }

        // public function usedAccount()
        // {
        //     $this->accessAccount();
        // }

        public function bike()
        {
            echo "Royal Enfild <br>";
        }
    }



    $objectChild = new Child();
    $objectChild->bike();
    $objectChild->flat();
    $objectChild->car();
    $objectChild->accessParentAccount();
?>