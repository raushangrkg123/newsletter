<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Animated HTML5 Email</title>
  <style>
    /* Keyframes for infinite header animation */
    @keyframes headerBounce {
      0% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
      100% {
        transform: translateY(0);
      }
    }

    /* Keyframes for button hover animation */
    @keyframes infinitePulse {
      0% {
        transform: scale(1);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      50% {
        transform: scale(1.05);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      }
      100% {
        transform: scale(1);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
    }

    /* Apply header bounce animation */
    h1 {
      animation: headerBounce 2s ease-in-out infinite;
      color: #ecf0f1;
    }

    /* Pulse effect for call to action buttons */
    a {
      animation: infinitePulse 1.5s ease-in-out infinite;
      transition: all 0.3s ease;
    }

    /* Additional hover effect on buttons */
    a:hover {
      background-color: #3498db !important;
      color: #ffffff !important;
    }
  </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: 'Helvetica Neue', Arial, sans-serif;">

  <!-- Main Email Container -->
  <table cellpadding="0" cellspacing="0" width="100%" style="text-align: center; border: 0; max-width: 600px; background-color: #ffffff; border-radius: 10px; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); margin: 20px auto; padding: 0;">
    
    <!-- Header Section -->
    <tr>
      <td style="padding: 20px 0; text-align: center; background-color: #2c3e50; border-radius: 10px 10px 0 0;">
        <h1 style="font-size: 28px; margin: 0;">Welcome to SesIT</h1>
        <p style="color: #bdc3c7; font-size: 16px; margin: 10px 0;">Raushan Kumar Gupta, Web Developer at SesIT</p>
      </td>
    </tr>

    <!-- Content Section -->
    <tr>
      <td style="padding: 30px 20px; text-align: left; color: #333333;">
        <p style="font-size: 18px; line-height: 1.6; margin: 0 0 15px 0;">
          Hi Munesh Jii,
        </p>
        <p style="font-size: 16px; line-height: 1.6; margin: 0 0 20px 0;">
          I'm excited to share my work as a Web Developer at SesIT. You can follow me for more updates and insights into my journey on social media!
        </p>

        <!-- Call to Action Buttons -->
        <div style="text-align: center; margin-bottom: 20px;">
          <a href="https://www.instagram.com/raushan.py/?next=%2F" style="background-color: #e4405f; color: #ffffff; text-decoration: none; padding: 12px 20px; font-size: 18px; font-weight: bold; border-radius: 5px; display: inline-block; margin-right: 10px;">Follow on Instagram</a>
          <a href="https://youtube.com/@rkgupta784?si=jMTm7Sio5-LYKBEp" style="background-color: #ff0000; color: #ffffff; text-decoration: none; padding: 12px 20px; font-size: 18px; font-weight: bold; border-radius: 5px; display: inline-block; margin-right: 10px;">Subscribe on YouTube</a>
          <a href="https://www.linkedin.com/in/theraushan-kumar-gupta" style="background-color: #0077b5; color: #ffffff; text-decoration: none; padding: 12px 20px; font-size: 18px; font-weight: bold; border-radius: 5px; display: inline-block;">Connect on LinkedIn</a>
        </div>

        <p style="font-size: 16px; line-height: 1.6; margin: 30px 0 0 0;">
          If you have any questions or want to learn more about my work, feel free to reach out!
        </p>
      </td>
    </tr>

    <!-- Footer Section -->
    <tr>
      <td style="padding: 20px; background-color: #ecf0f1; text-align: center; border-radius: 0 0 10px 10px;">
        <p style="font-size: 14px; color: #7f8c8d; margin: 0;">
          &copy; 2024 Raushan Kumar Gupta | Web Developer at SesIT<br>
          <a href="#" style="color: #e74c3c; text-decoration: none;">Unsubscribe</a>
        </p>
      </td>
    </tr>

  </table>

</body>
</html>
