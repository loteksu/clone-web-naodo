<?php
require('Controller/Session.php');
class Login extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        //Session::checkSesstion();
    }
    public function login()
    {
        //Nếu người dùng gõ trên url là login thì kiểm tra đăng nhập
        if (Session::getSesion('login') == true) {
            header("Location: http://localhost/php/demo/dashboard");
        }
        $DemoModel = $this->load->model('demoModel');
        $table = 'tb_user';
        if (isset($_POST['title'])) {
            $name = $_POST['title'];
        } else
            $name = '';

        if (isset($_POST['pass'])) {
            $pass = md5($_POST['pass']);
        } else
            $pass = '';
        $data2 = array(
            $name, $pass
        );
        $KQ = $DemoModel->login($name, $pass);
        if ($KQ == 1) {
            $ngu2 = $DemoModel->getLogin($name, $pass);
            //Tạo sesstion của user hoặc admin ở đây. có thể tạo 1 sesstion mới riêng cho admin.
            Session::runSession();
            Session::setSession('login', true);
            Session::setSession('name', $ngu2[0]['Name_User']);
            Session::setSession('nameId', $ngu2[0]['Id_User']);
            header("Location: http://localhost/php/demo/dashboard");
            echo 'ngon';
        } else
            echo 'ngu';
    }

    //Khi ấn vào đăng xuất sẽ trỏ đến hàm này và bùm về trang đăng nhập.
    public function Logout()
    {
        Session::runSession();
        Session::quitSession();
        header("Location: http://localhost/php/demo/insertwithform");
    }

    public function dashboard()
    {
        //check sesstion của tài khoản admin ở đây để vào trang admin
        //Session::checkSesstion();
        Session::setSession('Login', true);
        $this->load->view('admin/header');
        $this->load->view('admin/Menu');
        $this->load->view('admin/Dashboard');
        $this->load->view('admin/footer');
    }
}
