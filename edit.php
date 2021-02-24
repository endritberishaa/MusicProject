<?php
include_once 'UserMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $user = $mapper->getUserByID($userId);
}
?>
<div class='container'>
    <h1>Modify</h1>
    <form class="mainForm" action="editUser.php" method="get">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value=<?php echo $userId; ?>. name="id" />
            <label for="">Name:</label>
            <input type="text" name='username' class="input" placeholder="username...">
            <button type="submit">Enter</button>
        </div>
    </form>
</div>
