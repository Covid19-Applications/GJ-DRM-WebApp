<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>


<style type="text/css">
	
.button{
	background: #3498db;
    color: #fff;
    border-radius: 50px;
    margin: 0 15px;
    padding: 10px 30px;	
}
	
</style>
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg ">
        <div class="container">
        	<br><br><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="bradcam_text">
                    	<br>
                        <h1>Isolation Centers</h1>
                        	<p>Care Hospital, Hyderabad</p>
                        		<a href="#iso"><button class="button">Know More</button></a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bradcam_text">
                        <img src="img/gujarat/center.gif" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <br><br><br>
	<!-- Start Sample Area -->
	   <section id="clients" class="clients clients ">
      <div class="container ">

        <div class="row col-lg-12">

          <div class="col-lg-4 " data-aos="zoom-in" data-aos-delay="100">
            <h4><a href="https://covidindia.org/gujarat/"> Isolation Centers</a></h4>
          </div>

          <div class="col-lg-4 " data-aos="zoom-in" data-aos-delay="100">
            <h4><a href="https://covidindia.org/gujarat/"> Quarantine Centers</a></h4>
          </div>

          <div class="col-lg-4 " data-aos="zoom-in" data-aos-delay="100">
            <h4><a href="covid-dashboard.php #testing"> Testing Centers</a></h4>
            
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <br><br><br><br><br><br>
	<!-- Start Align Area -->
	<div class="whole-wrap" >
		<div class="container box_1170">

			<div class="col-lg-12">
                    <h2 class="title-1 m-b-25" id="iso">Covid19 Isolation Centers In Gujarat</h2>
                    <?php
					$query = "SELECT * FROM covid_centers WHERE type='Isolation' && state ='gujarat' ";
						  $query_run = mysqli_query($connection, $query);
					?>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning"  >
                                    <thead>
                                        <tr>
                                            
                                            <th class="bg-info">Hospital Name</th>
                                            <th class="bg-warning">Address</th>
                                            <th class="bg-primary">Contact No</th>
                                            <th class="bg-danger">Directions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="state-wise">
                                    	 <?php
											if(mysqli_num_rows($query_run) > 0)        
											{
											  while($row = mysqli_fetch_assoc($query_run))
											  {
										?>
                                        
                                        	<tr>  
                                        			
											<td><?php  echo $row['name']; ?></td>
											<td><?php  echo $row['address']; ?></td>
											<td><a href="tel:<?php  echo $row['number']; ?>"style="color:#E7717D;"><?php  echo $row['number']; ?></a></td>
											<td><a href="<?php  echo $row['link']; ?>">Directions</a></td>
											 

											</tr>

											<?php
											    } 
											}
									?>
                                        
                                </tbody>
                        </table>
                    </div>
                </div>
		</div>
	</div>
	<!-- End Align Area -->


<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>



				

		  