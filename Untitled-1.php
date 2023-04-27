<?php
   required 'database.php;
   print_r($_GET);
   $id=$_GET['id'];
   if($id)
   {
       //echo 'id contain';
       if(isset($_GET['save']))
       {
        if($_GET['pass']==$_['cpass'] )
        {
            //echo 'All is ready';
            $name =$_GE['name'];
            $email =$_GET['email'];
            $phone =$_GET['phone'];
            $hobbies =$_GET['hobbies'];
            $gender =$_GET['gender'];
            $address =$_GET['address'];
            $pass =$_GET['pass'];

        