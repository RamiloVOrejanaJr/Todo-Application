<html lang="en">
    <head>
        <title>Exercise 4</title>
        <?php 

            class API{

                //1st function
                function print_name($name){
                    echo "Full name: $name <br>";
                }

                //2nd function; using array value
                function print_hobbies($hobbies){
                    echo "Hobbies: <br>";
                    for ($i = 0; $i < count($hobbies); $i++){
                        echo "&nbsp $hobbies[$i]<br>";
                    }
                }

                //3rd function; using object value
                function print_info($age, $email, $bday){      
                    echo "Age: $age</br>";
                    echo "Email: $email</br>";
                    echo "Birthday: $bday</br>";
                }
            }

            $obj = new API;
            $obj->print_name("Ramilo V. Orejana Jr.");

            //creating array to use as values for parameter of 2nd function
            $hobby_array = ["Reading", "Listening to music"];
            $obj->print_hobbies($hobby_array);

            //creating object to use as values for parameters of 3rd function
            $info = new stdClass();
                    $info->age = 21;
                    $info->email = "ramorejana@gmail.com";
                    $info->bday = "November 27, 2002";                    
            $obj->print_info($info->age, $info->email, $info->bday);
        ?>
    </head>
</html>