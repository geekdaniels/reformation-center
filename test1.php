
  <div class="container">
    <div class="land-text">
      <h1 class="h1" id="findd" style="font-size: 70px;">I WAS CALLED</h1>
      <h3 id="places">FOR A DAY LIKE THIS</h3>
    <!-- <button class="  start-now" style="">START NOW</button> -->
    </div>
  </div>

  <?php if ($mainEvent != "") {?>
  <div class="church-info">
    <div class="container">
      <div class="row">
        <div class="col-md-1">
          <div class="event-date">
            <p id="numy"><?=date('j', strtotime($mainEvent['date']));?></p>
            <p id="month"><?=date('F', strtotime($mainEvent['date'])); ?></p>
          </div>
        </div>
        <div class="col-md-6" style="padding-top: 8px;">
          <p id="weekk"><?=date('l', strtotime($mainEvent['date'])); ?> @ <?= $mainEvent['start'] >= 12 ? $mainEvent['start'].":00pm" : $mainEvent['start'].":00am" ?>   </p>
          <p id="event-peri"><?= $mainEvent['title']?></p>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2">

            </div>
            <div class="col-md-10 col-sm-10 col-xs-10" style="text-align: right; font-size: 22px;">
              <span style="font-size: 25px; color: #430547;" class="fa fa-map-marker"></span>
              <span id="addresss"><?= $mainEvent['location']?></span>
            </div>
          </div>
        </div>
        <!--
        <div class="col-md-3" style="padding-top: 20px;">
          <a id="read-more">READ MORE</a>
        </div>
        -->
      </div>
    </div>
  </div>
  <?php } ?>


  <!--</div> -->

  <!--Transformation Time-->
  <div class="transs">
  <div class="container">
  <div class="row">
    <div class="col-md-8">

        <?php  $i = 1; foreach($posts as $post){?>

        <?= $i == 1 || $i == 3 ? "<div class=\"row\">" : null;?>

        <div class="col-md-6" style="margin-top: 28px;">
          <!-- <h4 style="font-weight: bold; color: #430547; margin-top: 0px;">FROM OUR BLOG</h4> -->
          <img src="<?=site_url('public/img/blog/'.$post->image)?>" style="width: 100%; height: 150px;">
          <!-- <p style="margin-top: 10px;"><i>5th August,2017</i></p> -->
          <p style="font-size: 22px; color: #430547;"><?= ucwords(substr($post->title ,0, 60))?>..</p>
          <span style="font-size: 14px; margin-bottom: 20px;"><?= substr($post->post ,0, 200)?></span>
          <a class="pull-right" href="<?=site_url("article/{$post->blog_alias}")?>" style="color: #430547; ">Read More...</a>
          <!-- <a href="#" id="down-man">Read More</a> -->
        </div>
        <?= $i == 2 || $i == 4 ? "</div>" : null;?>
        <?php $i++; } ?>

    </div>

    <div class="col-md-4" style="margin-top: 28px;">
      <h4 style="font-weight: bold; color: #430547; margin-top: 0px;">UPCOMING EVENTS</h4>

      <?php foreach($events as $event){ ?>
        <div class="row" style="border: 2px solid #c9c5ca; margin-top: 12px; padding: 5px; margin-left: 2px; margin-right: 2px;">
          <div class="col-md-3" style="text-align: center; padding-left: 0px; color: #<?=rand(100000, 999999);?>;">
            <h2 style="margin: 0px; font-size: 30px; font-weight: bold;"><?=date('j', strtotime($event['date']));?></h2>
            <p style="font-weight: bold;"><?=date('F', strtotime($event['date'])); ?></p>
          </div>
          <div class="col-md-9">
            <h3 style="margin-top: 0px; font-size: 18px; color: #73726f"><?= substr($event['title'] ,0, 50)?></h3>
            <i><?= substr($event['location'] ,0, 30)?></i>
            <a href="#"><i class="pull-right" style="color: #430547;">Details</i></a>
          </div>
        </div>
      <?php }?>
      <br>
      <!--<img src="<?=site_url('public/docs/twitter-shot-cut.png')?>" style="width: 100%; margin-top: 20px;">-->
      <a class="twitter-timeline" data-width="375" data-height="400" href="https://twitter.com/TRCLagos">Tweets by TRCLagos</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>
  </div>
  </div>
  </div>



<script type="text/javascript">
  $("#example, body").vegas({
    timer: false,
    shuffle: true,
    transition: 'fade',
    firstTransitionDuration: 5000,
    transitionDuration: 2000,
    slides: [
        { src: "<?=site_url('public/img/slides/DSC_2926-new.jpg')?>" },
        { src: "<?=site_url('public/img/slides/DSC_2979-new.jpg')?>" },
        { src: "<?=site_url('public/img/slides/DSC_3004-new.jpg')?>" },
        { src: "<?=site_url('public/img/slides/ggpe2-new.jpg')?>" },
    ]
  });
</script>
