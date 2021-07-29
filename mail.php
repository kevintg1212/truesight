<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');







    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        $email_pengirim = 'truesight.website@gmail.com'; // Isikan dengan email pengirim
        $nama_pengirim = 'Sistem Website'; // Isikan dengan nama pengirim
        $email_penerima = 'truesight.ts10@gmail.com'; // Ambil email penerima dari inputan form
        $email = $_POST['email'];
        $name = $_POST['name']; // Ambil email penerima dari inputan form
        $subject = $_POST['subject']; // Ambil subject dari inputan form
        $phone = $_POST['phone']; // Ambil message dari inputan form
        $message = 'Nama Pengirim:'.$name .'<br>'.
        'Email Pengirim:'.$email .'<br>'.
        'No Telp:'.$phone .'<br>'.
        'Pesan:<br>'.$_POST['message']; // Ambil message dari inputan form
        

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($subject) OR empty($phone) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

             // Get the form fields and remove whitespace.

             
             $mail = new PHPMailer;
             $mail->isSMTP();
             $mail->Host = 'smtp.gmail.com';
             $mail->Username = $email_pengirim; // Email Pengirim
             $mail->Password = 'Truesight10'; // Isikan dengan Password email pengirim
             $mail->Port = 465;
             $mail->SMTPAuth = true;
             $mail->SMTPSecure = 'ssl';
             // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
             $mail->setFrom($email_pengirim, $nama_pengirim);
             $mail->addAddress($email_penerima, '');
             $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
             // Load file content.php
             ob_start();
             // include "content.php";
             // $content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
             // ob_end_clean();
             $mail->Subject = $subject;
             $mail->Body = $message;
             //$mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
             // Jika tanpa attachment
             $send = $mail->send();

        // Send the email.
        if ($send) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
