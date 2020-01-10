<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Whats Open Today</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include 'navbar.php'; ?>
	<section id="search-section">
	<div class="container wo-search-container">
	  <label class="wo-search-label">Search Location:</label>
		<div>
	  <input type="text" class="wo-search-input"/>
		<a href="#" class="wo-search-btn"></a>
	</div>
	  <div class="wo-search-filters">
	    <a href="#" class="wo-search-filter-link"><span class="wo-search-filter-label">Search by:</span></a>
	    <a href="#" class="wo-search-filter-link"><span class="wo-search-filter-option">Distance</span></a>
	    <a href="#" class="wo-search-filter-link"><span class="wo-search-filter-option">Alphabetical</span></a>
	    <a href="#" class="wo-search-filter-link"><span class="wo-search-filter-option">Closing soon</span></a>
	  </div>
	</div>
	</section>
<section class="search-results">
	<div class="container wo-search-result-container">
	<?php
	for($i=0; $i<8; $i++){
		include "search-result.php";
	}
	?>
	</div>
</section>
<section id="footer">
	<div class="container">
	<img src="img/logo-footer.png" class="wo-footer-logo"/>
	<ul class="wo-footer-list">
		<li class="wo-footer-list-item">About Us</li>
		<li class="wo-footer-list-item">Contact Us</li>
		<li class="wo-footer-list-item">Account</li>
	</ul>
	<div style="text-align: center; overflow: hidden; width: 100%;">
	<span class="wo-footer-copyright">Copyright Hilwani Labs &copy;</span>
	</div>

</div>
</section>
</body>
</html>
