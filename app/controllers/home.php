<?php

class Home extends Controller
{

    public static function index($auth_service)
    {
        if (isset($_GET['code'])) {
            try {
                // Get the access token
                $auth_service->get_token($_GET['code']);
                // Save the access token as a session variable
                // Redirect to the page where user can create event
                echo('index home');
                header('Location: dashboard');
                die();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        if (isset($_SESSION['access_token']) && isset($_COOKIE['refresh_token'])) {
            header('Location: dashboard');
            echo($_SERVER['HTTP_HOST'].'---'.dirname($_SERVER['PHP_SELF']));
        }
            // $home_url = 'https://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) ;
 echo($_SERVER['HTTP_HOST'].'---'.dirname($_SERVER['PHP_SELF']));
        $data = ['title' => 'Email Handling App', 'login_url' => $auth_service->create_auth_url()];
        return parent::view('home/index', $data);
    }

    public static function logout()
    {
        session_destroy();
        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time()-1000);
                setcookie($name, '', time()-1000, '/');
            }
        }
        header('Location: index');
        exit();
    }
}
