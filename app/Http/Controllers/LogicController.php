<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{

    public function logics()
    {
        // 1 Check if a number is positive, negative, or zero
        $number = 2;

        if ($number > 0) {
            echo "The number is positive.";
        } elseif ($number < 0) {
            echo "The number is negative.";
        } else {
            echo "The number is zero.";
        }
        echo "<br>";

        // 2 Check if a number is even or odd
        $number = 10;

        if ($number % 2 == 0) {
            echo "The number is even.";
        } else {
            echo "The number is odd.";
        }
        echo "<br>";

        // 3 Check if a variable is set and not empty
        $var = "some value";

        if (isset($var) && !empty($var)) {
            echo "The variable is set and not empty.";
        } else {
            echo "The variable is either not set or empty.";
        }
        echo "<br>";

        // 4 Check if a number is within a range
        $number = 15;

        if ($number >= 10 && $number <= 20) {
            echo "The number is within the range of 10 to 20.";
        } else {
            echo "The number is outside the range of 10 to 20.";
        }
        echo "<br>";

        //Check if a year is a leap year
        $year = 2024;

        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "The year $year is a leap year.";
        } else {
            echo "The year $year is not a leap year.";
        }
        echo "<br>";

        // 5 Check if a user is an adult or a minor
        $age = 18;

        if ($age >= 18) {
            echo "The user is an adult.";
        } else {
            echo "The user is a minor.";
        }
        echo "<br>";

        // 6 Check if a number is divisible by both 3 and 5
        $number = 15;

        if ($number % 3 == 0 && $number % 5 == 0) {
            echo "The number is divisible by both 3 and 5.";
        } else {
            echo "The number is not divisible by both 3 and 5.";
        }
        echo "<br>";

        // 7 Check if a username and password match
        $username = "admin";
        $password = "password123";

        if ($username == "admin" && $password == "password123") {
            echo "Login successful.";
        } else {
            echo "Invalid username or password.";
        }
        echo "<br>";

        // 8 Check if a file exists:
        $filename = "example.txt";

        if (file_exists($filename)) {
            echo "The file $filename exists.";
        } else {
            echo "The file $filename does not exist.";
        }
        echo "<br>";
        echo "<hr>";

        // 1 Print numbers from 1 to 10
        for ($i = 1; $i <= 10; $i++) {
            echo $i . " ";
        }
        echo "<br>";

        // 2 Print even numbers from 1 to 20 
        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
        echo "<br>";

        // 3 Print elements of an array
        $array = array("apple", "banana", "cherry");

        for ($i = 0; $i < count($array); $i++) {
            echo $array[$i] . " ";
        }
        echo "<br>";

        // 4 Print a multiplication table for a given number
        $number = 5;

        for ($i = 1; $i <= 10; $i++) {
            echo "$number x $i = " . ($number * $i) . "<br>";
        }

    }
}
