<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
}

main {
    background: white;
    max-width: 1000px;
    margin: 63px auto;
    padding: 28px;
    border: 7px solid black;
    border-radius: 15px;
    position: relative;
}

header {
    background: #E70808;
    padding: 2px 0;
    text-align: center;
    width: 100%;
    z-index: -1;
    top: 0;
}
header nav li {
    display: inline-block;
}
header nav a {
    text-decoration: none;
    font-size: 17px;
    color: #000000;
    padding:10px 20px;
    font-family: 'Montserrat';
    font-weight: bold;
}

header nav a:hover {
  color: white;
}

h1 {
  font-family: 'Montserrat', sans-serif;
  font-family: 'Playfair Display SC', serif;
  text-decoration: none;
  color: black;
  font-size: 24px;

}

h1 a {
    text-decoration: none;
    color: black;
    font-size: 24px;
    letter-spacing: 2px;
}

p {
    font-family: 'Montserrat', sans-serif;
    color: Black;
    position: relative;
    font-weight: bold;
    font-size: 114%;
    margin: 15px;
}
  </style>

<header>
  <h1><a href="index.html">Samarya Elliott</a></h1>
   <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="mywork.html">My Work</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
   </nav>
  </header>

<div class="container">

  <h1>Missing fields</h1>
  <p>Sorry, you have not completed all of the required fields.</p>
  <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

  <ul>
  <?php
	  for($i=0; $i<count($this->missing_required_fields); $i++){
		  echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	  }
  ?>
</ul>

  <p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
