

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food website</title>
    <!-- <link rel="shortcut icon" href="favicon (2).ico" type="image/x-icon" /> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="index.js"></script>
</head>
<h>
    <header>
        <a href="contact.php" class="logo">Foody<span>Flavour</span></a>
        <div class="menutoggle" onclick="togglemenu();">

        </div>
        <ul class="navigation">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="expert.html">Expert</a></li>
            <li><a href="test.html">Testimonials</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </header>
    <body>
        <section class="contactus" id="contactus">
            <div class="title">
                <h2 class="titeText"><span>Contact Us</span></h2>
                <p>Thank you for visiting our website. Have a great day ahead!</p>
            </div>
            <form action="connect.php" method="POST">
            <div class="contactform">
                <h3>Send Message</h3>
                <div class="inputbox">
                    <input type="text" placeholder="Name" name="name" required>
                </div>
                <div class="inputbox">
                    <input type="password" placeholder="password" name="password" required>
                </div>
                <div class="inputbox">
                    <textarea placeholder="message" name="message" required></textarea>
                </div>
                <div class="inputbox">
                    <input type="submit" value="submit">
                </div>
            </div>
            </form>
        </section>
    </body>
</html>