<?php

class signAuth
{
    public $userLogin;
    public $userPassword;
    public $hostname;
    public $dbUsername;
    public $dbPassword;
    public $dbName;
    public $tableName;
    public $dbConnect;
    public $errors;
    public $isUser;
    public $query;
    public $insertedLogin;
    public $insertedPassword;
    public $queryAuth;
    public $data;
    public function __construct($hostname = 'localhost', $dbUsername = 'Vova', $dbPassword = 'myPW888', $dbName ='users', $tableName='data') {
        $this->hostname = $hostname;
        $this->dbUsername = $dbUsername;
        $this->dbPassword = $dbPassword;
        $this->dbName = $dbName;
        $this->tableName = $tableName;
    }
    public function makeConnect() {
        $this->dbConnect = mysqli_connect($this->hostname, $this->dbUsername, $this->dbPassword, $this->dbName);
        mysqli_set_charset($this->dbConnect, 'utf8');
    }
    public function signUp($userName, $userPassword, $submit){
        $this->userLogin = $userName;
        $this->userPassword = md5($userPassword);

        if (isset($submit)) {
            $this->errors = [];
            if (!preg_match("/^[a-zA-Z0-9]+$/", $this->userLogin)) {
                $this->errors[] = "Логин содержит запрещенные символы";
            }
            if (strlen($this->userLogin) < 3 || strlen($this->userLogin) > 30) {
                $this->errors[] = "Длина логина должна быть 3-30 символов";
            }
            $this->isUser = mysqli_query($this->dbConnect, "SELECT id_user FROM $this->tableName WHERE login='" . mysqli_real_escape_string($this->dbConnect, $this->userLogin) . "'");
            if (mysqli_num_rows($this->isUser) > 0) {
                $this->errors[] = "Пользователь с таким логином уже существует в базе данных";
            }
            if (count($this->errors) == 0) {
                $this->query = "INSERT INTO $this->tableName (id_user, login, password) VALUES (null, '$this->userLogin', '$this->userPassword')";
                $sql = mysqli_query($this->dbConnect, $this->query);
                foreach($_COOKIE as $key => $value) setcookie($key, '');
                header("Refresh:1; url=auth.php");
            } else {
                echo 'При регистрации произошли ошибки';
                print_r($this->errors);
            }
        }
    }
    public function auth($userLogin, $userPassword, $submit) {
        $this->insertedLogin = $userLogin;
        $this->insertedPassword = $userPassword;

        if($_COOKIE['Auth'] == 1) {
            header("location: hello.php");
        }

        if(isset($submit))
        {
            $this->queryAuth = mysqli_query($this->dbConnect,"SELECT * FROM $this->tableName WHERE login='".mysqli_real_escape_string($this->dbConnect, $userLogin)."'");
            $this->data = mysqli_fetch_all($this->queryAuth, MYSQLI_ASSOC);

            if($this->data[0]['password'] == md5($userPassword))
            {
                setcookie('currentUser', $this->data[0]['login'], time() + 3600 * 24 * 5);
                setcookie('Auth', 1, time() + 3600 * 24 * 5);
                echo "Здравствуйте, ".$this->data[0]['login']."!";
                header("location: hello.php");
            }
            else
            {
                echo "Вы ввели неверные данные";
            }
        }
    }
    public function lastVisited($auth, $lastVisited) {
        if ($auth == 1) {
            if (trim($lastVisited != "" && isset($lastVisited))){
                if ($lastVisited == 'Факт') {
                    echo 'Пользователь ' . $_COOKIE['currentUser'] . ' посещал последней страницу Факта';
                } else if ($lastVisited == 'Bitrix') {
                    echo 'Пользователь ' . $_COOKIE['currentUser'] . ' посещал последней страницу Bitrix';
                }
            } else echo 'Пользователь ' . $_COOKIE['currentUser'] . ' еще ничего не посещал';
        } else echo 'Пожалуйста, авторизуйтесь';
    }
    public function setColor($colorChange, $color) {
        (isset($colorChange)) ? setcookie('backgroundColor', $color, time() + 3600 * 24 * 5) : null;
    }
}