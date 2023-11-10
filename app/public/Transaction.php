<?php

class Transaction {
    #static belong to the class shared accross the instances
    #static functions and variables shared
    #with statics dont have the $this variable
    # transaction::amount , access static property statically
    #static for shared eg counter, or cache values/memoization
    public static string $name = "unknown"; 
    private const PAID ="paid";

    #belong to an instance
    public string $status;
    public function __construct()
    {
        $this->status  = self::PAID;
    }
}




?>