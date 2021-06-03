<?php
print_r($this->user);
?>

<h2>edit</h2>
<form method="post" action="<?php echo URL;?>user/editSave">
    <label>login</label><input type="text" name="login" value="<?php echo $this-> user['login']?>"/><br/>
    <label>password</label><input type="text" name="password"/><br/>
    <label>id</label><input type="int" name="id" value="<?php echo $this->user['id']?>"/><br/>
    <label>role</label>
    <select name="role">
        <option value="Default" <?php if ($this->user['role'] == 'default') echo "selected";?>>Default</option>
        <option value="Admin" <?php if ($this->user['role'] == 'admin') echo "selected";?>>Admin</option>
        <option value="Owner" <?php if ($this->user['role'] == 'owner') echo "selected";?>>Owner</option>
    </select> </br>
    <label>&nbsp:</label><input type="submit"/>
</form>
