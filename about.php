    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">










      <?php 
// add about section from DB    
//........................................................
    $sql2 = "SELECT * FROM `about` ";
    $result2 = $conn->query($sql2);
    
    if ($result2->num_rows > 0) {
      // output data of each row
      while($row = $result2->fetch_assoc()) {
    
    

echo'

<div class="section-title">
<h2>About</h2>
<p>'.$row['desc1'].'</p>
</div>

<div class="row">
<div class="col-lg-4">
  <img src="assets/img/'.$row['photo'].'" class="img-fluid" alt="">
</div>
<div class="col-lg-8 pt-4 pt-lg-0 content">
  <h3>UI/UX Designer &amp; Web Developer.</h3>
  <p class="fst-italic">
  '.$row['desc2'].'
  </p>
  '.$row['lists'].'
  <p>
  '.$row['desc3'].' </p>
</div>
</div>
';
}}
//........................................................
 ?>



























      </div>
    </section><!-- End About Section -->
