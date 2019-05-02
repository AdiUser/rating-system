<!DOCTYPE html>
<html lang="en">

<head>
    <title>AICTE Feedback System Login Page</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->

    <!-- css files -->
    <link href="/rating-system/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="/rating-system/assets/css/style-login.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //css files -->

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="/rating-system/assets/css/loading.css">
    <link rel="stylesheet" href="/rating-system/assets/css/loading-btn.css">
    <!-- //google fonts -->
    <style>
        #logo {
			width: 140px;
			height: 105px;
			margin-top: 42px;
		}
		.txt {
    padding: 10px 20px;
}.person {
    padding: 8px;
}

.details {
    padding: 5px 0 0 0;
}

.name {
    font-size: 0.97em;
    font-weight: bold;
}

.post {
    font-weight: bolder;
    color: #848383;
}
	</style>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Connection -->
    <script src="https://www.gstatic.com/firebasejs/5.8.6/firebase.js"></script>

    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
</head>

<body>

    <div class="signupform">
        <div class="container">
            <!-- main content -->
            <div class="agile_info">
                <div class="w3l_form">
                    <div class="left_grid_info">
                    	<div class="d-flex">
                    		<div class="logo">
                    			<img id="logo" src="/rating-system/assets/img/AICTE_LOGO.png" alt="" />
                    		</div>
							<div class="txt">
								 <h1>AICTE FeedBack Portal</h1>
							</div>
                    	</div>

                        <p>“Criticism, like rain, should be gentle enough to nourish a man’s growth without destroying his roots.”</p>
                        <div class="d-flex">
                        	<div class="person">
                        		<div class="top-img">
                        			<img src="/rating-system/assets/img/img-1.jpg" alt="">
                        		</div>
                        		<div class="details">
                        			<div class="name">Prof. Anil D. Sahasrabudhe</div>
                        			<div class="post">Chairman</div>
                       		 	</div>
                        	</div>
                        	<div class="person">
                        		<div class="top-img">
                        			<img src="/rating-system/assets/img/img-2.JPG" alt="">
                        		</div>
                        		<div class="details">
                        			<div class="name">Dr. M.P. Poonia</div>
                        			<div class="post">Vice Chairman</div>
                       		 	</div>
                        	</div>
                        	<div class="person">
                        		<div class="top-img">
                        			<img src="/rating-system/assets/img/img-3.jpg" alt="">
                        		</div>
                        		<div class="details">
                        			<div class="name">Prof. Alok Prakash Mittal</div>
                        			<div class="post">Member Secretary</div>
                       		 	</div>
                        	</div>
                        </div>
                    </div>
                </div>
                <div class="w3_info">
                    <h2>Login to your Account</h2>
                    <p>Enter your details to login.</p>
                    <p style="color: red" id="msg"></p>
                    <form action="#" method="post" id="login-form">
						<label>Login Type</label>
						<div class="input-group">
							<span class="fa fa-envelope" aria-hidden="true"></span>
							 <input type="text" id="login_type" name="login_type" placeholder="Enter Your Institute/University Code" required="">
						</div>
                        <label>Institute/University Code</label>
                        <div class="input-group">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                            <input type="text" id="code" name="code" placeholder="Enter Your Institute/University Code" required="">
                        </div>
                        <label>Username</label>
                        <div class="input-group">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                            <input type="text" name="username" placeholder="Enter Your Email" required="">
                        </div>
                        <label>Password</label>
                        <div class="input-group">
                            <span class="fa fa-lock" aria-hidden="true"></span>
                            <input type="Password" name="password" id="password-Field" placeholder="Enter Password" required="">
                        </div>

                        <button class="btn btn-danger btn-block ld-over-inverse" id="login-btn" type="submit">

                        Login
                    <div class="ld ld-ring ld-spin" style="font-size: 1.5em" ></div>

                    </button><br>
                </form>
                    <p class="account">By clicking login, you agree to our <a href="#">Terms & Conditions!</a></p>
                    
                </div>
            </div>
            <!-- //main content -->
        </div>

        <!-- footer -->
        <div class="footer">
            <p>&copy; 2019 AICTE. All Rights Reserved | Design by <a href="#" target="blank">Graphic Era University</a></p>
        </div>
        <!-- footer -->
    </div>

<script>
    $("#login-form").submit(function(e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            method: "POST",
            url: "login-user",
            data: form.serialize(),
            beforeSend: function() {
                $("#login-btn").addClass('running');
            },
            success: function(data){
                alert(data);
                if (data != 0) {
                    window.location.href = 'user/dashboard';
                }
                else {
                    $("#msg").html("Invalid Credentials, please try again.")
                }
                $("#login-btn").removeClass('running');
            },
            error: function() { 
                alert("Error posting feed.");
                $("#login-btn").removeClass('running'); 
            } 
        });
    });
</script>    
 
</body>

</html>