<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hostel Booking Form</title>
  <link rel="stylesheet" href="booking.css">
</head>

<body>
  <header class="head">
    <div class="logo">
      <p>One Space</p>
    </div>
    <nav>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="services.html">SERVICES</a></li>
        <li><a href="aboutus.html">ABOUT US</a></li>
        <li><a href="gallery.html">GALLERY</a></li>
        <li><a href="TESTIMONIALS.html">TESTIMONIALS</a></li>
        <li><a href="contact.html">CONTACT US</a></li>
      </ul>
    </nav>
  </header>

  <?php


  include 'connect.php';


  ?>



  <form action="connect.php" method="post">
    <h2>Hostel Booking Form</h2>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="checkin">Onboarding Date:</label>
    <input type="date" id="checkin" name="checkin" required>

    <label for="roomtype">Room Type:</label>
    <select id="roomtype" name="roomtype" required>
      <option value="single">Single</option>
      <option value="double">Double</option>
    </select>

    <label for="additionalrequests">Additional Requests:</label>
    <textarea id="additionalrequests" name="additionalrequests" rows="5"></textarea>

    <button type="submit" name="submit">Book Now</button>
  </form>

</body>

</html>