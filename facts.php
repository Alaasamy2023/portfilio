    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">





        <?php 
// add fact section from DB    
//........................................................
    $sql2 = "SELECT * FROM `facts` ";
    $result2 = $conn->query($sql2);
    
    if ($result2->num_rows > 0) {
      // output data of each row
      while($row = $result2->fetch_assoc()) {
    
    

echo'
<div class="'.$row['class'].'">
<div class="count-box">
  <i class="'.$row['icon'].'"></i>
  <span data-purecounter-start="0" data-purecounter-end="'.$row['num'].'" data-purecounter-duration="1" class="purecounter"></span>
  <p>'.$row['title'].'</p>
</div>
</div>
';
}}
//........................................................
 ?>







        </div>

      </div>
    </section><!-- End Facts Section -->
