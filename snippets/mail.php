<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Honeypot check
  if (!empty($_POST["honeypot"])) {
    exit("Spam detected.");
  }

  // Collect form data
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $phone = htmlspecialchars($_POST["phone"]);
  $message = htmlspecialchars($_POST["message"]);

  // File uploads (image + file)
  $attachments = [];
  foreach (["image", "file"] as $field) {
    if (!empty($_FILES[$field]["tmp_name"])) {
      $attachments[] = $_FILES[$field];
    }
  }

  // Email setup
  $to = "john.rose36@icloud.com"; // <-- replace with your email
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

  $headers = "From: $email\r\nReply-To: $email\r\n";

  // --- Simple mail() without attachments ---
  if (empty($attachments)) {
    mail($to, $subject, $body, $headers);
  } else {
    // --- With attachments ---
    $boundary = md5(time());
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    $messageBody = "--$boundary\r\n";
    $messageBody .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
    $messageBody .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $messageBody .= $body . "\r\n";

    foreach ($attachments as $file) {
      $fileContent = chunk_split(base64_encode(file_get_contents($file["tmp_name"])));
      $messageBody .= "--$boundary\r\n";
      $messageBody .= "Content-Type: " . $file["type"] . "; name=\"" . $file["name"] . "\"\r\n";
      $messageBody .= "Content-Disposition: attachment; filename=\"" . $file["name"] . "\"\r\n";
      $messageBody .= "Content-Transfer-Encoding: base64\r\n\r\n";
      $messageBody .= $fileContent . "\r\n";
    }

    $messageBody .= "--$boundary--";

    mail($to, $subject, $messageBody, $headers);
  }

  echo "Message sent successfully!";
}
?>