
<h1>Form User <?php echo $id ? 'Update' : 'Create' ?></h1>
 
<?php if ($_POST) : ?>
        <h4>User saved</h4>
<?php endif ?>
 
<form method="post">
        <p>nomorProgram: <input type="text" name="nompro" value="<?php echo $userData['nompro'] ?>"></p>
        <p>namaProgram: <input type="text" name="nampro" value="<?php echo $userData['nampro'] ?>"></p>
        <p>suratKeterangan: <input type="text" name="surat" value="<?php echo $userData['surat'] ?>"></p>
        <p>
                <a href="?controller=UserController/index">&laquo; Back to list</a>
                <button type="submit">Save</button>
            </p>
</form>
 