<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

    class ContactModel {
        private $name;
        private $email;
        private $age;
        private $message;

        public function setData($name, $email, $age, $message) {
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
            $this->message = $message;
        }

        public function validForm() {
            if(strlen($this->name) < 3)
                return "Имя слишком короткое";
            else if(strlen($this->email) < 3)
                return "Email слишком короткий";
            else if(!is_numeric($this->age) || $this->age <= 0 || $this->age > 90)
                return "Вы ввели не возраст";
            else if(strlen($this->message) < 3)
                return "Сообщение слишком короткое";
            else
                return "Верно";
        }

        public function mail() {

            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host       = 'smtp-relay.sendinblue.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'alexander979793@gmail.com';
                $mail->Password   = 'ZxH98snXR42Gfmk0';
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                $mail->setFrom('alexander979793@gmail.com', 'Alexander Moskvin');

                $mail->addAddress('alex979793@mail.ru', 'Alexander Moskvin');

                $mail->isHTML(true);
                $mail->Subject = 'Сообщение с сайта';

                $parsedown = new Parsedown();

                $text = '#Приветсвенное письмо
            Привет, это *письмо* было создано через _Parsedown_!';
                $message = $parsedown->text($text);

                $mail->Body    = $message;

                $mail->AltBody = strip_tags($message);

                $mail->CharSet = 'UTF-8';
                $mail->Encoding = 'base64';

                $mail->send();
                return 'Сообщение было отправлено';
            } catch (Exception $e) {
                return "Сообщение не было отправлено. Ошибка: {$mail->ErrorInfo}";
            }
        }
    }