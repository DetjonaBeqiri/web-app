<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contect="width=device-width, initial-scale=1.0">
        <link href="css/blogstyle.css" rel="stylesheet">
        <title>Blog</title>
</head>

<body>
<!--HEADERI -->
<?php include('./includes/header.php') ?>

<div class="container">
    <div class="title">
        <h5>Blog</h5>
        <h1>Trendy News Feed</h1>
        </div>

        <form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<button type="submit" name="submit">UPLOAD </button>

        
<div class="column-card">

    <div class="card">
        <img src="./Image/office2.jpg">
        <div class="panel">
            <span class="date">24H</span>
            <p>The maintenance business has seen a significant increase..</p>
            <span class="breaker"></span>
            <h3>15th Hire Since Lockdown Began</h3>
            <a href="#">Know <i class="fa
                fa-long-arrow-right"></i></a>
            </div>
        </div>
    
    <div class="card">
        <img src="./Image/earth.jpg">
        <div class="panel">
            <span class="date">24H</span>
            <p>Earth day is an important day for our company...</p>
            <span class="breaker"></span>
            <h3>Earth Day 2020</h3>
            <a href="#">Know <i class="fa
                fa-long-arrow-right"></i></a>
            </div>
        </div>
        
        <div class="card">
            <img src="./Image/stiik.png">
            <div class="panel">
                <span class="date">24H</span>
                <p>Whatweb is delighted to have become a member of STIKK...</p>
                <span class="breaker"></span>
                <h3>Member of STIKK in Kosovo</h3>
                <a href="#">Know <i class="fa
                    fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER -->
 <?php include('./includes/footer.php') ?>

</body>
</html>