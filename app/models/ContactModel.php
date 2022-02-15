<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

    class ContactModel {
        private $name;
        private $tel;
        private $email;
        private $message;

        public function setData($name, $tel, $email, $message) {
            $this->name = $name;
            $this->tel = $tel;
            $this->email = $email;
            $this->message = $message;
        }

        public function validForm() {
            if(strlen($this->name) < 1)
                return "Введите имя";
            else if(strlen($this->tel) < 1)
                return "Введите телефон";
            else if(!is_numeric($this->tel))
                return "Вы ввели не телефон";
            else if(strlen($this->message) > 100)
                return "Сообщение не более 100 символов";
            else
                return "Верно";
        }

        public function mail() {

            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host       = 'smtp.send-box.ru';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'sendbox@agrovitrum.bizml.ru';
                $mail->Password   = 'bqqJ5tcZA6qrpN';
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                $mail->setFrom('info@agrovitrum.ru', 'Agrovitrum');

                $mail->addAddress('info@agrovitrum.ru', 'Agrovitrum');

                $mail->addAddress('alex979793@mail.ru', 'Alexander Moskvin');

                $mail->isHTML(true);
                $mail->Subject = 'Сообщение с сайта';

                $parsedown = new Parsedown();

                $text = '#Приветсвенное письмо
                $this->name';
                $message = $parsedown->text($text);

                $mail->Body = '<span>Имя: </span>' . $this->name . '<br><br><span>Телефон: </span>' . $this->tel .
                    '<br><br><span>Почта: </span>' . $this->email . '<br><br><span>Сообщение: </span>' . $this->message;

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