<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="/css/dashboard.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
<section class="bg-white">
  <div class="container-fluid">
    <div class="d-flex align-items-center flex-column justify-content-center h-100 text-black">
      <div class="row">
    <div class="col-sm-6">
      <div>
        <img src="/img/Gmail.png"  width="350px" height="200px"/>
      </div>
      <a class="btn btn-primary btn-lg" href="<?=$data['login_url']?>">
          Gamil Login
      </a> 
    </div>
    <div class="col-sm-6">
      <div>
        <img src="/img/outlook_cover_640x360.jpg" width="350px" height="200px"/>
      </div>
      <a class="btn btn-success btn-lg" href="#">
        HotMail Login
      </a>
    </div>
  </div>
    </div>
  </div>
</body>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</html>
