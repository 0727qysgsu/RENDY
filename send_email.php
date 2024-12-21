<?php
require 'vendor/autoload.php'; // Ini untuk mengautoload PHPMailer dan library lainnya

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $technology = $_POST['technology'];
    $other_technology = $_POST['other_technology'] ? $_POST['other_technology'] : '-';
    
    // Buat konten email
    $body = "You have received a new message from your contact form.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";
    $body .= "Technology: $technology\n";
    $body .= "Other Technology: $other_technology\n";

    // Menyiapkan PHPMailer
    $mail = new PHPMailer(true);
    
    try {
        // Pengaturan server SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'prodenzer@gmail.com'; // Email pengirim (email Anda)
        $mail->Password = 'faco dumm fnrh twex'; // Ganti dengan App Password Gmail Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Set pengirim dan penerima
        $mail->setFrom('prodenzer@gmail.com', 'Your Name'); // Ganti dengan nama pengirim
        $mail->addAddress('prodenzer@gmail.com', 'Recipient Name'); // Ganti dengan email penerima

        // Set subjek dan body email
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body    = $body;

        // Cek apakah ada file lampiran
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $fileTmpPath = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $mail->addAttachment($fileTmpPath, $fileName); // Lampirkan file
        }

        // Kirim email
        if ($mail->send()) {
            // Redirect ke index.php setelah email berhasil terkirim
            header("Location: index.php");
            exit(); // Pastikan script berhenti setelah redirect
        } else {
            echo "There was an error sending your message.";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
