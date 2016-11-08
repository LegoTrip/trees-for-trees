<!DOCTYPE html>
<html lang="en">
<head>

  <title>Trees for Trees</title>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="Trees for Trees" />
  <meta property="og:url" content="http://www.treesfortrees.co.uk/" />
  <meta property="og:description" content="Help the Heart of England Forest plant a forest in a day by simply sharing a picture. Take part by 2nd November to have a chance to name the forest #treesfortrees" />
  <meta property="og:image" content="http://images.treesfortrees.co.uk/images/treesfortrees.jpg" />
  <meta property="og:site_name" content="Trees for Trees">
  <meta property="og:type" content="website">

  <link rel="stylesheet" href="http://images.treesfortrees.co.uk/css/style.css">
  <link rel="icon" type="image/png" href="http://images.treesfortrees.co.uk/images/favicon.ico">

</head>
<body>
<?php
$filename = 'http://images.treesfortrees.co.uk/images/forest.jpg';
$time = round(time() / (60 * 15));
?>

  <header>
    <a href="/" class="logo"><img src="http://images.treesfortrees.co.uk/images/logo.png" /></a>
    <nav id="nav">
      <a href="#" id="menu-icon">menu</a>
      <ul>
        <li><a href="#share-image">Share Your Pic</a></li>
      </ul>
    </nav>
  </header>
   <div class="container main-header">
    <div class="row">
      <div class="col-2-3">
        <h1>Help us plant a forest in a day <a href="https://twitter.com/search?f=tweets&vertical=default&q=%23treesfortrees&src=typd" target="_blank">#treesfortrees</a></h1>
      </div>
      <a href="https://www.flickr.com/photos/137167713@N02/sets/72157660290507686" target="_blank" class="clickable"></a>
    </div>
   </div>
   <div class="container">
    <div class="row">
      <div class="col-1">
        <h2>Help plant 10,000 trees in a single day</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-2-3">
        <p>At the Heart of England Forest, we love trees – it’s why we’re planning to plant a whole forest in a day. That’s an incredible 10,000 new trees growing right in the middle of England! We’re doing this to raise awareness of the lack of woodland coverage in England. <strong>But we need your help</strong>.
        </p>
        <p>Simply share a picture or a photo of a tree with <a href="https://twitter.com/search?f=tweets&vertical=default&q=%23treesfortrees&src=typd" target="_blank">#treesfortrees</a> (or <a href="https://twitter.com/search?f=tweets&q=%23treesfortreesNYC&src=typd" target="_blank">#treesfortreesNYC</a> if you are in the U.S.) using any of the options below and we’ll plant a tree for you on 2nd November 2015. It’s as easy as a click, a tap or a tweet – one message and you’ll help make England a greener, more beautiful place.
        </p>
        <div class="box">  
          <h4>Plus, one lucky contributor will be selected to name the forest!</h4>
          <p>So do something amazing today - be a part of the <a href="https://twitter.com/search?f=tweets&vertical=default&q=%23treesfortrees&src=typd" target="_blank">#treesfortrees</a> campaign and watch the virtual forest below grow as we plant your forest on the day.
          </p>
        </div>
      </div>
      <div class="col-1-3">
        <img src="http://images.treesfortrees.co.uk/images/planting-tree.jpg" />
      </div>
    </div>
  </div>

   <div class="container share-image" id="share-image">
    <div class="row narrow">
      <div class="col-2-3 narrow">
          <h3>Share your image today and in return we will plant a tree for you... </h3>
      </div>
    </div>
    <div class="row narrow">
      <div class="col-1-4 share facebook">
        <a href="https://www.facebook.com/heartofenglandforest" target="_blank"></a>
      </div>
      <div class="col-1-4 share twitter">
        <a href="https://twitter.com/The_HOEF" target="_blank"></a>
      </div>
      <div class="col-1-4 share instagram">
        <a href="https://instagram.com/theheartofenglandforest/" target="_blank"></a>
      </div>
      <div class="col-1-4 share mail">
        <a href="mailto:treesfortrees@hoef.co.uk"></a>
      </div>
    </div>
  </div>

  <div class="container share-friends">
     <div class="row">
      <div class="col-1">
        <h3>Share with your friends</h3>
      </div>
    </div>
    <div class="row narrow">
      <div class="col-1-3 share facebook">
        <a class="fb_link" onclick="return fbs_click()" href="#">Share on facebook</a>
      </div>
      <div class="col-1-3 share twitter">
      <a href="http://twitter.com/share?url=http%3A%2F%2Fwww.treesfortrees.co.uk&text=Help%20the%20Heart%20of%20England%20Forest%20plant%20a forest%20in%20a%20day%20&hashtags=treesfortrees" target="_blank">Share on twitter </a>
      </div>
      <div class="col-1-3 share mail">
        <a href="mailto:?subject=Help%20us%20plant%20a%20forest%20in%20a%20day%20#treesfortrees&body=Help%20the%20Heart%20of%20England%20Forest%20plant%20a%20forest%20in%20a%20day%20by%20simply%20sharing%20a%20picture.%20Take%20part%20by%202nd%20November%20to%20have%20a%20chance%20to%20name%20the%20forest%20#treesfortrees%20www.treesfortrees.co.uk">Share via email</a>
      </div>
    </div>
  </div>

  <div class="container forest" id="forest">
    <div class="row">
      <div class="col-1 ">
        <h3>You can get involved and get England growing again</h3>
        <p>The below images show the virtual forest growing from your contributions as we plant the forest on the 2nd November. Click the image to see your pictures in full
        </p>
      </div>
    </div>
  </div>
  <div class="container forest-image">  
    <a href="https://www.flickr.com/photos/137167713@N02/sets/72157660290507686" target="_blank">
      <img src="<?php echo $filename;?>?v=<?php echo $time ; ?>" />
    </a>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-1">
        <h3>Watch our <a href="https://twitter.com/search?f=tweets&vertical=default&q=%23treesfortrees&src=typd" target="_blank">#treesfortrees</a> video and see the Heart of England Forest</h3>
      </div>
    </div>
  </div>
  <div class="container video">
    <div class="row">
      <div class="col-1">         
        <div class='embed-container'><iframe width="560" height="315" src="https://www.youtube.com/embed/3QziLWjLjA0" frameborder="0" allowfullscreen></iframe></div>
      </div>
    </div>
  </div>

  <div class="container footer">
    <div class="row">
      <div class="col-1-8">
        <a href="http://www.heartofenglandforest.com/" target="_blank">
          <img src="http://images.treesfortrees.co.uk/images/logo-white.png" />
        </a>
      </div>
      <div class="col-6-8">
        <h4><a href="http://www.heartofenglandforest.com/" target="_blank">© 2015 The Heart of England Forest</a></h4>
        <p>The Heart of England Forest is a charity registered by the Charity Commission for England and Wales (no. 1097110) and a company limited by guarantee registered in England (no. 04309564) whose registered office is 9-11 Kingly Street, London. W1B 5PN.
        </p>
        <a href="http://www.heartofenglandforest.com/">www.heartofenglandforest.com</a>  |  
        <a href="terms.html">Terms and conditions</a>
      </div>
      <div class="col-1-8">
        <a href="http://www.frsb.org.uk/" target="_blank">
          <img src="http://images.treesfortrees.co.uk/images/frsb-logo.png" />
        </a>
        <div class="footer-logo">
          <a href="http://www.dennis.co.uk/" target="_blank">
            <img src="http://images.treesfortrees.co.uk/images/dennis-logo.png" />
          </a>
          <a href="https://www.thedrum.com/doitday/" target="_blank">
            <img src="http://images.treesfortrees.co.uk/images/doitday-logo.png" />
          </a>
          </div>
      </div>
    </div>
  </div>

<script>
function fbs_click()
{u="http://www.treesfortrees.co.uk/";t="http://www.treesfortrees.co.uk/";window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}
</script>

</body>
</html>
