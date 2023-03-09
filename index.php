<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
        body{
            background-image: url("./image/background6.jpg");
            background-size:100%;
        }
        
    </style>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-4">   </div>

            <div class="col-4 form">
                <br>
                    <h2>Payment form <i style="font-size:18px"class="bi bi-coin"></i></h2>
                    <p style="font-size:small;">กรุณากรอกข้อมูลให้ถูกต้อง</p>
                      <?php
                        if(isset($_SESSION['error'])){
                    ?>
                    <div class="alert-md alert-danger" role="alert">
                       <p style="font-size:small;text-align:center;margin-top:0%;">
                       <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                       ?>
                       </p>
                    </div>
                    <?php
                        }
                    ?>
                    
                
                    <hr>
                    <form action="./con_transfer.php" method="POST"> 
                <div class="form-group">
                    <label class="font-xsmall"for="formGroupExampleInput">Enter your transfer details</label>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" name="bank_direc">
                        <option selected>Selected</option>
                        <option value="krungsri">Krungsri Bank</option>
                        <option value="krungthai">Krungthai Bank </option>
                        <option value="kasikorn">Kasikorn Bank</option>
                        <option value="bangkok">Bangkok Bank</option>
                        <option value="thaipanit">Thaipanit Bank</option>
                        <option value="ttb">ttb</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-xsmall"for="formGroupExampleInput2">Enter Account No.</label>
                    <input style="font-size:small;" type="text" class="form-control" id="formGroupExampleInput2" name="account_no" placeholder="กรอกเลขบัญชีปลายทาง">
                </div>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="font-xsmall"for="formGroupExampleInput2">First name</label>
                    <input style="font-size:small;" type="text" class="form-control" id="formGroupExampleInput2" name="first_name" placeholder="ชื่อจริง">
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="font-xsmall"for="formGroupExampleInput2">Last name</label>
                    <input style="font-size:small;" type="text" class="form-control" id="formGroupExampleInput2" name="last_name" placeholder="นามสกุล">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label class="font-xsmall"for="formGroupExampleInput2">จำนวนเงินที่โอน</label>
                        <input style="font-size:small;" type="number" class="form-control" id="formGroupExampleInput2" name="amount" placeholder="จำนวนเงินที่โอน">
                    </div>
                </div>
                <br>
                 <div class="d-grid gap-2">
                                    <button type="submit" name="submit" class="btn btn-primary btn-sm">ยืนยันการโอนเงิน</button>
                </div>
                <br>
                </form>
            </div>


            <div class="col-4">   </div>

        </div>
    </div>
</body>
</html>