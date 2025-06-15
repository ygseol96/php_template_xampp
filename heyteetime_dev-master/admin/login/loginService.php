<?php
use login\Admin;
require $_SERVER['DOCUMENT_ROOT'] ."/login/Admin.php";
include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";

class LoginService {
    private $myDB;
    private static $ENCRYPT_KEY;

    public function __construct()
    {
        global $_INC;
        $this->myDB = myConn();
        self::$ENCRYPT_KEY = $_INC['env']['encrypt_key'];
    }

    public static function isLoggedIn()
    {
        return isset($_SESSION['admin_idx']);
    }

    public static function logout()
    {
        unset($_SESSION['admin_idx']);
        unset($_SESSION['admin_account']);
        unset($_SESSION['admin_name']);
    }

    public function login(string $account, string $password)
    {
        $admin = $this->authenticateWithAccountAndPassword($account, $password);

        $_SESSION['admin_idx'] = $admin->getIdx();
        $_SESSION['admin_account'] = $admin->getAccount();
        $_SESSION['admin_name'] = $admin->getName();
    }

    private function authenticateWithAccountAndPassword(string $account, string $password)
    {
        $admin = $this->getAdminByAccount($account);

        if($admin == null) {
            header('Content-Type: application/json');
            http_response_code(401);
            echo json_encode(array('statusCode'=>401, 'message'=>'존재하지 않는 사용자입니다.'));
            exit();
        }

        $passOk = $admin->checkPassword(md5(hash('sha512', $password)));

        if(!$passOk) {
            header('Content-Type: application/json');
            http_response_code(401);
            echo json_encode(array('statusCode'=>401, 'message'=>'비밀번호가 틀렸습니다.'));
            exit();
        }

        return $admin;
    }
    private function getAdminByAccount(string $account)
    {
        $query = "
            SELECT
                idx,
               AES_DECRYPT(account, '".  self::$ENCRYPT_KEY ."') as account
             , CAST(AES_DECRYPT(name, '".  self::$ENCRYPT_KEY ."') AS CHAR )AS name
             , passwd
             , country
             , AES_DECRYPT(hp_number, '".  self::$ENCRYPT_KEY ."') as hp_number
             , AES_DECRYPT(email, '".  self::$ENCRYPT_KEY ."') as email
             , status
             , reg_date
            FROM aglsc.ht_admin WHERE account = AES_ENCRYPT('". $account ."', '".  self::$ENCRYPT_KEY ."')
        ";
        $user =  my_select_one($query, $this->myDB);

        if(count($user) !== 0) {
            return new Admin($user['idx'], $user['account'],$user['name'] ,$user['passwd'], $user['country'], $user['hp_number'], $user['email'], $user['status'], $user['reg_date']);
        }
        return null;
    }
}

