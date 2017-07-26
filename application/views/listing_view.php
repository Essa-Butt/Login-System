<!DOCTYPE html>
<?php
?>
<html>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php foreach($userList as $userListIn){
        //echo "<pre>"; print_r($userListIn); exit;
        ?>
        <tr>
            <td>
                <?php
                echo $userListIn->firstname,$userListIn->lastname;
                ?>
            </td>
            <td>
                <?php
                echo $userListIn->email;
                ?>
            </td>
            <td>
                <a href="listing.php?id=<?php echo $userListIn->id;?>&name=<?php echo $userListIn->firstname;?>">Delete</a>
                <a href="index.php?updateid=<?php echo $userListIn->id;?>">Edit</a>
            </td>
        </tr>
    <?php }?>

</table>
</body>
</html>