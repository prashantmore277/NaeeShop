<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- linking css -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- linking responsive css -->
    <link rel="stylesheet" href="./style/responsive.css">

    <!----- Font awesome -->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- linking google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">
    <title>University website desgin</title>
</head>

<body>
    <header>
        <a href="#" class="logo-link"><img class="logo" src="./NAEESHOP-GIT/Logo/logo.jpg" alt="logo"></a>

        <nav class="navbar">
            <div class="nav-links" id="nav-links">
                <i class="fa fa-times" onclick="hiddenMenu()" aria-hidden="true"></i>

                <a href="#description" id="nav-link-home" class="nav-tabs">Home</a>
                <a href="#categories" class="nav-tabs">Online Booking</a>
                <a href="#home-service" class="nav-tabs">Home Service</a>
                <a href="#e-commerce" class="nav-tabs">Shop</a>
                <a href="#contact" class="nav-tabs">Contact</a>
            </div>
            <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>

        </nav>
    </header>


    <!-- header section ends here -->

    <!-- Contact us section -->
    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.99601763795!2d75.2221664605082!3d19.806114585864897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb9b8ab2190765%3A0x6d9cb2b8d811e30b!2sMathura%20NIWAS%20Avinash%20Housing%20Society%2C%20Shivajinagar%2C%20Waluj%2C%20Waluj%20Kh.%2C%20Maharashtra%20431133!5e0!3m2!1sen!2sin!4v1622889680002!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div class="">
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>XYZ, Road , ABC Building</h5>
                        <p>Aurangabad, Maharashtra</p>
                    </span>
                </div>
                <div class="">
                   <i class="fa fa-phone"></i>
                    <spa n>
                        <h5>+1 454851979</h5>
                        <p>Monday to Saturday, 10AM to 6PM</p>
                    </span>
                </div>
                <div class="">
                    <i class="far fa-envelope"></i> <span>
                        <h5>INF@O.net</h5>
                        <p>Email us Your Qurey</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="form-handler.php" method="POST">
                    <input type="text" name="name" placeholder="enter your name" required>
                    <input type="email" name="email" placeholder="enter your email" required>
                    <input type="text" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                </form>
            </div>
        </div>


    </section>
    <!-- footer -->
    <footer class="footer">
        <h4>Contact Us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sed cumque praesentium<br> aut suscipit natus
            accusantium necessitatibus magni vero libero.</p>
        <div class="icon">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-instagram-square"></i>
            <i class="fab fa-twitter-square"></i>
        </div>
        <p>Made with
            <i class="far fa-heart"></i>
            by Rihan Bagwan
        </p>
    </footer>
    <!-- javaScript for toggle menu -->
    <script>
        var navLinks = document.getElementById("nav-links");
        function hiddenMenu() {
            navLinks.style.right = "-200px";
        }
        function showMenu() {
            navLinks.style.right = "0";
        }
    </script>
</body>

</html>