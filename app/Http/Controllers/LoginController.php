<?php
class LoginController extends Controller {
    protected $redirectTo = '/home';
    
    public function __construct()
    {
        $db = new Model();
    }
    public function index() {
        if (!isset( $_SESSION['user_id'])) {
            $this -> view('login.php', null);
        } else {
            $this -> redirectTo('home');
        }
    }
    public function login(){
        session_start([
            'cookie_lifetime' => 186400,
        ]);
        $_SESSION['user_id'] = 1;
        $_SESSION['name'] = $_POST['user'];                    
        $_SESSION['profile'] = 'Admin';   
        $_SESSION['avatar'] = "avatar-1.png";
        $_SESSION['session'] = true;
        $this -> redirectTo('home');
    }
    public function logout(){
        session_start();
        session_destroy();
        $this -> redirectTo('index');
    }
}
