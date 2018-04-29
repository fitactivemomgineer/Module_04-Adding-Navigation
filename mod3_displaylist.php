<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>


  <title>Page 3</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>
<body>

  <div class="container-fluid">
  <div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills">
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a href="page1.html">Features</a>
      </li>
      <li>
        <a href="page2.html">Pricing</a>
      </li>
      <li>
        <a href="page3.html">Customers</a>
      </li>
      <li  class="active">
        <a href="mod3_displaylist.php">Testimonial's</a>
      </li>
    </ul>
    <div class="jumbotron">
      <h2>
        Top 10 Customer Testimonial's
      </h2>
      <p>
        Our customers love our solution and wanted to share about their experience. Listed below are the top ten customers!
      <p>
        <a class="btn btn-primary btn-large" href="#">Learn more</a>
      </p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <?php
      include 'mod3_config.php';
      include 'mod3_opendb.php';

      $sql= "SELECT id, fname, city FROM customers LIMIT 10";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              echo "Customer: " . $row["id"]. "<br>";
              echo "First Name: " . $row["fname"]. "<br>";
              echo "City: " . $row["city"]. "<br><hr>";
          }
      } else {
          echo "0 results";
      }

      mysqli_close($conn);

      ?>
      </div>
      <div class="col-md-4">
        <p>
          Our intuitive interface means you'll be up and running in minutes, using features geared specifically to your asset management needs. We support team collaboration around asset reservations, maintenance, checkouts, and audits, with Barcode and QR Code scans via our mobile app. We also support RFID tag scans on external scanners. We're the complete asset tracking system - from procurement to retirement.

Presto provides a total GPS enabled asset tracking solution that includes everything small & medium sized teams need to securely track and manage their equipment on-the-go. Our solution includes powerful and secure cloud-based software, mobile scanner apps and patented QR code labels. So you're up and running fast!

Our solution manages the complete IT asset lifecycle, with a central repository combining network discovery and inventory data with purchase, warranty and maintenance details. Network connected devices are discovered and audited with our Discovery capability, or through integrations with your existing PC discovery and configuration management infrastructure such as Microsoft System Center.
</body>
</html>
