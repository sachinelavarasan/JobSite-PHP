<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
	<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width,initial-scale=1">
				<link href="css/bootstrap.min.css" rel="stylesheet">
			  <link href="animate/animate.min.css" rel="stylesheet">
			   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
			   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
			   <script src="js/jquery.js"></script>
			   <link href="css/mdb.min.css" rel="stylesheet">
		
			<script src="js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/popper.min.js"></script>
			
			<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
			    
			  <script type="text/javascript" src="js/mdb.min.js"></script>
			  <style >
			  	#contact-form{
			  		border-radius: 50px;
			  		color: white;
			  	}
			  	#contact-form:hover{
			  		background-color: white;
			  		border-radius: 0px;

			  	}
			  </style>
</head>
<body>
<div class="container">
<section class="mb-4">

    
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
   
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row" >

        
        <div class="col-md-9 mb-md-0 mb-5 special-color-dark" id="contact-form">

            <form action="email1.php" method="POST">

                
                <div class="row">

                    
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                   

                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                
                <div class="row">

                    
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                
                <div class="text-center text-md-center">
                <button class="btn btn-primary" name="submit" type="submit">Send</button> 
            </div>
            

            </form>

            
        </div>
        
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>San Francisco, USA</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>contact@careerPath.com</p>
                </li>
            </ul>
        </div>
        

    </div>

</section>
<div>

</body>
</html>
