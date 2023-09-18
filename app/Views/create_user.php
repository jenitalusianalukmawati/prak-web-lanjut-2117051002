<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
    <section class="wrapper">
        <div class="form">
            <header>FORM</header>
            <form action="<?= base_url('/user/store') ?>" method="POST">
                <input type="text" name="nama" placeholder="Nama" required/>
                <input type="text" name="kelas" placeholder="Kelas" required/>
                <input type="text" name="npm" placeholder="NPM" required/>
                <input type="submit" name="submit" value="Send" />
            </form>
        </div>
    </section>
</body>
</html>