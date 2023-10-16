<?php 

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/index.css">
    <script src="jquery/jquery-3.6.4.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <div class="bg">
        
    </div>

    <div class="reg-form">
        <h2>Register</h2>
        <br>
        
        <form action="" method="post" id="regForm">
            <small>Last Name</small>
            <input type="text" name="lastname" id="lastName" required>

            <small>First Name</small>
            <input type="text" name="firstname" id="firstName" required>

            <small>Email</small>
            <input type="text" name="email" id="email" required>

            <small>Password</small>
            <input type="password" name="password" id="pass" required>

            <label for="viewPass" class="lblView">
                <input type="checkbox" name="check" id="viewPass">&nbsp;
                See Password
            </label><br>

            <input type="submit" class="reg-btn" id="regBtn" name="submit-form" value="Submit">
        </form>
    </div>
    

    <div class="footer">
        <p>John Ray C. Escarlan <span>&nbsp;</span> BSIT - AI32</p>
    </div>

    <script>
        $(document).ready(function() {


            $("#regForm").submit(function(e) {
                e.preventDefault();

                var formData = $(this).serialize();
                localStorage.setItem("userData", formData);

                window.location.href = "index.php";
            });

            let checkbox = $("#viewPass");
            checkbox.click(() => {
                if(checkbox.prop("checked")) {
                    $("#pass").attr("type", "text");
                } else {
                    $("#pass").attr("type", "password");
                }
            });


        });
    </script>
</body>
</html>
