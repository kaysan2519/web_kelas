<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Tujuan email
    $to = "mkaysan5b@gmail.com";
    $subject = "Pesan Baru dari Website PPLG 5";
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    $headers = "From: $email";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>✅ Pesan berhasil dikirim! Terima kasih $name.</h2>";
        echo "<a href='contact.html'>Kembali</a>";
    } else {
        echo "<h2>❌ Pesan gagal dikirim. Silakan coba lagi.</h2>";
        echo "<a href='contact.html'>Kembali</a>";
    }
}
?>