<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Drop a Feedback</title>';
echo '<link href="../../css/style.css" rel="stylesheet" type="text/css">';
echo '<link href="../../css/reviews.css" rel="stylesheet" type="text/css">';
echo '</head>';
echo '<body>';
echo '<nav class="navtop">';
echo '<div>';
echo '<h1>How did you feel about this college?</h1>';
echo '</div>';
echo '</nav>';
echo '<div class="content home">';
echo '<h2>Reviews</h2>';
echo '<p>Check out the below reviews for this college.</p>';
echo '';
echo '<div class="reviews"></div>';
echo '<script>';
echo 'const reviews_page_id = 1;';
echo 'fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {';
echo 'document.querySelector(".reviews").innerHTML = data;';
echo 'document.querySelector(".reviews .write_review_btn").onclick = event => {';
echo 'event.preventDefault();';
echo 'document.querySelector(".reviews .write_review").style.display = \'block\';';
echo 'document.querySelector(".reviews .write_review input[name=\'name\']").focus();';
echo '};';
echo 'document.querySelector(".reviews .write_review form").onsubmit = event => {';
echo 'event.preventDefault();';
echo 'fetch("reviews.php?page_id=" + reviews_page_id, {';
echo 'method: \'POST\',';
echo 'body: new FormData(document.querySelector(".reviews .write_review form"))';
echo '}).then(response => response.text()).then(data => {';
echo 'document.querySelector(".reviews .write_review").innerHTML = data;';
echo '});';
echo '};';
echo '});';
echo '</script>';
echo '</div>';
echo '</body>';
echo '</html>';
echo '';
?>