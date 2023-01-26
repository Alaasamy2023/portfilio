
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>













          <?php 
// add skills_info section from DB    
//........................................................
    $sql2 = "SELECT * FROM `skills_info` ";
    $result2 = $conn->query($sql2);
    
    if ($result2->num_rows > 0) {
      // output data of each row
      while($row = $result2->fetch_assoc()) {
    
    

echo'
<p>'.$row['desc'].'</p>

';
}}
//........................................................
 ?>












  </div>

        <div class="row skills-content">

          <div class="col-lg-10">

          
          
          
          
          
          
          
          <?php 
// add skills_info section from DB    
//........................................................
    $sql2 = "SELECT * FROM `skills` ";
    $result2 = $conn->query($sql2);
    
    if ($result2->num_rows > 0) {
      // output data of each row
      while($row = $result2->fetch_assoc()) {
    
    

echo'
<div class="progress">
<span class="skill">'.$row['title'].' <i class="val">'.$row['rate'].'%</i></span>
<div class="progress-bar-wrap">
  <div class="progress-bar" role="progressbar" aria-valuenow="'.$row['rate'].'" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
';
}}
//........................................................
 ?>

       
          
          
          
        













            <!-- <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> -->

          <!-- </div> -->

        </div>

      </div>
    </section><!-- End Skills Section -->
