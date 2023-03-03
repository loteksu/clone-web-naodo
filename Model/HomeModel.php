<?php
require_once('./Model/Base.php');
class HomeModel extends Base
{
    const TABLE = 'tb_user';

    public function getAll()
    {
        return $this->all(self::TABLE);
    }

}
?>