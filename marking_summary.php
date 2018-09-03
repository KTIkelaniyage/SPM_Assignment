<!--Include header from another file-->
<?php include('inc/header.php'); ?>

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
                        <img src="img/mlogo.png" alt="" class="img-fluid rounded-circle w-50 mb-1">
                        <h4>Rajitha lakshan</h4>
                        <h5 class="text-muted">Student</h5>
                        <div class="list-group">
                            <a href="index.php" class="list-group-item list-group-item-action active">Home</a>
                            <a href="" class="list-group-item list-group-item-action">Functions</a>
                            <a href="grade.php" class="list-group-item list-group-item-action">Grading-From</a>
							              <a href="form1Student.php" class="list-group-item list-group-item-action">Form I-1</a>

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
                    <div>
        <form class="form-inline" method="post" action="generate_pdf.php">
        <h3>Computing Faculty :-</h3>
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
  Generate PDF</button>
</form>
</br>
 <form class="form-inline" method="post" action="generate_pdf.php">
        <h3>Business Faculty  :-</h3>
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
  Generate PDF</button>
</form>
</br>

 <form class="form-inline" method="post" action="generate_pdf.php">
        <h3>Engineering Faculty :-</h3>
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
  Generate PDF</button>
</form>

        </div>
        </div>

      
        <!--End main section-->

    </div>
</div>
</section>

<!--Include Footer from another file-->
<?php include('inc/footer.php')?>