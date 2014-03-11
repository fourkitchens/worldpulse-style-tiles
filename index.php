<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>World Pulse: Style Tiles</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6795652/718384/css/fonts.css" />
  <link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body class="transition">
  <header>
    <h1>World Pulse</h1>
    <ul>
      <li><a href="#tiles">Style Tiles</a></li>
      <li><a href="#swatches">Component Swatches</a></li>
    </ul>
  </header>
  <main>
    <div class="banner" id="tiles">
      <h2>Style Tiles <small>(Click any swatch for more information.)</small></h2>
    </div>
    <div class="set">
      <div class="box quarter"><div class="title"><span>Introduction</span></div></div>
      <div class="box thq right no-height">
        <div class="content introduction">
          <div class="content-wrap">
              <em>This is not a finished design,</em>
              merely one possible vision when combining the Journal wireframes
              with some typography and color ideas; it's a taste. Two things to
              note specifically:</p>

              <ul>
                <li>Rather than replace my original photography with World Pulse
                  approved brand photos, I have removed photography completely.
                  I don't want to pull you into an uncomfortable space with
                  jarring images, but I also don't want to leave you in a
                  familiar space. That photography served its purpose for color
                  research, and has been discarded. Your photography will be
                  added back in later as we begin to work with specific
                  components.</li>
                <li>I tried to avoid using branding-laden language on this mission
                  of aesthetics and thus have removed the word &ldquo;Pulse&rdquo;
                  from this set. Rather than evoking a particular aesthetic quality,
                  it represents the quest for a spirit/initiative or specific
                  feature. Let's talk <em>Pulse</em> in the near future!</li>
              </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="set">
      <div class="box quarter"><div class="title"><span>Metropolis<br /><small>Gotham &amp; Whitney</small></span></div></div>
      <div class="box thq right no-height">
        <div class="content metropolis introduction">
          <div class="content-wrap">
            <p>Visual impact created with large,
              documentary photography, reinforced by sophisticated but simple
              typography and a subtle UI featuring soft-neutral boundaries with
              right-angles or minimally rounded borders to frame content and
              direct interactions, conveying a modern strength and dependability.
              Reminiscent of the World Pulse website, with inspiration from
              <a href="http://catapult.org">Catapult.org</a>,
              <a href="http://insights.som.yale.edu/">Yale School of Management: Insights</a>,
              <a href="http://www.globalpressjournal.com/">Global Press Journal</a>,
              <a href="http://www.opensocietyfoundations.org">Open Society Foundations</a>, and
              <a href="http://www.npr.org/sections/us/">National Public Radio</a>.</p>
          </div>
        </div>
      </div>
      <div class="box thq no-height right"><div class="content metropolis">
        <?php
          $user = new stdClass();
          $user->avatar = 'https://s3.amazonaws.com/uifaces/faces/twitter/divya/128.jpg';
          $user->name = 'Divya';
          $user->flag = 'flags-a/Botswana.png';

          $date = 'l, F jS, Y';

          $comment = new stdClass();
          $comment->name = 'Keyuri85';
          $comment->avatar = 'https://s3.amazonaws.com/uifaces/faces/twitter/keyuri85/128.jpg';

          include('copy.inc.php');
        ?>
      </div></div>
      <div class="box eighth reg"><div class="color" style="background-color: #342454;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #63a5f1;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #fe8b03;">&nbsp;</div></div>
      <div class="box eighth"><div class="adjective"><span>Diverse</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Confident</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Exchange</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Instigate</span></div></div>
      <div class="box quarter"><div class="image cover bgleft" id="blogpost-1" data-caption="Yale School of Management Insights: Blog Post">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="section-hero" data-caption="Global Press Journal: Section Hero">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="features" data-caption="Open Society Foundations: Features and Events, Home Page">&nbsp;</div></div>
    </div>

    <div class="set">
      <div class="box quarter"><div class="title"><span>Marrakesh<br /><small>Verlag &amp; Gotham &amp; Archer</small></span></div></div>
      <div class="box thq right no-height">
        <div class="content marrakesh introduction">
          <div class="content-wrap">
            <p>Visual impact created by bold, secondary colors with isolated
              areas to visually group content, accentuating titles and photography.
              Strong horizontal borders connote confidence, but retain an
              approachability from the more welcoming palette. Reminiscent of the
              World Pulse magazine (print editions), with inspiration from
              <a href="http://catapult.org">Catapult.org</a>,
              <a href="http://www.opensocietyfoundations.org/">Open Society Foundations</a>,
              <a href="http://www.smashingmagazine.com/">Smashing Magazine</a>,
              <a href="http://www.npr.org/sections/us/">National Public Radio</a>, and
              <a href="http://www.globalpressjournal.com/">Global Press Journal</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="box thq no-height right"><div class="content marrakesh">
        <?php
          $user = new stdClass();
          $user->avatar = 'https://s3.amazonaws.com/uifaces/faces/twitter/raquelwilson/128.jpg';
          $user->name = 'Raquel';
          $user->flag = 'flags-a/Guinea.png';

          $date = 'j F Y';

          $comment = new stdClass();
          $comment->name = 'Aileen';
          $comment->avatar = 'https://s3.amazonaws.com/uifaces/faces/twitter/aiiaiiaii/128.jpg';

          include('copy.inc.php');
        ?>
        <div style="height: 250px;"><!-- I'm here to make this container long enough to keep the UI swatches in line in the left-rail --></div>
      </div></div>

      <div class="box eighth"><div class="color" style="background-color: #5e2c58;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #94101e;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #c2611b;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #95cf4b;">&nbsp;</div></div>
      <div class="box eighth"><div class="adjective"><span>Grassrootsy</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Unique</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Vibrant</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Celebrate</span></div></div>
      <div class="box quarter"><div class="image cover" id="index" data-caption="24 Ways: Home Page">&nbsp;</div></div>
      <div class="box quarter"><div class="image" id="hg1-tabloid" data-caption="Tabloid / Landing Page Prototype">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="features" data-caption="Open Society Foundations: Features and Events, Home Page">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="inbox-flat" data-caption="Inbox Prototype">&nbsp;</div></div>
    </div>

    <div class="set">
      <div class="box quarter"><div class="title"><span>Heritage<br /><small>Whitney &amp; Gotham &amp; Archer</small></span></div></div>
      <div class="box thq right no-height">
        <div class="content heritage introduction">
          <div class="content-wrap">
            <p>World Pulse team members
              are proud of and nostalgic for brand assets of the past and the
              present. Leveraging the current/existing palette of rich, organic
              tertiary colors which convey a non-specific international diversity
              and combining it with refreshed, more legible typography and modern
              layout techniques freshens the look and feel without departing from
              current standards. Reminiscent of the World Pulse website (especially
              in color), with inspiration from
              <a href="http://www.vitalvoices.org/">Vital Voices</a>, an
              <a href="http://www.globalpressjournal.com/">Global Press Journal</a>, and


            </p>
          </div>
        </div>
      </div>
      <div class="box thq no-height right"><div class="content heritage">
        <?php
          $user = new stdClass();
          $user->avatar = 'https://s3.amazonaws.com/uifaces/faces/twitter/mashaaaaal/128.jpg';
          $user->name = 'Mashaal';
          $user->flag = 'flags-a/Mauritius.png';

          $date = 'F j, Y';

          $comment = new stdClass();
          $comment->name = 'Adellecharles';
          $comment->avatar = 'https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg';

          include('copy.inc.php');
        ?>
      </div></div>

      <div class="box eighth"><div class="color" style="background-color: #43051e;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #6e1d24;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #778f41;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #b4a23c;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #004652;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #6b8295;">&nbsp;</div></div>
      <div class="box eighth"><div class="adjective"><span>Safe</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Warm</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Diverse</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Alive</span></div></div>
      <div class="box quarter"><div class="image cover" id="megamenu" data-caption="Vital Voices: Megamenu overlapping Carousel">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover bgleft" id="popular" data-caption="Global Press Journal: right-rail Popular Content">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="event" data-caption="Vital Voices: Event Teaser">&nbsp;</div></div>
    </div>

    <div class="banner" id="swatches">
      <h2>Component Swatches <small>from these sites and others. Click for information.</small></h2>
    </div>

    <div class="set">
      <div class="box thq"><div class="image cover" id="footer" data-caption="Global Press Journal: footer">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="profile-detail" data-caption="Facebook: User profile">&nbsp;</div></div>
      <div class="box quarter high right"><div class="image cover bgtop" id="color-page-tall" data-caption="Prototype landing page in green with orange calls">&nbsp;</div></div>
      <div class="box quarter right"><div class="image cover bgleft" id="blogpost-1" data-caption="Yale School of Management Insights: Blog Post">&nbsp;</div></div>
      <div class="box half low"><div class="image cover" id="banners" data-caption="Chime for Change (pre-redesign): Banners">&nbsp;</div></div>
      <div class="box quarter low" style="clear: left;"><div class="image cover bgtop" id="carousel" data-caption="Global Press Journal: carousel tabs">&nbsp;</div></div>
      <div class="box quarter low"><div class="image cover bgright" id="icons" data-caption="Women's Economic Empowerment: main navigation iconography">&nbsp;</div></div>
      <div class="box half"><div class="image cover bgtop" id="dashboard-detail" data-caption="Wordpress.com, standard site dashboard">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="features" data-caption="Open Society Foundations: Features and Events, Home Page">&nbsp;</div></div>
      <div class="box full low"><div class="image cover" id="header-2" data-caption="Global Press Journal: region-based navigation">&nbsp;</div></div>
      <div class="box half high"><div class="image cover" id="editor"  data-caption="Prototype editor">&nbsp;</div></div>
      <div class="box half right"><div class="image cover" id="inbox-flat" data-caption="Prototype inbox">&nbsp;</div></div>
      <div class="box half right"><div class="image cover" id="dashboard-proto-flat" data-caption="Prototype social dashboard">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover bgbottom" id="profile" data-caption="Catapult.org: profile avatar/block">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="index" data-caption="24 Ways: index">&nbsp;</div></div>
      <div class="box half"><div class="image cover bgleft" id="blogpost-2" data-caption="Smashing Magazine: blog post title, metadata, and navigation">&nbsp;</div></div>
      <div class="box half low"><div class="image" id="header-1" data-caption="New York Times: header and navigation">&nbsp;</div></div>
      <div class="box quarter right"><div class="image cover" id="event" data-caption="Vital Voices: Event Teaser">&nbsp;</div></div>
      <div class="box quarter right"><div class="image cover" id="megamenu"data-caption="Vital Voices: Megamenu overlapping Carousel">&nbsp;</div></div>
      <div class="box half high"><div class="image cover bgtop" id="section-hero" data-caption="Global Press Journal: Section Hero">&nbsp;</div></div>
      <div class="box half right"><div class="image cover bgright" id="steps" data-caption="Chime for Change (pre-redesign): CTA steps">&nbsp;</div></div>
      <div class="box half mid right"><div class="image cover bgleft" id="popular" data-caption="Global Press Journal: right-rail Popular Content">&nbsp;</div></div>
      <div class="box quarter high"><div class="image cover bgleft" id="signup" data-caption="Facebook: simple sign-up form">&nbsp;</div></div>
      <div class="box quarter high"><div class="image" id="teaser-1" data-caption="Catapult.org: Program/Inititative overview and CTA">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover bgtop" id="teaser-2" data-caption="Chime for Change (pre-redesign): Story teaser">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover bgleft" id="leaderboard" data-caption="Yale School of Management Insights: article masthead photo">&nbsp;</div></div>
      <div class="box half"><div class="image cover" id="sidetabs" data-caption="Prototype left-rail navigation with colored components">&nbsp;</div></div>
      <div class="box quarter"><div class="image" id="hg1-tabloid" data-caption="Tabloid / Landing Page Prototype">&nbsp;</div></div>
      <div class="box quarter"><div class="image" id="hg2-tabloid" data-caption="Tabloid / Landing Page Prototype">&nbsp;</div></div>
    </div>
  </main>
  <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
  <script type="text/javascript"><!--
    (jQuery(document).ready(function($){
      $('.color').click(function(){
        window.prompt('Color as RGB', $(this).css('background-color'));
      });

      $('.image').click(function(){
        if ($(this).data('caption').length) {
          alert($(this).data('caption'));
        }
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