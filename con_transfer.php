<?php

session_start();

$bank_direc = $_POST['bank_direc'];
$account_no = $_POST['account_no'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$amount = $_POST['amount'];

if(empty($bank_direc)||empty($account_no)||empty($first_name)||empty($last_name)||empty($amount)){
    $_SESSION['error'] = "กรุณากรอกข้อมูลให้ครบ";
    header('location: index.php');
}else if($bank_direc == "Selected"){
    $_SESSION['error'] = "กรุณากรอกข้อมูลให้ครบ";
    header('location: index.php');
}else {
    $_SESSION['bank_direc'] = $bank_direc; 
    $_SESSION['account_no'] = $account_no;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
        $_SESSION['amount'] = $amount;

    header('location: display_result.php');
}








?>