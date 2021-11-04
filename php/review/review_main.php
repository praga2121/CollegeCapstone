<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Reviews</title>
	<link href="../../css/style.css" rel="stylesheet" type="text/css">
	<link href="../../css/reviews.css" rel="stylesheet" type="text/css"> 
</head>

<body>
    <?php include '../support elements/nav_wide.php';?>

	<nav class="navtop">
		<div>
			<h1>How did you feel about this college?</h1> </div>
	</nav>
	<div class="content home">
		<h2>Reviews</h2>
		<p>Check out the below reviews for this college.</p>
		<div class="reviews"></div>


		<script>
		// useless stuff that I am too lazy to clean up
		const reviews_page_id = 1;

		
		fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
			document.querySelector(".reviews").innerHTML = data;
			document.querySelector(".reviews .write_review_btn").onclick = event => {
				event.preventDefault();
				document.querySelector(".reviews .write_review").style.display = 'block';
				document.querySelector(".reviews .write_review input[name='name']").focus();
			};
			document.querySelector(".reviews .write_review form").onsubmit = event => {
				event.preventDefault();
				// 
				fetch("reviews.php?page_id=" + reviews_page_id, {
					method: 'POST',
					body: new FormData(document.querySelector(".reviews .write_review form"))
				}).then(response => response.text()).then(data => {
					document.querySelector(".reviews .write_review").innerHTML = data;
				});
			};
		});
		</script>
	</div>
</body>

</html>
