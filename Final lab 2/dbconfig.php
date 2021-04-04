<?php
    $server="localhost";
    $user="root";
    $pass="";
    $db_name="wt-sp21-final";

    function execute($query){
        global $server,$user,$pass,$db_name;
        $conn = mysqli_connect ($server,$user,$pass,$db_name);
        mysqli_query($conn,$query);
    }

    function get ($query){
        global $server,$user,$pass,$db_name;
        $conn = mysqli_connect ($server,$user,$pass,$db_name);
        $result = mysqli_query($conn,$query);
        $data=[];
        if(mysqli_num_rows($result)>0){
            while ($row=mysqli_fetch_assoc($result)){
                $data[]=$row;
            }
        }
        return $data;
    }

?>