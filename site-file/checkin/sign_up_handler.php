<?php
function fileOpen()
{
    $file = 'users.txt';
    $mode = 'a+';
    
    $resource = fopen($file, $mode) or die('File can not be opened!');
    
    return $resource;
}

function fileClose($resource)
{
    fclose($resource);
}

function getUsers()
{
    $resource = fileOpen(); 
    $users = [];
    
    while (!feof($resource)) {
        $user = fgets($resource);
        $user = explode(':', $user);
        
        $users[] = [
            'username' => $user[0],
            'email' => $user[1],
            'password' => $user[2],
        ];
    }
    
    fileClose($resource);
    
    return $users;
}

function getUser($email, $users)
{
    $isFound = false;
    if (empty($users)) {
        return $isFound;
    }
    
    foreach ($users as $user) {
        if ($user['email'] == $email) {
            return $user;
        }
    }
    
    return $isFound;
}

function addUser($userdata)
{
    $user = $userdata['username'] . ':' . $userdata['email'] . ':' . $userdata['password'] . PHP_EOL;
    
    $resource = fileOpen();
    fwrite($resource, $user);
    fileClose($resource);
}

session_start();
if (!empty($_POST)) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $users = getUsers();
    if (empty(getUser($email, $users))) {
        $userdata = [
            'username' => $username,
            'email' => $email,
            'password' => md5($password),
        ];
        
        addUser($userdata);
        $_SESSION['userdata'] = serialize($userdata);
        
        header('Location: http://test.loc:8080/level1/index.php');
    }
}















