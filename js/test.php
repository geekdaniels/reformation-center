<!DOCTYPE html>
<html lang="">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome | Reformation Centre</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

 </head>

 <body class="">
  <!--  Navigation Starts here-->
  <div class="container">
   <nav class="navbar navbar-expand-lg navbar-def navbar-light">
    <a class="navbar-brand" href="#">
     <img src="img/logo.png" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item active mx-md-3">
       <a class="nav-link text-primary" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
       <a class="nav-link text-primary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        ABOUT TRC
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
       </div>
      </li>
      <li class="nav-item mx-md-3">
       <a class="nav-link text-primary" href="#">CONGRESS WBN</a>
      </li>

      <li class="nav-item mx-md-3">
       <a class="nav-link text-primary" href="#">INITIATIVE</a>
      </li>

      <li class="nav-item mx-md-3">
       <a class="btn btn-danger text-white rounded-0 px-3" href="#">Live</a>
      </li>
     </ul>

    </div>
   </nav>

  </div>
  <!--  Navigation ends here-->

  <div class="body_bg">
   <div class="container-fluid banner_img">

    <div class="row ml-md-5">
     <div class="col-md-6 mb-5 mt-def">
      <h2 class="uppercase text-white font-weight-bold ">Lorem ipsum dolor sit amet</h2>
      <p class="light text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
       labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
       laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit i
       n voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
       cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
       mollit anim id est laborum.</p>
     </div>
    </div>

    <div class="row ml-md-5">
     <ul class="list-inline pl-3">
      <?php if ($mainEvent != "") {?>
      <li class="list-inline-item bg_white px-3">
       <p class="text-5 font-weight-bold mb-0">20 <?=date('j', strtotime($mainEvent['date']));?></p>
       <p class="text-primary text-center mb-1 pr-1">July <?=date('F', strtotime($mainEvent['date'])); ?></p>
      </li>


      <li class="list-inline-item">
       <p class="text-white mb-0">Thursday @ 9:00am <?=date('l', strtotime($mainEvent['date'])); ?> @ <?= $mainEvent['start'] >= 12 ? $mainEvent['start'].":00pm" : $mainEvent['start'].":00am" ?></p>
       <h3 class="font-weight-bold text-white">Congress Global Entry <?= $mainEvent['title']?></h3>
      </li>
      <?php } ?>

     </ul>
    </div>
   </div>

   <div class="container-fluid">
    <div class="row">

     <div class="col-md-7">

      <div class="row py-4 ml-md-5 mt-4">
       <div class="col-md-4">
        <h5 class="title px-4 py-2 light text-white">Upcoming: Events</h5>
       </div>
      </div>

      <?php  $i = 1; foreach($posts as $post){?>

      <?= $i == 1 || $i == 3 ? "<div class=\"row\">" : null;?>

      <div class="row ml-md-5">
       <div class="col-md-4">
        <img src="<?=site_url('public/img/blog/'.$post->image)?>" class="img-fluid" />
       </div>

       <div class="col-md-8">
        <h5 class="color_2 uppercase mob-margin-top"><?= ucwords(substr($post->title ,0, 60))?>..</h5>
        <p class="light font-medium mb-0"><?= substr($post->post ,0, 200)?></p>
        <a class="color_2 post_link" href="<?=site_url("article/{$post->blog_alias}")?>">Read More</a>
       </div>
      </div>

      <?= $i == 2 || $i == 4 ? "</div>" : null;?>
      <?php $i++; } ?>

      <div class="row ml-md-5 my-5">
       <div class="col-md-4">
        <img src="img/placeholder2.png" class="img-fluid" />
       </div>

       <div class="col-md-8">
        <h5 class="color_2 uppercase mob-margin-top">Lorem Ipsum Dolor</h5>
        <p class="light font-medium mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
         laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <a class="color_2 post_link" href="#">Read More</a>
       </div>
      </div>

      <div class="row ml-md-5 my-5">
       <div class="col-md-4">
        <img src="img/placeholder3.png" class="img-fluid" />
       </div>

       <div class="col-md-8">
        <h5 class="color_2 uppercase mob-margin-top">Lorem Ipsum Dolor</h5>
        <p class="light font-medium mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
         laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <a class="color_2 post_link" href="#">Read More</a>
       </div>
      </div>

     </div>

     <!--     right Section-->
     <div class="col-md-5">

      <div class="row py-4 ml-md-5 mt-4">
       <div class="col-md-10">
        <h5 class="title px-4 py-2 light text-white">Govermental Prayer</h5>
        <p class="light font-medium mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
         laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
       </div>
      </div>

      <div class="row py-4 ml-md-5 mt-4">
       <div class="col-md-10">
        <h5 class="title px-4 py-2 light text-white">Our Children </h5>
        <img src="img/placeholder4.png" class="img-fluid" />
        <p class="light font-medium mb-0 my-2">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
       </div>
      </div>

     </div>
    </div>
   </div>
  </div>

  <div class="container-fluid footer">
   <div class="row ml-md-5 mr-md-3">
    <div class="col-md-5">
     <ul class="list-inline my-2">
      <li class="list-inline-item mx-4 mob_list"><a href="#">ABOUT TRC</a></li>
      <li class="list-inline-item mx-4 mob_list"><a href="#">CONGRESS WBN</a></li>
      <li class="list-inline-item mx-4 mob_list"><a href="#">INITIATIVE</a></li>
      <li class="list-inline-item mx-4 mob_list"><a href="#">CONTACT</a></li>
     </ul>
    </div>

    <div class="offset-md-2 col-md-5 ">
     <ul class="list-inline my-2 float-right mob_float">
      <li class="list-inline-item mx-2"><a href="#"><img src="img/twitter.png" class="img-fluid" /></a></li>
      <li class="list-inline-item mx-2"><a href="#"><img src="img/youtube.png" class="img-fluid" /></a></li>
      <li class="list-inline-item mx-2"><a href="#"><img src="img/facebook.png" class="img-fluid" /></a></li>
      <li class="list-inline-item mx-2"><a href="#"><img src="img/linkedin.png" class="img-fluid" /></a></li>
     </ul>
    </div>
   </div>
  </div>

 </body>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
