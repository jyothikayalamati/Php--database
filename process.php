<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $password=shal($_POST['password']);

    $sql="INSERT INTO USERS(firsname,lastname,email,phonenumber,password)VALUES(?,?,?,?,?)";
    $stmlinsert=$db->prepare($sql);
    $result=$stmlinsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);
    if($result){
        echo 'Successfullysaved.';

    }else{
        echo 'There were errors while savingthe data';

    }
}else{
    echo'No Data';
}
