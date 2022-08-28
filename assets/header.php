<?php include("functions/functions.php"); ?>
<?php include("variables.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type='image/png' href='<?= $images ?>favicon.png' size='25x25' />
    <title><?= $name; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= $root ?>bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?= $root ?>bootstrap5/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= $root ?>css/style.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?= $root ?>owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $root ?>owlcarousel/css/owl.theme.default.min.css">
    
    <script  src="https://code.jquery.com/jquery-3.6.0.js"></script>
    
    <!-- javascript -->
    <script src="<?= $root ?>owlcarousel/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function(){
            var path = window.location.href;
            var target = $(document).find('nav #navbarNav ul li a[href="'+path+'"]').closest("li");            
            target.addClass('active');
        })
    </script>