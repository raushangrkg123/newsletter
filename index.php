<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SesIT Newsletter Subscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #f4f4f4;
        font-family: 'Arial', sans-serif;
      }
      .subscription-container {
        background: linear-gradient(135deg, #6ab04c, #badc58);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      }
      h2 {
        color: #fff;
        margin-bottom: 20px;
      }
      .form-control {
        border-radius: 10px;
      }
      .btn-primary {
        background-color: #d35400;
        border: none;
        border-radius: 10px;
      }
      .btn-primary:hover {
        background-color: #e67e22;
        transition: background-color 0.3s ease;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <div class="subscription-container">
        <h2 class="text-center mb-4">Subscribe to SesIT Newsletter</h2>
        <form method="post" action="sendtemplate.php">
          <div class="mb-3 col-md-10 mx-auto">
            <label for="email" class="form-label text-white">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>
          <button type="submit" class="btn btn-primary col-md-10 mx-auto d-block" name="submit">Subscribe</button>
        </form>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var messagetext = "<?= $_SESSION['status'] ?? ''; ?>";
        if (messagetext != '') {
            Swal.fire({
                title: "Subscription Success!",
                text: messagetext,
                icon: "success"
            });
            <?php unset($_SESSION['status']); ?>
        }
    </script>
  </body>
</html>
