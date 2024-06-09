<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $contactNumber = htmlspecialchars($_POST['contact_number']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address. Please provide a valid email.');</script>";
        exit;
    }

    // Load Composer's autoloader
    require './phpmailer/Exception.php';
    require './phpmailer/PHPMailer.php';
    require './phpmailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'webdevloper11919463@gmail.com';
        $mail->Password = 'mohk hecx xxfs nhms';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('webdevloper11919463@gmail.com', 'Contact Form');
        $mail->addAddress('webdevloper11919463@gmail.com', 'Web Developer');

        $mail->isHTML(true);
        $mail->Subject = 'Protfolio Message To Hiring';
        $mail->Body = "
            <table style='width: 100%; border: 1px solid #ddd; border-collapse: collapse;'>
                <tr style='background-color: #f2f2f2;'>
                    <th style='padding: 10px; border: 1px solid #ddd;'>Field</th>
                    <th style='padding: 10px; border: 1px solid #ddd;'>Details</th>
                </tr>
                <tr>
                    <td style='padding: 10px; border: 1px solid #ddd;'>Sender Name</td>
                    <td style='padding: 10px; border: 1px solid #ddd;'>$name</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border: 1px solid #ddd;'>Sender Email</td>
                    <td style='padding: 10px; border: 1px solid #ddd;'>$email</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border: 1px solid #ddd;'>Contact Number</td>
                    <td style='padding: 10px; border: 1px solid #ddd;'>$contactNumber</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border: 1px solid #ddd;'>Message</td>
                    <td style='padding: 10px; border: 1px solid #ddd;'>$message</td>
                </tr>
            </table>
        ";

        $mail->send();
        echo "<script>alert('Message has been sent');</script>";
        echo "<script>windows.location.href(index.php) </script>";  

    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>

<section class="py-10 sm:py-16 lg:py-20 overflow-x-hidden">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap-reverse justify-center items-center md:space-x-12 md:gap-52">
            <div class="bg-gray-400 rounded-lg w-full sm:w-3/4 md:w-1/2 lg:w-1/3 px-5 py-5">
                <div class="rounded-lg w-full px-5 py-5">
                    <div class="text-center capitalize leading-normal w-full">
                        <h1 class="text-transparent bg-gradient-to-r from-blue-600 to-red-600 bg-clip-text hover:from-red-600 hover:to-blue-600 transition duration-500 md:text-5xl text-4xl">
                            Contact me</h1>
                    </div>
                    <form method="post" id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validForm(event)">
                        <div class="pt-10 space-y-4">
                            <div>
                                <input type="text" class="bg-black text-white w-full h-14 px-4 text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900" name="name" id="name" placeholder="First Name">
                            </div>
                            <div>
                                <input type="text" class="bg-black text-white w-full h-14 px-4 text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900" name="email" id="email" placeholder="Enter Email">
                            </div>
                            <div>
                                <input type="number" class="bg-black text-white w-full h-14 px-4 text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900" name="contact_number" id="contact_number" placeholder="Contact Number">
                            </div>
                            <div>
                                <textarea name="message" rows="5" class="bg-black px-4 py-2 text-white text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900 w-full" id="message" placeholder="Write Message"></textarea>
                            </div>
                        </div>
                        <div class="pt-4">
                            <div class="flex justify-start text-white">
                                <button type="submit" name="send" class="bg-gradient-to-r from-blue-500 to-black hover:bg-gradient-to-l p-3 rounded-full text-xl w-full">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                <div class="max-w-2xl w-full mx-auto">
                    <div class="flex flex-col space-y-5 py-10 md:py-16 lg:py-20">
                        <div class="flex items-center w-full py-5">
                            <a href="tel:6355923492" class="rounded-full w-18 h-16 bg-gradient-to-br from-blue-500 to-gray-900 hover:bg-gradient-to-bl hover:scale-110 transition duration-500 p-4">
                                <i class="fa-solid fa-phone-volume text-white text-3xl"></i>
                            </a>
                            <div class="ml-5">
                                <p class="text-lg mr-20  text-white">Phone</p>
                                <p class="text-xl text-white font-bold">6355923492</p>
                            </div>
                        </div>
                        <div class="flex items-center w-full py-5">
                            <a href="mailto:mauryaakash0198@gmail.com" class="rounded-full w-18 h-16 bg-gradient-to-br from-blue-500 to-gray-900 hover:bg-gradient-to-bl hover:scale-110 transition duration-500 p-4">
                                <i class="fa-solid fa-envelope text-white text-3xl"></i>
                            </a>
                            <div class="ml-5">
                                <p class="text-lg mr-64  text-white">Email</p>
                                <p class="text-xl  text-white font-bold">mauryaakash0198@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-center w-full py-5">
                            <a href="https://www.google.com/maps/place/Mahadev+Nagar+Pandesara/@21.1551426,72.8208662,17z/data=!3m1!4b1!4m6!3m5!1s0x3be04f8d7862b29f:0x121cff71a555d13f!8m2!3d21.1551376!4d72.8234411!16s%2Fg%2F11gxvspwfl?entry=ttu" target="_blank" class="rounded-full w-18 h-16 bg-gradient-to-br from-blue-500 to-gray-900 hover:bg-gradient-to-bl hover:scale-110 transition duration-500 p-5">
                                <i class="fa-solid fa-location-dot text-white text-3xl"></i>
                            </a>
                            <div class="ml-5">
                                <p class="text-lg mr-52  text-white">Location</p>
                                <p class="text-xl text-white font-bold capitalize">Pandesara Surat, 394221</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>


function validForm(e) {
    e.preventDefault();

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var contact_number = document.getElementById("contact_number").value;
    var message = document.getElementById("message").value;
    var mailFormat = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
    var contactFormat = /^\d{10}$/;

    if (!name) {
        alert("Please enter your Name!");
        document.getElementById("name").focus();
        return false;
    } else if (!email) {
        alert("Please enter your Email!");
        document.getElementById("email").focus();
        return false;
    } else if (!email.match(mailFormat)) {
        alert("Please enter a valid Email!");
        document.getElementById("email").focus();
        return false;
    } else if (!contact_number) {
        alert("Please enter your Contact Number!");
        document.getElementById("contact_number").focus();
        return false;
    } else if (!contact_number.match(contactFormat)) {
        alert("Please enter a valid Contact Number!");
        document.getElementById("contact_number").focus();
        return false;
    } else if (!message) {
        alert("Please enter your Message!");
        document.getElementById("message").focus();
        return false;
    } else {
        // Form submission
        var form = e.target;
        var formData = new FormData(form);
        var xhr = new XMLHttpRequest();
        xhr.open(form.method, form.action);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    alert("Message has been sent!");
                    window.location.reload();
                } else {
                    alert("Error: Message could not be sent. Please try again later.");
                }
            }
        };
        xhr.send(new URLSearchParams(formData).toString());
        return true;
    }
}
</script>