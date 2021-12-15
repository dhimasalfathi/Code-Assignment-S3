<h1>User List</h1>
<a href="?controller=UserController/form">+ Add new</a>
<ol>
        <?php foreach ($userList as $id => $userData) : ?>
            <li>
                    <a href="?controller=UserController/form/<?php echo $id ?>">
                            <?php printf("%s, %s years old", $userData['nompro'], $userData['nampro'], $userData['surat']) ?>
                        </a>
                </li>
            <?php endforeach ?>
</ol>