<?php 
date_default_timezone_set("Africa/Nairobi");//local time

    print"This is my first php code";//you can use either print or echo & must terminate with semi-colon

    print"<br>";//use the html break line

    print " Today is <span style='color:#ff4856;text-transform:uppercase'>Thursday</span>";

    print " <br> ";

    print 1999;//integers do not require quotation marks

    print " <br> ";

    print "5475";//because of the quotation marks this becomes a string

    print " <br> ";

    print date('l');//displays the current day of the week

    print " <br> ";

    print date('l',strtotime('+5 days'));

    print " <br> ";

    print date('d/m/Y');//the full date
    
    print " <br> ";

    print "Today is " .date ('l, F jS Y');//day & date

    print " <br> ";

    print date ('H:i:s');//the time

    //Variable declaration
    $fname="Cynthia  Kamau";//declaration of a string variable
    $yob=2005;//declaration of an integer

    print " <br> ";

    print $fname;

    print " <br> ";

    print $yob;

    print " <br> ";

    $current_year=date('Y');

    echo $current_year;

    $age=$current_year -  $yob;//using subtraction to find the age 

    print " <br> ";

    print $age;

    print " <br> ";

    print $fname." is ".$age." years old";

    print " <br> ";

    $user_dob="2005-08-21";


    print $fname." was actually born on ".date('l , F jS Y',strtotime('$user_dob'));

    print "<br>";

    $birthday= new DateTime($user_dob);
    $today=new DateTime('today');

    $interval =$birthday->diff($today);
    echo'<pre>';
    print_r($interval);
    echo'</pre>';
    
    print "<br>";

    print $fname." is actually " .$interval->y."  years ".$interval ->m ."months, and ".$interval->d." days old.";

    //if...else..statement
    print "<br>";

    $adult_age=18;
    if($interval->y . $adult_age){
        print $fname . " is an adult";//event in block to the executed if the condition is correct
    }else{
        print $fname . " is NOT an adult";//event in block to be executed if the conditiom is false
    }
    //Variable characteristics
    print "<br>";
    $last_name="Kamau";

    echo "My last name is $last_name";
    //diff between single quote and double quote?
    print "<br>";
    $call['lname']="Kamau";
    print $call['lname'];
    print "<br>";
    define('LNAME','Kamau');
    echo LNAME;
    ?>