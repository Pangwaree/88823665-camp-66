<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h1>File index.php</h1>
       
        <?php
        echo "Hello World";
        echo "<br>";
        print ("Hello World");
        echo "<br>";
        print_r("Hello World");
        echo "<br>";
        printf("Hello World");
        echo "<br>";
        var_dump("Hello World");
        echo "<br>";
        ?>
        <h1><?php echo $myvar; ?></h1>
        <?php
        echo "<h1>" .$myvar. "</h1>";
        ?>
        <?php
        $x = 1;
        FUNction myfunction($myparam){
            global $x;
            $x = "Hello";
            return $myparam;
        }

        echo "<p>".MYFUNCTION("Hello World!")."</p>";
        ?>
        <h1><?php echo $x; ?></h1>
        <?php echo "1" + '1'; ?>
        <?php
        $mychar = "a";
        ?>
        <h1><?php echo ++$mychar; ?></h1>
        <?php
        if(1 == '1'){
            echo "1 == \"1\"";
        }else
        if(true){
            echo "1 != \"1\"";
        }
        if(true)
        echo "true";
        else
        if(true)
        echo "false";

        $my_arry = array(1,2,3,4,5);
        //sizeof($my_array);
        for($i=0; $i < count($my_array);$i++){
            echo $my_array [$i];
        }
        echo "<br>";
        foreach($my_array as $index => $value){
            echo $value;
        }
        echo "<br>";
        $my_array2[] = [1,2,3];
        $my_array2[] = 2;
        $my_array2[] = 3;
        $my_array2[] = 4;
        $my_array2[] = 5;
        print_r($my_array2)
        echo "<br>";
        $my_array3 = array(1,2,3,"myindex" => 4, 0 => 9);
        $my_array3["myindex"] = 1;
        print_r($my_array3);
        foreach($my_array as $value){
            echo $value;
        }
        ?>
    </body>
</html>