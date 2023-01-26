
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        










    <?php 
// add hero section from DB    
//........................................................
    $sql2 = "SELECT * FROM `slider` ";
    $result2 = $conn->query($sql2);
    
    if ($result2->num_rows > 0) {
      // output data of each row
      while($row = $result2->fetch_assoc()) {
    
    

echo'
<h1>'.$row['name'].'</h1>
<p>I\'m <span class="typed" data-typed-items="'.$row['desc_html'].'"></span></p>
';
}}
//........................................................
 ?>









 <div class="social-links">





      <?php 
// add hero section fron DB    
//........................................................
    $sql2 = "SELECT * FROM `social` ";
    $result2 = $conn->query($sql2);
    
    if ($result2->num_rows > 0) {
      // output data of each row
      while($row = $result2->fetch_assoc()) {
    
    

echo'
<a href="'.$row['link'].'" class="'.$row['class'].'"><i class="'.$row['icon'].'"></i></a>
';



 }}
//........................................................
 ?>








      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">