    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
          
          
          

            <?php 
// add about section from DB    
//........................................................
    $sql2 = "SELECT * FROM `information`   ";
    $result2 = $conn->query($sql2);
    
    if ($result2->num_rows > 0) {
      // output data of each row
      while($row = $result2->fetch_assoc()) {
    
    

echo'
<div class="resume-item pb-0">
<h4>'.$row['title'].'</h4>
'.$row['desc_html'].'
</div>

';
}}
//........................................................
 ?>



          
          
          
        

          
          
          
          
          
            <h3 class="resume-title">Education</h3>
           
           
           
           




            <?php 
// add about section from DB    
//........................................................
    $sql2 = "SELECT * FROM `resume_info` WHERE state=1 ";
    $result2 = $conn->query($sql2);
    
    if ($result2->num_rows > 0) {
      // output data of each row
      while($row = $result2->fetch_assoc()) {
    
    

echo'
<div class="resume-item">
<h4>'.$row['title'].'</h4>
<h5>'.$row['date'].'</h5>
'.$row['desc'].'</div>

';
}}
//........................................................
 ?>


















        
          
          
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
           
           
           
           
        
            <?php 
// add about section from DB    
//........................................................
    $sql2 = "SELECT * FROM `resume_info` WHERE state=2 ";
    $result2 = $conn->query($sql2);
    
    if ($result2->num_rows > 0) {
      // output data of each row
      while($row = $result2->fetch_assoc()) {
    
    

echo'
<div class="resume-item">
<h4>'.$row['title'].'</h4>
<h5>'.$row['date'].'</h5>
'.$row['desc'].'</div>

';
}}
//........................................................
 ?>

  
        
        
        
        
        
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->
