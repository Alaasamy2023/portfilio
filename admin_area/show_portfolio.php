<?php


include("includes/header.php");



?>




<div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Basic</strong> Examples </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>

                        
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>catagory</th>
                                            <th>client</th>
                                         

                                            <th>date</th>
                                            <th>url</th>
                                            <th>title</th>
                                            <th>desc</th>
                                            <th>class</th>
                                            <th>photo</th>
                                            <th>all_photo</th>


                                            <th>action</th>

                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                     
                                    
<?php 
//  portfolio section from DB    
//........................................................
    $sql2 = "SELECT * FROM `portfolio` ";
    $result2 = $conn->query($sql2);
    
    if ($result2->num_rows > 0) {
      // output data of each row
      while($row = $result2->fetch_assoc()) {
    
    

echo'


<tr>
<td>'.$row['catagory'].'</td>
<td>'.$row['client'].'</td>
<td>'.$row['date'].'</td>
<td>'.$row['url'].'</td>
<td>'.$row['title'].'</td>
<td>'.$row['desc'].'</td>
<td>'.$row['class'].'</td>
<td>'.$row['photo'].'</td>
<td>'.$row['all_photo'].'</td>



<td>
<a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
<a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>

<a href="عرض الصور " class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>

</td>


</td>

</tr>



';
}}
//........................................................
 ?>










                            






                                        
                                    </tbody>
                                </table>
                           <?php


include("includes/footer.php");



?>