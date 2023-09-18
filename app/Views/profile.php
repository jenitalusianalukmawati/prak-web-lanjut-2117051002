<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
    <div class="profile-area">
        <div class="container">
            <div class="row">
                <div class="main">
                    <div class="card">
                        <div class="img1"><img src="<?=base_url("assets/img/bg.jpg")?>"></div>
                        <div class="img2"><img src="<?=base_url("assets/img/jen.png")?>"></div>
                        <div class="text">
                            <h2><?=$nama?></h2>
                            <p><?=$kelas?></p>
                            <p><?=$npm?></p>
                        </div>
                        <div class="sosmed">
                            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                            <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                            <a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>