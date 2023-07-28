<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Perform additional validation or processing as needed.

    // Send email (You may need to configure your server to enable email sending)
    $to = "contact@sawari.com";
    $subject = "New Message from Sawari Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        $successMessage = "Your message has been sent successfully!";
    } else {
        $errorMessage = "Oops! Something went wrong. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <div class="container">
        <h1>Contact Sawari</h1>
        <?php if (isset($successMessage)) : ?>
            <p class="success"><?php echo $successMessage; ?></p>
        <?php endif; ?>

        <?php if (isset($errorMessage)) : ?>
            <p class="error"><?php echo $errorMessage; ?></p>
        <?php endif; ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
