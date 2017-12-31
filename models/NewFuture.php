<?php

class Year2017
{
    function __destruct()
    {
        print "Goodbye, 2017";
    }
}

class Future2018 extends Year2017
{
    function __construct()
    {
        print "Hello, 2018";
    }
}

$youAndMe = new Future2018;
