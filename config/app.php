<?php
include "koneksi.php";
// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// // Memproses data formulir
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $full_name = $conn->real_escape_string($_POST['full_name']);
//     $email = $conn->real_escape_string($_POST['email']);
//     $company = $conn->real_escape_string($_POST['company']);
//     $message = $conn->real_escape_string($_POST['message']);

//     // Menyimpan data ke database
//     $sql = "INSERT INTO contacts (full_name, email, company, message) VALUES ('$full_name', '$email', '$company', '$message')";

//     if ($conn->query($sql) === TRUE) {
//         echo "Pesan berhasil dikirim!";
//         exit();
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//         exit();
//     }
// }

// $conn->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Memeriksa dan mengamankan input
  $full_name = isset($_POST['full_name']) ? $conn->real_escape_string($_POST['full_name']) : '';
  $email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';
  $company = isset($_POST['company']) ? $conn->real_escape_string($_POST['company']) : '';
  $message = isset($_POST['message']) ? $conn->real_escape_string($_POST['message']) : '';

  // Validasi data
  // if (empty($full_name) || empty($email) || empty($message)) {
  //     header("Location: index.html?status=error&message=Mohon isi semua field yang wajib");
  //     exit();
  // }

  // Menyimpan data ke database
  $sql = "INSERT INTO contacts (full_name, email, company, message) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $full_name, $email, $company, $message);

  if ($stmt->execute()) {
      header("Location: ../contact.php");
  } else {
      header("Location: contact.php");
  }
  $stmt->close();
} else {
  // Jika bukan metode POST, redirect ke halaman formulir
  header("Location: contact.php");
}

$conn->close();
?>

