<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
  <div class="container">
    <h1>Contact Us</h1>
    <form id="contact-form">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>
      <button type="submit">Submit</button>
    </form>
    <div id="response"></div>
  </div>
  <script src="contact.js"></script>
</body>
</html>
