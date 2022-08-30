<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Debugging</title>
    </head>
    <body>
        <br />
        <?php
            $number = 99;
            $string = "Bug?";
            $array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");

            //outputs integer value 99
            var_dump($number);
            echo "<br />";
            //outputs string, value & length of the string
            var_dump($string);
            echo "<br />";
            //outputs array, number of items in array, each items type & length
            var_dump($array);
        ?>
        <br />
        <br />
        <pre>
        <?php
            //show all variables that have been defined
            print_r(get_defined_vars());
        ?>
        </pre>
        <br />
        <br />
        <?php
            function say_hello_to($word) {
                echo "Hello {$word}!<br />";
                //report of functions called (file working in, line number, function, argument(s))
                var_dump(debug_backtrace());
            }

            say_hello_to('Everyone');           
        ?>
    </body>
</html>