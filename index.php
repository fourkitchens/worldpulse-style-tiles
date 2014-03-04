<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>World Pulse: Building Style Tiles</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6795652/718384/css/fonts.css" />
  <link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body class="transition">
  <header>
    <h1>World Pulse</h1>
    <ul>
      <li><a href="#tiles">Early Style Tiles</a></li>
      <li><a href="#adjs">Adjective Survey</a></li>
      <li><a href="#phrases">Guiding Phrases</a></li>
      <li><a href="#sites">Critiqued Sites</a></li>
      <li><a href="#swatches">Component Swatches</a></li>
    </ul>
  </header>
  <main>
    <div class="banner" id="tiles">
      <h2>Mood Boards <small>Colors, adjectives, imagery interpreted from &ldquo;World Pulse as a Place&rdquo; responses</small></h2>
    </div>
    <div class="set">
      <div class="box quarter"><div class="title"><span>Metropolis<br /><small>Gotham &amp; Whitney</small></span></div></div>
      <div class="box thq xhigh right"><div class="content" id="metropolis">
        <?php
          $user = new stdClass();
          $user->avatar = 'https://s3.amazonaws.com/uifaces/faces/twitter/divya/128.jpg';
          $user->name = 'Divya Manian';
          $user->nation = '';

          include('copy.inc.php');
        ?>
      </div></div>
      <div class="box eighth"><div class="color" style="background-color: #63a5f1;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #a8a69a;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #342454;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #fe8b03;">&nbsp;</div></div>
      <div class="box eighth"><div class="adjective"><span>Diverse</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Pulse</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Exchange</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Instigate</span></div></div>
      <div class="box quarter"><div class="image" id="nyc-3">&nbsp;</div></div>
      <div class="box quarter"><div class="image" id="nyc-4">&nbsp;</div></div>
    </div>

    <div class="set">
      <div class="box half"><div class="title"><span>Community Park</span></div></div>
      <div class="box half"><div class="image" id="park-3">&nbsp;</div></div>
      <div class="collapsed">
        <div class="box eighth"><div class="color" style="background-color: #41991e;">&nbsp;</div></div>
        <div class="box eighth"><div class="color" style="background-color: #2fa9d2;">&nbsp;</div></div>
        <div class="box eighth"><div class="color" style="background-color: #e51f30;">&nbsp;</div></div>
        <div class="box eighth"><div class="color" style="background-color: #ffde43;">&nbsp;</div></div>
        <div class="box eighth"><div class="adjective"><span>Rejuvenate</span></div></div>
        <div class="box eighth"><div class="adjective"><span>Celebrate</span></div></div>
        <div class="box eighth"><div class="adjective"><span>Coexist</span></div></div>
        <div class="box eighth"><div class="adjective"><span>Healthy</span></div></div>
        <div class="box quarter"><div class="image" id="park-5">&nbsp;</div></div>
        <div class="box quarter"><div class="image" id="park-4">&nbsp;</div></div>
        <div class="box quarter"><div class="image" id="park-2">&nbsp;</div></div>
        <div class="box quarter"><div class="image" id="park-6">&nbsp;</div></div>
      </div>
    </div>

    <div class="banner" id="adjs">
      <h2>Adjectives Survey <small>&ldquo;How do you feel any of these words describe your vision for the site?&rdquo;</small></h2>
    </div>

    <div class="set">
      <div class="box quarter"><div class="title"><span>Illustrative <br /><small>(5 = Yes, Strongly)</small></span></div></div>
      <div class="box quarter"><div class="image" id="chart-01-illustrative">&nbsp;</div></div>

      <div class="box quarter"><div class="title"><span>Photographic <br /><small>(5 = Yes, Strongly)</small></span></div></div>
      <div class="box quarter"><div class="image" id="chart-02-photographic">&nbsp;</div></div>

      <div class="box half low"><div class="text"><span style="margin-top: -1.875em;">
        In the workshop, many felt that &ldquo;illustrative&rdquo; meant iconographic
        or explanatory, which was identified as a high priority, mirroring comments
        in user interviews.
      </span></div></div>
      <div class="box half low"><div class="text"><span>
        &ldquo;Photography is very important to our brand and our users.&rdquo;
      </span></div></div>

      <div class="box quarter"><div class="title"><span>Bright</span></div></div>
      <div class="box quarter"><div class="image" id="chart-03-bright">&nbsp;</div></div>

      <div class="box quarter"><div class="title"><span>Bold</span></div></div>
      <div class="box quarter"><div class="image" id="chart-04-bold">&nbsp;</div></div>

      <div class="box quarter"><div class="title"><span>Clean</span></div></div>
      <div class="box quarter"><div class="image" id="chart-05-clean">&nbsp;</div></div>

      <div class="box quarter"><div class="title"><span>Confident</span></div></div>
      <div class="box quarter"><div class="image" id="chart-06-confident">&nbsp;</div></div>

      <div class="box half right"><div class="image" id="chart-07-corporate">&nbsp;</div></div>
      <div class="box half low"><div class="title"><span>Corporate</span></div></div>
      <div class="box half low"><div class="text"><span style="margin-top: -1.875em;">
        Corporate isn't the same as Professional. Needs to be friendly for new
        users; safe and accepting, not upsetting. Additionally, avoid "Foundation"-esque!
      </span></div></div>

      <div class="box half right"><div class="image" id="chart-08-minimal">&nbsp;</div></div>
      <div class="box half low"><div class="title"><span>Minimal</span></div></div>
      <div class="box half low"><div class="text"><span style="margin-top: -3.125em; font-size: 0.875em;">
        &ldquo;I ranked this highly because I interpreted it as &lsquo;simple.&rsquo;
        Our website is busy and overwhelming; hard to navigate it clearly. I want
        it to be clear how people can engage. For this, minimal choices, at least
        at the front where you enter, but keep a warmer/dynamic internal. &mdash;
        Minimal but friendly.&rdquo; &bull; &ldquo;Not stainless steel.&rdquo;
      </span></div></div>

      <div class="box half right"><div class="image" id="chart-09-trendy">&nbsp;</div></div>
      <div class="box half low"><div class="title"><span>Trendy</span></div></div>
      <div class="box half low"><div class="text"><span style="margin-top: -1.75em;">
        &ldquo;Fresh and compatible with what&rsquo;s going on, but not &lsquo;trendy&rsquo;.&rdquo;
        &bull; &ldquo;Trendy <em>functionally</em>; our website should work like things they're used to using.&rdquo;
        &bull; Trendy is rarely cross-cultural.
      </span></div></div>

      <div class="box half right"><div class="image" id="chart-10-flat">&nbsp;</div></div>
      <div class="box half low"><div class="title"><span>Flat</span></div></div>
      <div class="box half low"><div class="text"><span style="margin-top: -2.5em;">
        &ldquo;Very clear communication of the function is necessary; user base is
        largely non-technical.&rdquo; &bull; &ldquo;&lsquo;Flat&rsquo; as a trend
        is completely unimportant here.&rdquo; &bull; Only to the extent that the
        site needs to be light and load quickly and be clean/intuitive.
      </span></div></div>
    </div>

    <div class="banner" id="phrases">
      <h2>Guiding Phrases <small>from survey discussion with WP office</small></h2>
    </div>

    <div class="set">
      <div class="box full low">
        <div class="text"><span>No one speaks for me; I speak for myself.</span></div>
      </div>
      <div class="box half low">
        <div class="text"><span style="margin-top -1.25em">Spicy for when you want it, but comfort food for when you need it.</span></div>
      </div>
      <div class="box half low">
        <div class="text"><span style="margin-top -1.25em">Providing encouragement, support, and mentorship; but who also receiving the same.</span></div>
      </div>
      <div class="box quarter low">
        <div class="text"><span style="margin-top: -1.125em;">Corners for intimate conversations</span></div>
      </div>
      <div class="box quarter low">
        <div class="text"><span style="margin-top: -1.75em;">Meryl Streep once said, &ldquo;I&rsquo;m not fashionable; I have a style.&rdquo;</span></div>
      </div>
      <div class="box quarter low">
        <div class="text"><span style="margin-top: -1.125em;">Audrey Hepbern. Simple and elegant.</span></div>
      </div>
      <div class="box quarter low">
        <div class="text"><span style="margin-top: -1.125em;">Icons ease navigation and understanding.</span></div>
      </div>
      <div class="box eighth">
        <div class="adjective"><span>Welcoming</span></div>
      </div>
      <div class="box eighth">
        <div class="adjective"><span>Grassrootsy</span></div>
      </div>
      <div class="box eighth">
        <div class="adjective"><span>Professional</span></div>
      </div>
      <div class="box eighth">
        <div class="adjective"><span>Illustrative</span></div>
      </div>
      <div class="box eighth">
        <div class="adjective"><span>Photographic</span></div>
      </div>
      <div class="box eighth">
        <div class="adjective"><span>Warm</span></div>
      </div>
      <div class="box eighth">
        <div class="adjective"><span>Unique</span></div>
      </div>
      <div class="box eighth">
        <div class="adjective"><span>Clean</span></div>
      </div>
    </div>

    <div class="banner" id="sites">
      <h2>Sites we Critiqued <small>(positively or negatively)</small></h2>
    </div>

    <div class="set">
      <div class="box half high"><div class="image" id="site-c">&nbsp;</div></div>
      <div class="box quarter"><div class="image" id="site-bg">&nbsp;</div></div>
      <div class="box quarter"><div class="image" id="site-cfc">&nbsp;</div></div>
      <div class="box quarter"><div class="image" id="site-ew">&nbsp;</div></div>
      <div class="box quarter"><div class="image" id="site-gpi">&nbsp;</div></div>
      <div class="box quarter"><div class="image" id="site-times">&nbsp;</div></div>
      <div class="box quarter"><div class="image" id="site-vv">&nbsp;</div></div>
      <div class="box half high right"><div class="image" id="site-gpj">&nbsp;</div></div>
      <div class="box half high"><div class="image" id="site-osf">&nbsp;</div></div>
      <div class="box half"><div class="image" id="site-fbh">&nbsp;</div></div>
    </div>

    <div class="banner" id="swatches">
      <h2>Component Swatches <small>from these sites and others</small></h2>
    </div>

    <div class="set">
      <div class="box thq"><div class="image cover" id="footer">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="profile-detail">&nbsp;</div></div>
      <div class="box quarter high right"><div class="image cover" id="dashboard-sketch">&nbsp;</div></div>
      <div class="box quarter right"><div class="image cover bgleft" id="blogpost-1">&nbsp;</div></div>
      <div class="box half low"><div class="image cover" id="banners">&nbsp;</div></div>
      <div class="box quarter low" style="clear: left;"><div class="image cover bgtop" id="carousel">&nbsp;</div></div>
      <div class="box quarter low"><div class="image cover bgright" id="icons">&nbsp;</div></div>
      <div class="box half"><div class="image cover bgtop" id="dashboard-detail">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="features">&nbsp;</div></div>
      <div class="box full low"><div class="image cover" id="header-2">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover bgbottom" id="profile">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="index">&nbsp;</div></div>
      <div class="box half"><div class="image cover bgleft" id="blogpost-2">&nbsp;</div></div>
      <div class="box half low"><div class="image" id="header-1">&nbsp;</div></div>
      <div class="box quarter right"><div class="image cover" id="event">&nbsp;</div></div>
      <div class="box quarter right"><div class="image cover" id="megamenu">&nbsp;</div></div>
      <div class="box half high"><div class="image cover bgtop" id="section-hero">&nbsp;</div></div>
      <div class="box half right"><div class="image cover bgright" id="steps">&nbsp;</div></div>
      <div class="box half mid right"><div class="image cover bgleft" id="popular">&nbsp;</div></div>
      <div class="box quarter high"><div class="image cover bgleft" id="signup">&nbsp;</div></div>
      <div class="box quarter high"><div class="image" id="teaser-1">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover bgtop" id="teaser-2">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover bgleft" id="leaderboard">&nbsp;</div></div>
    </div>
  </main>
  <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
  <script type="text/javascript"><!--
    (jQuery(document).ready(function($){
      $('.color').click(function(){
        window.prompt('Color as RGB', $(this).css('background-color'));
      });

      $('header ul a').click(function(e){
        $('html, body').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        e.preventDefault();
      });
    }))();
  // --></script>
</body>
</html>