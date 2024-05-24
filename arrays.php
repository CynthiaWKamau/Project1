<?php

$color="Black";

echo $color;
//variables can only store one value but an array can store more than one:to use an array square brackets are used

echo"<br>";
//indexed array/numeric array
$colors=["Black","Green","Yellow"];

print_r($colors)

?>
<br>
<?php
//Array using keyword Array/still an index array
$user=array("Alex","Peter","Ann");

//printing the single array value
print $user[2];
?>
<pre>

<?php print_r($user);?>

</pre>
<?php
//Associative arrays
$user_data=[
    "fullname"=>"Alex Okama",
    "email"=>"Alex Okama@gmail.com",
    "phone"=>"+25471234567",
];
//to print a specific value from the array
print $user_data["email"];
?>
</pre>
    <?php
    //Multidimensional arrays
    $user_details=[
        "Director"=>array(
            "Full name"=>"Kevin Kimani",
            "Address"=>"Karen",
            "Email"=>"kevinKimani@gmail.com",
            "Phone"=>[
                "Home"=>"0712345678",
                "Work"=>"079876543",
                "Mobile"=>"0723982311",
            ]
            ),
            "Manager"=>array(
                "Full name"=>"Cynthia Kamau",
                "Address"=>"Karen",
                "Email"=>"CynthiaKamau@gmail.com",
                "Phone"=>[
                    "Home"=>"071235678",
                    "Work"=>"079808443",
                    "Mobile"=>"0723944311",
                ]
            )
                ];
                print $user_details
                ["Manager"]["Phone"]["Work"];
    ?>
    <pre>
        <?php
        print_r($user_details);
        ?>
        </pre>