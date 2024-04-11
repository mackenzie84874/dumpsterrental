<?php
  // Define variables for navigation links
  $dumpstersLink = "https://detroitdumpsterpro.com";
  $wasteManagementLink = "https://detroitdumpsters.netlify.app/";
  $wasteDisposalLink = "https://detroitdumpster.vercel.app/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detroit Waste Disposal Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    nav {
      background-color: #444;
      padding: 10px;
      text-align: center;
    }
    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }
    nav a:hover {
      text-decoration: underline;
    }
    section {
      padding: 20px;
    }
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
  <header>
    <h1>Detroit Waste Disposal Management</h1>
  </header>
  <nav>
    <a href="#services">Services</a>
    <a href="#faqs">FAQs</a>
    <a href="#company">About Us</a>
    <a href="#areas">Nearby Areas</a>
  </nav>
  <section id="services">
    <h2>Our Services</h2>
    <p>Welcome to Detroit Waste Disposal Management! We offer a range of services to meet your waste disposal needs:</p>
    <ul>
      <li><strong>Dumpster Rental:</strong> We provide convenient dumpster rental services for residential and commercial projects.</li>
      <li><strong>Waste Management:</strong> Our waste management solutions help businesses and communities minimize their environmental impact.</li>
      <li><strong>Waste Disposal:</strong> We offer safe and responsible waste disposal services to ensure compliance with regulations.</li>
    </ul>
  </section>
  <section id="faqs">
    <h2>Frequently Asked Questions</h2>
    <h3>1. How can I rent a dumpster?</h3>
    <p>To rent a dumpster, simply visit our website at <a href="<?php echo $dumpstersLink; ?>">Dumpsters near me</a> and follow the easy booking process.</p>
    <h3>2. What types of waste can I dispose of?</h3>
    <p>We accept a wide range of waste materials, including household debris, construction waste, and yard waste. However, hazardous materials are not permitted.</p>
    <h3>3. How much does dumpster rental cost?</h3>
    <p>Our pricing varies depending on the size of the dumpster and the duration of the rental. Contact us for a customized quote.</p>
  </section>
  <section id="company">
    <h2>About Us</h2>
    <p>Detroit Waste Disposal Management is a leading provider of waste management solutions in the Detroit area. With years of experience in the industry, we are committed to delivering reliable and environmentally friendly services to our customers.</p>
    <p>Our team consists of dedicated professionals who prioritize customer satisfaction and sustainability in everything we do.</p>
    <p>Visit our website at <a href="<?php echo $wasteManagementLink; ?>">Waste Management</a> to learn more about our company and how we can assist you with your waste disposal needs.</p>
  </section>
  <section id="areas">
    <h2>Nearby Areas We Serve</h2>
    <p>Our waste disposal services are available in the following areas:</p>
    <ul>
      <li>Downtown Detroit</li>
      <li>Midtown</li>
      <li>Eastern Market</li>
      <li>Corktown</li>
      <li>Greektown</li>
    </ul>
    <p>If your area is not listed, please contact us to inquire about service availability in your location.</p>
  </section>
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Detroit Waste Disposal Management</p>
  </footer>
</body>
</html>
