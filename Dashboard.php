
<?php
include_once 'UserMapper.php';
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
    $contactUsers = $mapper->getAllContactUsers();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> SideBar</title>
        <link rel="stylesheet" href="Styles/DashBoardStyle.css">
    </head>
    <body>
        <div class="wrap">

            <div class="sidebar">
                <img src="Images/menu.png" alt="" id="menuicon">
                <h1>DashBoard</h1>
                <ul>
                    <li><a href="HomePageAdmin.php">Home</a></li>
                    <li><a href="AboutUs.php">About US</a></li>
                    <li><a href="ContactUs.php">Contact Us</a></li>
                </ul>
            </div>


        <section class="main">
             <h2>Users list:</h2>
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>----------------</td>
                    <td>Modify OR </td>
                    <td>Delete</td>

                </tr>
            </thead>
            <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['Username']; ?></td>
                        <td>----------------</td>
                        <td><a href=<?php echo "edit.php?id=" . $user['ID'];
                                    ?>>Modify</td>
                        <td><a href=<?php echo "deleteUser.php?id=" . $user['ID'];
                                    ?>>Delete</td>
                    </tr>

                <?php
                }
                 ?>
     </table>
     <table>
          <h2>Contacts list:</h2>
        <table>
            <thead>
                <tr>
                    <td>Email</td>
                    <td>-----------------</td>
                    <td>Message</td>
                    

            </tr></thead>
            <?php
                foreach ($contactUsers as $cu) {
                ?>
                    <tr>
                        <td><?php echo $cu['Email']; ?></td>
                        <td>-----------------</td>
                        <td><?php echo $cu['Message']; ?></td>
                    </tr>

                <?php
                }
                 ?>
     </table>
</section>
    </body>
</html>