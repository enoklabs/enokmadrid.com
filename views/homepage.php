

    <!-- ****** HOME CTA JUMBOTRON ******* -->
    <section class="jumbotron">
        <div class="container cta">
            <!-- <span class="name">Enok Madrid</span> -->
            <h1 class="c-white">UI/UX<br> Branding <br>
              <small>Front-End Developer</small>
            </h1>
            <a class="button btn btn-lg bgm-transparent-punch no-shadow">Let's Connect</a>
        </div>
    </section>
    <!--  END HOME CTA Jumbotron -->

</div><!-- End hero-image -->

<!-- ****** ABOUT ME INTRODUCTION ******* -->
<section class="about-me">
  <div class="container">
    <div class="row">
        <h2 class="section-title">A bit about me</h2>
        <p class="section-subtitle">Allow myself...to introduce...myself.</p>
        <p class="about-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Nam quibusdam, fugiat natus magnam consequuntur asperiores assumenda in voluptate velit.
          Quisquam fugiat tempora similique nulla neque consectetur quod, dignissimos placeat suscipit?
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Vel quisquam quas hic, fugit expedita molestias accusantium ipsam fuga distinctio,
          explicabo libero, minima voluptates quasi provident nesciunt, in commodi maiores aliquam.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a >Ethical Graffti</a>
          Dolore totam omnis nostrum voluptatibus aliquam. Numquam hic porro adipisci
          suscipit possimus iure, debitis, officia rem tempora, veritatis architecto ipsa culpa iste.
        </p>
    </div>
  </div>
</section>



<!-- ****** MY WORK ******* -->
<section class="my-work">
  <div class="container">
    <div class="row">
        <h2 class="section-title">My Work</h2>
        <p class="section-subtitle">This is a small collection of my work from 2014.</p>
    </div>
  </div>
</section>




<!-- PORTFOLIO SECTION -->
<section class="portfolio">
    <div class="container-fluid">
        <div class="row">

          <?php
            $x = 1;
            while($x <= 6) { ?>

             <a href="project.php" class="project col-lg-4 col-sm-6 col-xs-12">
                 <div class="project-info">
                   <h4 class="project-title">Project Title Here</h4>
                   <!-- <span class="project-description">Project Description</span> -->
                   <ul class="project-tags">
                     <li>Research</li>
                     <li>UX</li>
                     <li>UI Design</li>
                     <li>Front-End Development</li>
                   </ul>
                 </div>
                 <img src="img/mac.jpg" alt="Project" class="project-img img-responsive"/>
             </a>

           <?php $x++; } ?>





        </div>
    </div>
</section>
<!-- END PORTFOLIO SECTION -->



<section class="view-process">
    <div class="container c-white">
      <div class="row">

            <a href="process.php" class="process-link tk-futura-pt">View Process <i class="fa fa-arrow-right c-white"></i></a>

      </div>
    </div>
</section>
