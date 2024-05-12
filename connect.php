<?php 

$con=mysqli_connect('localhost','root','','information');
if(isset($_POST['submit'])){

    $name =$_POST['name'];
    $company_name=$_POST['company_name'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
     $description=$_POST['description'];
    

    $query=mysqli_query($con,"insert into info(name,company_name,contact,email,description)values('$name','$company_name','$contact','$email','$description')");
}
echo "your details were submited"

    


?>