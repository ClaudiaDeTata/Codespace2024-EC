<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MK Time</title>
</head>

<style>

body {
  position: relative;
  min-height: 100vh; /* Set minimum height to fill the viewport */
  margin: 0;
}

footer {
  position: bottom;
  bottom: 0;
  width: 100%;
  background-color: #FFC0CB;
  padding: 20px;
  text-align: center;
}

ul {
  list-style: none; 
}

.align-left {
  text-align: left;
}

footer a {
    color: black; 
    text-decoration: none; 
}

footer a:hover {
    color: #dc3545; 
}

  </style>
<body>
  
  <footer>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
      crossorigin="anonymous"></script>
          
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" 
      crossorigin="anonymous"></script>
      
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis libero vitae sem dictum, a molestie lorem tempor.</p>
      </div>
      <div class="col-md-3">
        <h4>Quick Links</h4>
        <ul class="align-left">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h4>Contact Us</h4>
        <p>123 Main Street, City
           Email: info@example.com
           Phone: 123-456-7890</p>
      </div>
    </div>
  </div>
  <div class="text-center bg-danger text-light py-3">
    <div class="container">
      <p>&copy; 2024 MK Time. All rights reserved.</p>
    </div>
  </div>

  </footer>
  
</body>
</html>