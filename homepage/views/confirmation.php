<?php

session_start();

?>
<?php include_once '../models/dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Airprice Company</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/confirmation.css">
	

</head>
<body>
	<!-- start navbar  -->
	<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="assets/logo.png" width= 120 alt="Flights Luxurious"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promotion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Voyage</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<!--  
        <div class="container">
            <div>

            </div>
        </div>
        test
     -->
     
    <!-- end navbar  -->
    <section class="container">
     <?php
        $fname = htmlspecialchars(trim($_POST['fname'])); 
        $lname = htmlspecialchars(trim($_POST['lname']));
        $email = htmlspecialchars(trim($_POST['email']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $passport = htmlspecialchars(trim($_POST['num_passport']));
        $sql = "INSERT INTO client (nom, prenom, email, phone, num_passport) VALUES ('$fname', '$lname','$email' ,'$phone', '$passport')";
        $result = mysqli_query($con, $sql) or die ("Bad Query: $sql");
        $id = $_SESSION['idvol'];
        $sql3 = "SELECT * FROM vols WHERE id_vol= $id" ;
        $nn = $con->query($sql3);
        $nn1 = $nn->fetch_assoc();
        echo $id;
	?>
    
        <div class="login-box">
            <h2>Booking Confirmation</h2>
            <form>
              <div class="user-box">
                <h5>First Name : <?php echo htmlspecialchars($_POST['fname']); ?></h5>
              </div>
              <div class="user-box">
              <h5>Last Name : <?php echo htmlspecialchars($_POST['lname']); ?> </h5>
              </div>
              <div class="user-box">
                <h5>Email : <?php echo htmlspecialchars($_POST['email']); ?></h5>
              </div>
              <div class="user-box">
                  <h5>Phone : <?php echo htmlspecialchars($_POST['phone']); ?></h5>
              </div>
              <div class="user-box">
                  <h5>Passport number : <?php echo htmlspecialchars($_POST['num_passport']); ?><h5>
              </div>
              <div class='user-box'>
              
                  <h5>Flight: <?= $nn1['nom_vol'] ;?></h4>
                  <h5>Departure : <?= $nn1['departure'] ;?></h5>
                  <h5>Arrival : <?= $nn1['arrival'] ;?></h5>
                
              </div>
              <a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Confirm booking
                </button></a>
   
            </form>
          </div>
          <div class="container">
            <!-- Button to Open the Modal -->
            

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Congratulations</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    Safe Travels 
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <a href="../index.html"><button type="button" class="btn btn-danger" data-dismiss="modal">Home</button></a>
                    </div>
                    
                </div>
                </div>
            </div>
            
            </div>

    </section>
    <!-- start footer  -->
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm">
                <img src="assets/logo.png" width="100" alt="logo">
					<h3>About us</h3>
					<p> Dolores deleniti esse sit fuga sunt fugit numquam, unde soluta quae autem natus quam asperiores minima consequuntur repellendus similique? Eligendi, facere quod!</p>

				</div>
				<div class="col-sm">
					<label for="comment">Comment:</label>
					<textarea class="form-control" rows="5" id="comment"></textarea>
					<input type="submit" class="btn btn-info" value="Send Your Message" style="margin-top: 10px;">
				</div>
				<div class="col-sm">
					<div class="mu-footer-widget">
						<h4>Business Offers</h4>
						<ul class="list-group">
							<a href="" class="listOffers">Business trip</a><br>
							<a href="" class="listOffers">Beyond Business</a><br>
							<a href="" class="listOffers">Meetings and conferences</a>
						</ul>
						
						
					  </div>
				</div>
				<div class="col-sm-2">
					<h3>Follow us</h3>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, et cumque iure cum sint accusantium praesentium recusandae </p>
					<div class="row justify-content-around">
						<i class="fa fa-whatsapp" aria-hidden="true"></i>
						<i class="fa fa-linkedin" aria-hidden="true"></i>
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</div>
				</div>
			</div>
			
		</div>
		<div class="col" style="margin-top: 40px;background-color: gainsboro;">
			<p>Copyright-2020 ©  By : You<span style="color:blue">code</span> Safi</p>
		</div>
	</footer>
	<!-- end footer  -->
	<script src="search.js"> </script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>