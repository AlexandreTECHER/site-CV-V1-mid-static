<?php

class MainController
{

    public function home()
    {
        return $this->show('home');
    }

    public function experience()
    {
        return $this->show('experience');
    }

    public function portfolio()
    {
        return $this->show('portfolio');
    }

    public function diplome()
    {
        return $this->show('diplome');
    }

    public function contact()
    {
        return $this->show('contact');
    }

    public function contactPost()
    {
        if (isset($_POST)) {
            global $router;

            if (isset($_POST['visitor_name'])) {
                $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
            }

            if (isset($_POST['visitor_forename'])) {
                $visitor_forename = filter_var($_POST['visitor_forename'], FILTER_SANITIZE_STRING);
            }

            if (isset($_POST['visitor_email'])) {
                $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
                $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
            }

            if (isset($_POST['visitor_message'])) {
                $visitor_message = htmlspecialchars($_POST['visitor_message']);
            }

            $recipient = "alexandre.techer@protonmail.com";

            $headers  = 'MIME-Version: 1.0' . "\r\n"
                . 'Content-type: text/html; charset=utf-8' . "\r\n"
                . 'From: ' . $visitor_email . "\r\n";

            if (mail($recipient, $visitor_email, $visitor_message, $headers)) {
                $_SESSION['send'] = true;
            };
            header('Location: ' . $router->generate('contact-page'));
        } else {
            echo '<p>Un problème quelque part !</p>';
        }
    }

    public function contactPostMobile()
    {
        if (isset($_POST)) {
            global $router;

            if (isset($_POST['visitor_name'])) {
                $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
            }

            if (isset($_POST['visitor_forename'])) {
                $visitor_forename = filter_var($_POST['visitor_forename'], FILTER_SANITIZE_STRING);
            }

            if (isset($_POST['visitor_email'])) {
                $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
                $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
            }

            if (isset($_POST['visitor_message'])) {
                $visitor_message = htmlspecialchars($_POST['visitor_message']);
            }

            $recipient = "alexandre.techer@protonmail.com";

            $headers  = 'MIME-Version: 1.0' . "\r\n"
                . 'Content-type: text/html; charset=utf-8' . "\r\n"
                . 'From: ' . $visitor_email . "\r\n";

            if (mail($recipient, $visitor_email, $visitor_message, $headers)) {
                $_SESSION['send'] = true;
            };
            header('Location: ' . $router->generate('homepage-accueil', ['id' => 'contact']));
        } else {
            echo '<p>Un problème quelque part !</p>';
        }
    }

    public function error404()
    {
        return $this->show('error');
    }

    protected function show($template)
    {

        global $router;

        require_once __DIR__ . '../../views/layout/header.tpl.php';
        require_once __DIR__ . '../../views/mainPages/' . $template . '.tpl.php';
        require_once __DIR__ . '../../views/layout/footer.tpl.php';
    }
}
