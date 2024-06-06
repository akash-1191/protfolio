<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = htmlspecialchars($_POST['name']);
//     $email = htmlspecialchars($_POST['email']);
//     $contactNumber = htmlspecialchars($_POST['contact_number']);
//     $message = htmlspecialchars($_POST['message']);
    
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "<script>alert('Invalid email address. Please provide a valid email.');</script>";
//     } else {
//         $to = "mauryaakash1191@gmail.com";
//         $subject = "Contact Form Hire";
        
//         $email_message = "Name: " . $name . "\n";
//         $email_message .= "Email: " . $email . "\n";
//         $email_message .= "Contact Number: " . $contactNumber . "\n";
//         $email_message .= "Message: \n" . $message;
        
//         $headers = "From: " . $email . "\r\n";
//         $headers .= "Reply-To: " . $email . "\r\n";
//         $headers .= "X-Mailer: PHP/" . phpversion(); 
        
//         if (mail($to, $subject, $email_message, $headers)) {
//             echo "<script>alert('Your message has been sent successfully!');</script>";
//         } else {
//             echo "<script>alert('Sorry, there was an error sending your message. Please try again later.');</script>";
//         }
//     }
// }
?>


<section class="py-10 grid md:grid-cols-2 sm:grid-cols-1">
    <div class="md:px-10 px-8">
        <div class="bg-black rounded-lg w-full sm:max-w-[40vw] sm:h-auto p-10">
            <div class="text-center capitalize leading-normal w-full ">
                <h1 class="text-transparent bg-gradient-to-r from-blue-600 to-red-600 bg-clip-text hover:from-red-600 hover:to-blue-600 transition duration-500 text-6xl">Contact me</h1>
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="flex flex-wrap justify-center items-center gap-5 py-6 sm:py-10">
                    <div class="">
                        <input type="text" class="bg-black bg-transparent text-white md:w-60 w-full sm:w-80 h-14 px-2 text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900" name="name" id="name" placeholder="First Name">
                    </div>
                    <div class="">
                        <input type="email" class="bg-black bg-transparent text-white md:w-60 w-full sm:w-80 h-14 px-2 text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900 " name="email" id="email" placeholder="Enter Email">
                    </div>
                </div>
                <div class="flex flex-wrap justify-center items-center gap-5 ">
                    <div class="">
                        <input type="text" class="bg-black bg-transparent text-white md:w-60 w-full sm:w-80 h-14 px-2 text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900 " name="contact_number" id="contact_number" placeholder="Contact Number">
                    </div>
                    <div class="">
                        <textarea name="message" rows="5" cols="33" class="bg-black px-2 py-2 text-white text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900 w-full sm:w-auto" placeholder="Write Message"></textarea>
                    </div>
                </div>
                <div>
                    <div class="">
                        <div class="flex justify-center items-center text-white w-full py-2 px-2">
                            <button type="submit" name="submit" class="bg-gradient-to-r from-blue-500 to-black hover:bg-gradient-to-l p-3 rounded-full text-xl">Send Message</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="px-5 w-full">
        <div class="max-w-2xl w-full mx-auto">
            <div class="flex flex-col space-y-5 py-32">
                <div class="flex w-full py-5">
                    <a href="tel:6355923492">
                        <div class="relative flex justify-center items-center w-16 h-16 rounded-full text-white bg-gradient-to-br from-blue-500 to-gray-900 hover:bg-gradient-to-bl hover:scale-110 transition duration-500">
                            <div class="text-2xl">
                                <i class="fa-solid fa-phone-volume absolute top-5 left-5"></i>
                            </div>
                        </div>
                    </a>

                    <div class="ml-5 md:ml-10">
                        <p class="text-lg text-white">Phone</p>
                        <p class="text-xl text-white font-bold">6355923492</p>
                    </div>

                </div>
                <div class="flex w-full py-5">
                    <a href="mailto:mauryakash0198@gmail.com" target="_blank">
                        <div class="relative flex justify-center items-center w-16 h-16 rounded-full text-white bg-gradient-to-br from-blue-500 to-gray-900 hover:bg-gradient-to-bl hover:scale-110 transition duration-500">
                            <div class="text-2xl">
                                <i class="fa-solid fa-envelope absolute top-5 left-5"></i>
                            </div>
                        </div>
                    </a>
                    <div class="ml-5 md:ml-10">
                        <p class="text-lg text-white">Email</p>
                        <p class="text-xl text-white font-bold">mauryaakash0198@gmail.com</p>
                    </div>
                </div>
                <div class="flex w-full py-5">
                    <a href="https://www.google.com/maps/place/Mahadev+Nagar+Pandesara/@21.1551426,72.8208662,17z/data=!3m1!4b1!4m6!3m5!1s0x3be04f8d7862b29f:0x121cff71a555d13f!8m2!3d21.1551376!4d72.8234411!16s%2Fg%2F11gxvspwfl?entry=ttu" target="_blank">
                        <div class="relative flex justify-center items-center w-16 h-16 rounded-full text-white bg-gradient-to-br from-blue-500 to-gray-900 hover:bg-gradient-to-bl hover:scale-110 transition duration-500">
                            <div class="text-2xl">
                                <i class="fa-solid fa-location-dot absolute top-5 left-5"></i>
                            </div>
                        </div>
                    </a>
                    <div class="ml-5 md:ml-10">
                        <p class="text-lg text-white">Location</p>
                        <p class="text-xl text-white font-bold capitalize">pandesara surat 394221</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
