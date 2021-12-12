<?php
class UserController
{
    public function index()
    {
        $userModel = new UserModel();
        $userList = $userModel->getAll();

        require 'View/UserListView.php';
    }

    public function form($id = null)
    {
        $userModel = new UserModel();
        $userData = $userModel->getOne($id);

        if ($_POST) {
            $userModel->set($userData = $_POST, $id);
            $userModel->save();
        }

        require 'View/UserFormView.php';
    }
}
