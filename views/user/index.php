<h1>Users</h1>
<form method="post" action="<?php echo URL;?>user/create">
    <label>login</label><input type="text" name="login"/><br/>
    <label>password</label><input type="text" name="password"/><br/>
    <label>role</label>
    <select name="role">
        <option>Default</option>
        <option>Admin</option>
        <option>Owner</option>
    </select> </br>
    <label>&nbsp:</label><input type="submit"/>
</form>
<hr/>


<table border="2px" cellpadding="20px" style="background-color: aquamarine">

    <th>ID</th>
    <th>LOGIN</th>
    <th>ROLE</th>
    <th>SET</th>
<?php
foreach ($this->userList as $key => $value) {
    echo '<tr>';
    echo'<td>' . $value['id'] . '</td>';
    echo '<td>' . $value['login'] . '</td>';
    echo '<td>' . $value['role'] . '</td>';
    echo '<td>
              <a href="'.URL.'user/edit/'.$value['id'].'">edit</a> 
              <a href="'.URL.'user/delete/'.$value['id'].'">delete</a>
          </td>';
    echo '</tr>';
}
?>
</table>
