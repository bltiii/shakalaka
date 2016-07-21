<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
            #necItem{
                color: red;
            }
        </style>
        <meta charset="UTF-8">
        <title>Shakalaka Registration</title>
    </head>
    <body>
        <form action="RegisterHandle.php" method="post">
            <table>
                <tr>
                    <td>Username<span id="necItem">*</span>:</td>
                    <td><input type="text" maxlength="20" name="username"/></td>                    
                </tr>
                <tr>
                     <td>Password<span id="necItem">*</span>:</td>
                     <td><input type="password" maxlength="20" name="password"/></td>
                </tr>
                <tr>
                    <td>Confirm Password<span id="necItem">*</span>:</td>
                    <td><input type="password" maxlength="20" name="confirmpassword"/></td>
                </tr>
                <tr>
                    <td>email<span id="necItem">*</span>:</td>
                    <td><input type="text" maxlength="20" name="email"/></td>
                </tr>              
                <tr>
                    <td>Verification Code<span id="necItem">*</span>:</td>
                    <td><input type="text" maxlength="4" name="verification"></td>
                </tr>
            </table>          

            <input type="submit" value="Login">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
