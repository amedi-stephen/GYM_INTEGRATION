<?php

include "dbh.inc.php";

// if (isset($_POST["submitSignup"])) {

//     $username = $DBconnection->real_escape_string($_POST["username"]);
//     $email = $DBconnection->real_escape_string($_POST["email"]);
//     $password = $DBconnection->real_escape_string($_POST["password"]);
//     $confirmPassword = $DBconnection->real_escape_string($_POST["confirm_pwd"]);
//     $gender = $DBconnection->real_escape_string($_POST["gender"]);
//     $town = $DBconnection->real_escape_string($_POST["town"]);
//     $phone = $DBconnection->real_escape_string($_POST["phone"]);
//     $userInfo = $DBconnection->real_escape_string($_POST["userInfo"]);
//     $fitnessGoal = $DBconnection->real_escape_string($_POST["fitnessGoal"]);
//     $fitnessActivities = $DBconnection->real_escape_string(base64_encode(serialize($_POST["fitnessActivities"])));
//     $gymLikables = $DBconnection->real_escape_string(base64_encode(serialize($_POST["gymLikables"])));

//     $uppercase = preg_match("@[A-Z]@", $password);
//     $lowercase = preg_match("@[a-z]@", $password);
//     $number = preg_match("@[0-9]@", $password);
//     $specialCharacters = preg_match("@[^\w]@", $password);

//     if (empty($username) || empty($email) || empty($password) || empty($confirmPassword) || empty($gender) || empty($userInfo) || empty($fitnessGoal) || empty($fitnessActivities) || empty($gymLikables) || empty($phone) || empty($town)) {
//         header("Location: ../signup.php?error=emptyfields");
//         exit();
//     } else if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
//         header("Location: ../signup.php?error=invalidusername&email=" . $email);
//         exit();
//     } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         header("Location: ../signup.php?error=invalidemail&username=" . $username);
//         exit();
//     } else if (!$uppercase || !$lowercase || !$number || !$specialCharacters || strlen($password) < 8) {
//         header("Location: ../signup.php?error=invalidpassword&username=" . $username . "&email=" . $email);
//         exit();
//     } else if ($password != $confirmPassword) {
//         header("Location: ../signup.php?error=checkpassword&username=" . $username . "&email=" . $email);
//         exit();
//     } else {
//         $checkUserQuery = "SELECT user_name FROM users WHERE user_name='$username'";
//         $result_UserQuery = $DBconnection->query($checkUserQuery);
//         $result_checkUserRows = $result_UserQuery->num_rows;
//         if ($result_checkUserRows > 0) {
//             header("Location: ../signup.php?error=userexists");
//             exit();
//         } else {
//             $insertUserQuery = "INSERT INTO users(user_name, user_email, user_location, user_phone, user_gender, user_goal, user_text, user_classes, user_preferrables, user_password) 
//                 VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
//             $stmt_insertUserQuery = $DBconnection->stmt_init();
//             if (!$stmt_insertUserQuery->prepare($insertUserQuery)) {
//                 header("Location: ../signup.php?error=notprepared");
//                 exit();
//             } else {
//                 $encryptedPwd = password_hash($password, PASSWORD_DEFAULT);
//                 $stmt_insertUserQuery->bind_param("ssssssssss", $username, $email, $town, $phone, $gender, $fitnessGoal, $userInfo, $fitnessActivities, $gymLikables, $encryptedPwd);
//                 $stmt_insertUserQuery->execute();
//                 $stmt_insertUserQuery->close();

//                 $QUERY_users = "SELECT * FROM users WHERE user_name='$username' AND user_email='$email'";
//                 $RESULT_users = $DBconnection->query($QUERY_users);
//                 if ($RESULT_users->num_rows > 0) {
//                     while ($row = $RESULT_users->fetch_assoc()) {
//                         $userid = $row["user_id"];
//                         $QUERY_insertToProfileimg = "INSERT INTO profileimg(user_id, img_status) VALUES('$userid', 1)";
//                         $RESULT_insertToProfileimg = $DBconnection->query($QUERY_insertToProfileimg);

//                         header("Location: ../login.php?signup=success");
//                         exit();
//                     }
//                 } else {
//                     echo "no users";
//                 }
//             }
//         }
//     }
// } else {
//     header("Location: ../signup.php");
//     exit();
// }

if(isset($_POST["submitSignup"])) {
    // $gymLikables = $DBconnection->real_escape_string(base64_encode(serialize($_POST["gymLikables"])));
    $gymLikables = base64_encode(serialize($_POST['gymLikables']));
    var_dump($gymLikables);
}
