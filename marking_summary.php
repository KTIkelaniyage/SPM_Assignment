<!--Include header from another file-->
<?php include('inc/header.php'); ?>
<?php
$login = Session::get('userLogin');
if($login==false){
    header("Location:login.php");
}
?>
<style>

</style>

<!--Include Navbar from another file-->
<?php include('inc/navbar.php')?>

<section id="authors" class="">
<div class="container-fluid">
    <div class="row">

        <!--Start Sidebar section-->
        <div class="col col-md-3 col-lg-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo Session::get('photo');?>" alt="" class="img-fluid rounded-circle w-50 mb-1">
                        <h4><?php echo Session::get('name');?></h4>
                        <h5 class="text-muted"><?php echo Session::get('role');?></h5>
                        <div class="list-group">
                            <a href="index.php" class="list-group-item list-group-item-action active">Home</a>
                            <a href="Schedule.php" class="list-group-item list-group-item-action" style="<?php if(Session::get('role')!="ADM"){echo "display:none";}?>">Schedule Viva</a>
                            <a href="schedule_report.php" class="list-group-item list-group-item-action" style="<?php if(Session::get('role')!="ADM"){echo "display:none";}?>">Generate Schedule Report</a>
							<a href="marking_summary.php" class="list-group-item list-group-item-action" style="<?php if(Session::get('role')!="ADM"){echo "display:none";}?>">Marking Summary Form</a>
							<a href="grade.php" class="list-group-item list-group-item-action" style="<?php if(Session::get('role')!="ADM"){echo "display:none";}?>">Grading Form</a>	
                            <a href="form_I-7.php" class="list-group-item list-group-item-action" style="<?php if(Session::get('role')!="ADM"){echo "display:none";}?>">Student Performance Evaluation Form</a>
							<a href="getPerformances.php" class="list-group-item list-group-item-action" style="<?php if(Session::get('role')!="ADM"){echo "display:none";}?>">Get Student Performance</a>	
                      </div>
                    </div>
                </div>
        </div>
        <!--End Sidebar Section-->

        <!--Start Main section-->
        <div class="col col-md-9 col-lg-9">
                    <div class="jumbotron jumbotron-fluid text-center welcome">
                        <div class="container">
                        <h1 class="display-4">Grading Summary </h1>
                        </div>
                      
                    </div>
                    <!-- <h3 class="text-primary"> Computing Faculty :</h3> <h3 class="text-warning">Business Faculty  :</h3>     <h3 class="text-success">Engineering Faculty :</h3> -->
                    	
					<!--Form filled by student-->	
					 <form  method="post" action="generate_pdf.php">
						<fieldset>
							
					
							<div class='form-group'>
							<label for='exampleSelect1'><b>Faculty</b></label>
								<select class='form-control' name='faculty'>
									<option>Computing</option>
									<option>Business</option>
									<option>Engineering</option>
								</select>
							</div>
							<div class='form-group'>
								<label for='exampleSelect1'><b>year</b></label>
								<select class='form-control' name='year'>
									<option>2019</option>
									<option>2018</option>
									<option>2017</option>
                                    <option>2016</option>
									<option>2015</option>
                                    <option>2014</option>
									<option>2013</option>
                                    <option>2012</option>
									<option>2011</option>
								</select>
							</div>
							
         <button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary">
  Generate PDF</button>

						</fieldset>
					</form>
					
        
                  
        



       
        </div>

      
        <!--End main section-->

    </div>
</div>
</section>

<!--Include Footer from another file-->
<?php include('inc/footer.php')?>