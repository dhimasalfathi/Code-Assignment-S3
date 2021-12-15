<?php echo "";

class UserModel
{
    private $userList = array();

    public function __construct()
    {
        $storage = isset($_COOKIE['user']) ? $_COOKIE['user'] : null;

        if (!$storage || ($storage && empty($this->userList = unserialize($storage)))) {
            $this->userList[1] = array("nampro" => "Menabung", "nompro" => 1002, "surat" => "Wasweswos");
        }
    }

    public function getAll()
    {
        return $this->userList;
    }

    public function save()
    {
        setcookie('user', $_COOKIE['user'] = serialize($this->userList));
    }

    public function getOne($id)
    {
        $userData = array("nampro" => null, "nompro" => 0, "surat" => null);

        if (null !== $id && isset($this->userList[$id])) {
            $userData = $this->userList[$id];
        }

        return $userData;
    }

    public function set(array $userData, $id = null)
    {
        if (null === $id) {
            if (!$id = key(end($this->userList))) {
                $id = 0;
            }
        }

        $this->userList[$id] = $userData;
    }
}
