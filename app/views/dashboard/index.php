<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="referrer" content="origin">
  <meta http-equiv="Content-Security-Policy" content="default-src https:">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="/css/dashboard.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/snackbar.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.js"></script>
</head>
<body>
<section>
    <nav class="navbar navbar-light bg-light mb-2">
        <a class="navbar-brand" href="#">
         DashBoard 
        </a>
        <div class="pull-right">
        <a href="/home/logout"><button class="btn btn-danger"> Logout</button></a>
        </div>
    </nav>
   
  
    <nav class="navbar navbar-light">
        
        <div class="pull-right">
        <a class="btn btn-info extract_contacts_gmail" id="extractContacts" href="#"> Extract Contacts From GMail</a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <!-- <ul class="list-group" id="emails"> -->
            <!-- <?php 
                foreach($data as $item) {
                    
                    echo json_encode($item['gd$email'][0]['address']) ;
                }
            ?> -->
            
            <!-- </ul> -->
            <div class="form-group">
                <select class="form-control" id="emails" name="sellist1">
                </select>
            </div>

        </div>
        <button class="btn btn-info extract_contacts_gmail" id="sendGmail"> Send Email</button>
        </div>
    </div>
    
   
        
    <div id="snackbar">message..</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="/js/dashboard.js"></script>
</body>
</html>
