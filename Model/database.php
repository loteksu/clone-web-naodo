<?php
class database
{
    const username = "root"; // Khai báo username
    const password = ""; // Khai báo password
    const server = "localhost"; // Khai báo server
    const dbname = "test"; // Khai báo database
    private $connect;
    public function connect()
    {

        $this->connect = mysqli_connect(self::server, self::username, self::password, self::dbname);
        if (mysqli_connect_errno() === 0) {
            return $this->connect;
        }

    }

}


echo "Khi kết nối thành công sẽ tiếp tục dòng code bên dưới đây."
    ?>