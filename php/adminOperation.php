<?php

require_once ("admindb.php");
require_once ("adminComponent.php");
// require_once ("/shoppingCart/adminLogin.php");

$con = Createdb();

// $con = new CreateDb("Productdb", "Producttb");

// create button click
if(isset($_POST['login'])){
    login();
}

if(isset($_POST['create'])){
    createData();
}

if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}

if(isset($_POST['deleteall'])){
    deleteAll();

}


function createData(){
    $productname = textboxValue("product_name");
    $productimage = textboxValue("product_image");
    $productprice = textboxValue("product_price");

    if($productname && $productimage && $productprice){

        $sql = "INSERT INTO producttb (product_name, product_image, product_price) 
                        VALUES ('$productname','$productimage','$productprice')";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Record Successfully Inserted...!");
        }else{
            echo "Error";
        }

    }else{
            TextNode("error", "Provide Data in the Textbox");
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}


// messages
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}


// get data from mysql database
function getData(){
    $sql = "SELECT * FROM producttb";

    $result = mysqli_query($GLOBALS['con'], $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

// update dat
function UpdateData(){
    $productid = textboxValue("product_id");
    $productname = textboxValue("product_name");
    $productimage = textboxValue("product_image");
    $productprice = textboxValue("product_price");

    if($productname && $productimage && $productprice){
        $sql = "
                    UPDATE producttb SET product_name='$productname', product_image = '$productimage', product_price = '$productprice' WHERE id='$productid';                    
        ";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Data Successfully Updated");
        }else{
            TextNode("error", "Enable to Update Data");
        }

    }else{
        TextNode("error", "Select Data Using Edit Icon");
    }


}


function deleteRecord(){
    $productid = (int)textboxValue("product_id");

    $sql = "DELETE FROM producttb WHERE id=$productid";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","Record Deleted Successfully...!");
    }else{
        TextNode("error","Enable to Delete Record...!");
    }

}


function deleteBtn(){
    $result = getData();
    $i = 0;
    if($result){
        while ($row = mysqli_fetch_assoc($result)){
            $i++;
            if($i > 3){
                buttonElement("btn-deleteall", "btn btn-danger" ,"<i class='fas fa-trash'></i> Delete All", "deleteall", "");
                return;
            }
        }
    }
}


function deleteAll(){
    $sql = "DROP TABLE producttb";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","All Record deleted Successfully...!");
        Createdb();
    }else{
        TextNode("error","Something Went Wrong Record cannot deleted...!");
    }
}


// set id to textbox
function setID(){
    $getid = getData();
    $id = 0;
    if($getid){
        while ($row = mysqli_fetch_assoc($getid)){
            $id = $row['id'];
        }
    }
    return ($id + 1);
}

function login(){
    // Get username and password from form
    $username = mysqli_real_escape_string($GLOBALS['con'], $_POST['username']);
    $password = mysqli_real_escape_string($GLOBALS['con'], $_POST['password']);

    // Query database for user with matching username and password
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($GLOBALS['con'], $sql);

    // Check if query returned a matching user
    if (mysqli_num_rows($result) == 1) {
        // User is an admin, store user information in session
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        // Redirect user to admin dashboard
        echo "<script>alert('Login Successfull..!')</script>";
        echo "<script>window.location = ' /../shoppingCart/adminIndex.php'</script>";

        exit();
    } else {
        // Invalid username or password
        echo "<script>alert('Invalid Username or Password..!')</script>";
        echo "<script>window.location = ' /../shoppingCart/adminLogin.php'</script>";
        exit();
    }
}








