<?php
    require __DIR__ . '../src/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Projektas</title>

<script src="https://kit.fontawesome.com/417c0c8055.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>  
<header> <!--navigacinio headerio pradzia !-->
    <div class="site-header">
        <div class="site-header-main">
            <div class="site branding">
                <h1 class="site-title">森mori.</h1>
            </div>
            <nav class="site-navigation">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="about.php">about us</a></li>
                    <li><a href="services.php">services</a></li>
                    <li><a href="works.php">works</a></li>
                    <li><a href="blog.php">blog</a></li>
                    <li><a href="contact.php">contact</a></li>
                </ul>
        </nav>
    </div>
 </div>        
</header>   
 <main class="site-content">   <!--banerio pradzia !-->
    <ul class="hero">
     <li class="hero-banner">
        <h2>we are 森  mori </h2>
         <p>profesionals<br/>in the creative industries</p>
         <div class="link"><a href="#contact" class="button dark">get in touch</a></div>
    </li>
 </ul>
 <div class="services section" id="services">  <!--service pradzia !-->
    <h2 class="section-title">what we do?</h2>
     <div class="item">
        <figure>
            <img src="foto/creative_kitchen.jpg" alt="creative kitchen">
        </figure>
         <div class="description">
            <h3><span>creative</span> kitchen</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <p><a href="services.php" class="button pale">learn more</a></p>
         </div>
     </div>
     <div class="item">
        <figure>
            <img src="foto/art3.jpg" alt="art">
        </figure>
         <div class="description">
            <h3><span>art</span>installation</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <p><a href="services.php" class="button pale">learn more</a></p>
         </div>
     </div>
     <div class="item">
        <figure>
            <img src="foto/blog.jpg" alt="blog">
        </figure>
         <div class="description">
            <h3><span>print</span>design</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <p><a href="services.php" class="button pale">learn more</a></p>
         </div>
     </div>
 </div>
<!--work pradzia !-->
   <div class="work section" id="work">
     <h2 class="section-title">our best work</h2>
       <ul class="works">
            <li>
                <a href="works.php">
                    <img src="foto/a.jpg" alt="works">
                        <div class="description">
                            <h3>awesome project</h3>
                            <p>print design</p>
                        </div>
                </a>
           </li>
           <li>
                <a href="works.php">
                    <img src="foto/b.jpg" alt="works">
                        <div class="description">
                            <h3>awesome print</h3>
                            <p>print design</p>
                        </div>
                </a>
           </li>
           <li>
                <a href="works.php">
                    <img src="foto/c.jpg" alt="works">
                        <div class="description">
                            <h3>awesome portrets</h3>
                            <p>portrets</p>
                        </div>
                </a>
           </li>
           <li>
                <a href="works.php">
                    <img src="foto/d.jpg" alt="works">
                        <div class="description">
                            <h3>landscapes</h3>
                            <p>photography</p>
                        </div>
                </a>
           </li>
           <li>
                <a href="works.php">
                    <img src="foto/e.jpg" alt="works">
                        <div class="description">
                            <h3>catalog</h3>
                            <p>print design</p>
                        </div>
                </a>
           </li>
             <li>
                <a href="works.php">
                    <img src="foto/f.jpg" alt="works">
                        <div class="description">
                            <h3>installation</h3>
                            <p>print design</p>
                        </div>
                </a>
           </li>
       </ul>
       <p class="link"><a href="works.php" class="button dark">learn more</a></p>
     </div>
     <!--team pradzia !-->   
     <div class="team section">
        <h2 class="section-title">best team</h2>
         <div class="team-best">
            <ul class="team-members">
             <li>
                 <a href="about.php">
                    <img src="foto/3.jpg" alt="Ella Fitzgerald">
                     <h3>Ella Fitzgerald</h3>
                     <p>art director</p>
                 </a> 
             </li>
             <li>
                 <a href="about.php">
                    <img src="foto/2.jpg" alt="David Lynch">
                     <h3>David Lynch</h3>
                     <p>film director</p>
                 </a> 
             </li>
            <li>
                <a href="about.php">
                    <img src="foto/6.jpg" alt="Audrey Horne">
                     <h3>Audrey Horne</h3>
                     <p>designer</p>
                 </a> 
             </li>
             </ul>
         </div> 
    </div>
         <!--contact pradzia!-->
        <div class="contact" >
        <h2 class="section-title">contact</h2>
            <div class="contact-info">
                <div class="contact-details">
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 23 Mulholland Drive, Suite 721. Los Angeles 10010 <br/>100 S. Main Street. Los Angeles 90012</p>
                <p><i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:+37065270952">+37066260568</a></p>
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">hello@mori.com</a></p>
                <ul class="social-media"> <!-- SOCIAL MEDIA !-->
                    <li><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-github-alt fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-snapchat-ghost fa-lg" aria-hidden="true"></i></a></li>
                </ul>
            </div>
                <!-- FORMA !-->
             <div class="contact-form">
                <form id="contact" action="index.php" method="post">
                    <p>
                        <input type="text" name="name" id="name" placeholder="name" required>
                    </p>
                    <p>
                        <input type="email" name="email" id="email" placeholder="e-mail" required>
                    </p>
                    <p>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="your message" required></textarea>
                    </p>
                    <p>
                        <button name="submit" type="submit" id="contact-submit" class="button pale">submit</button>
                    </p>
                 </form>
                </div>   
            </div>
        </div>   
</main>  
<!-- FOOTERIS !-->
<footer class="site-footer">
    <div class="copyright">
        <p>&copy; <?php echo date ('Y'). " "; ?>. 森mori.</p>
        <p>all rights reserved</p>
    </div>
</footer>
    </body>
</html>