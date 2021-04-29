
<style type="text/css">

* {
  margin: 0;
  padding: 0;
  border: 0;
}

  header {
    position: fixed;
    width: 100%;
    top: 0;
    background: white;
    z-index: 99;
  }

  header nav {
      display: inherit;
      max-width: inherit;
      text-align: center;
      position: relative;
      top: -80px;
      right: -200px;
  }

  header nav li {
      display: inline-block;
      margin: 20px;
      top: 40px;
  }

  header nav a {
      text-decoration: none;
      font-family: 'Optima', bold;
      font-size: 18px;
      color: #333;
      font-weight: bold;
      transition: .2s;
  }

  header nav a:hover {
      border-bottom: 3px solid #333;
      transition: .2s;
  }

  .logo {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 185px;
    padding-top: 35px;
    animation: logodrop 1s linear;
  }


  .container {
    padding-top: 300px;
    max-width: 80%;
    margin: 0 auto;
    text-align: center;
  }

	footer{
	  padding: 10px;
	  position: fixed;
	  width: 100%;
	  bottom: 0;
	  background: white;
	  text-decoration: none;
	  font-family: 'Optima', bold;
	  font-size: 10px;
	  color: #333;
	  font-weight: bold;
	  z-index: 97;
	}


	footer nav {
	    display: inherit;
	    width: inherit;
	    text-align: center;
	}

	footer nav li {
	    display: inline-block;
	    margin: 0 170px;
	    margin-bottom: 0px;
	    margin-left: 165px;
	    margin-right: 195px;
	    text-align: center;
	}

	footer nav a {
	    text-decoration: none;
	    font-family: 'Optima', bold;
	    font-size: 18px;
	    color: #333;
	    font-weight: bold;
	    transition: .2s;
	    text-align: center;
	}

	footer nav a:hover {
	    border-bottom: 3px solid #333;
	    transition: .2s;
	}

  /*===========================

  --Animation Styling

  ================================*/

  @keyframes logodrop {
    from {
      transform: translateY(-200px);}
    to {
      transform: translateY(0px);}
    }

  </style>

  <header>

    <div class="header">
      <a href="index.html">
        <img class=logo src="images/dhcameralogo.jpg" alt="DH-Logo" width="175"></a>

      <nav>
        <ul>
          <li><a href="about.html">about</a></li>
          <li><a href="contact.html">contact</a></li>
        </ul>
      </nav>
      </div>

    </header>


  <div class="container">
  	<h1>Something is missing</h1>
  	<p>Sorry, you have not completed all of the required fields.</p>
  	<p>Please complete the required fields.</p>

  	<ul>
  	<?php
  		for($i=0; $i<count($this->missing_required_fields); $i++){
  			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
  		}
  	?>
  	</ul>

  	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
  </div>

  <footer>
  	<nav>
  	<ul>
      <li><a href="portraits.html">portraits</a></li>
      <li><a href="products.html">products</a></li>
  	</ul>
  	</nav>
  </footer>
