<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>World Pulse: Style Tiles</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css' />
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6795652/718384/css/fonts.css" />
  <link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body class="transition">
  <header>
    <h1>World Pulse</h1>
    <ul>
      <li><a href="#tiles">Style Tiles</a></li>
      <li><a href="#adjs">Adjective Survey</a></li>
      <li><a href="#phrases">Guiding Phrases</a></li>
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
            <p>These are still a working draft following the feedback from the
              original mood boards. <em>Metropolis</em> was noted as a strong
              possibility, and <em>Community Part</em> was not ruled out.
              Therefore, those have been tweaked, and used to create an initial
              style of a journal post. Additionally, I built another style tile
              using the existing WP palette. <em>This is not a finished design,</em>
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
            <p><strong>The newspaper:</strong> visual impact created with large,
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
      <div class="box quarter"><div class="title"><span>Community Park<br /><small>Source Sans Pro &amp; Gotham</small></span></div></div>
      <div class="box thq right no-height">
        <div class="content park introduction">
          <div class="content-wrap">
            <p><strong>The magazine:</strong> visual impact created by bright,
              near-primary colors with secondary accents, with more rounded
              components to evoke a more celebratory and light attitude while
              retaining a modern appeal, but avoiding the traps of the
              &ldquo;flat&rdquo; aesthetic trend. Reminiscent of the World Pulse
              magazine (print editions), with inspiration from
              <a href="http://www.empowerwomen.org/">Women's Economic Empowerment</a>,
              <a href="http://catapult.org">Catapult.org</a>,
              <a href="http://commoncoresuccess.elschools.org/curriculum/grade-7/">Expeditionary Learning: Common Core Success</a>,
              <a href="http://www.microsoft.com/en-us/default.aspx">Microsoft</a>,
              <a href="http://www.etsy.com">Etsy</a>, and
              <a href="http://www.smashingmagazine.com/">Smashing Magazine</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="box thq no-height right"><div class="content park">
        <?php
          $user = new stdClass();
          $user->avatar = 'https://s3.amazonaws.com/uifaces/faces/twitter/reetajayendra/128.jpg';
          $user->name = 'Rita';
          $user->flag = 'flags-a/Colombia.png';

          $date = 'j F Y';

          $comment = new stdClass();
          $comment->name = 'Aileen';
          $comment->avatar = 'https://s3.amazonaws.com/uifaces/faces/twitter/aiiaiiaii/128.jpg';

          include('copy.inc.php');
        ?>
      </div></div>

      <div class="box eighth reg"><div class="color" style="background-color: #e51f30;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #2fa9d2;">&nbsp;</div></div>
      <div class="box eighth"><div class="color" style="background-color: #41991e;">&nbsp;</div></div>
      <div class="box eighth"><div class="adjective"><span>Rejuvenate</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Celebrate</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Coexist</span></div></div>
      <div class="box eighth"><div class="adjective"><span>Vibrant</span></div></div>
      <div class="box quarter"><div class="image cover" id="index" data-caption="24 Ways: Home Page">&nbsp;</div></div>
      <div class="box quarter"><div class="image" style="background-size: 300%; background-position: -350px -300px;" id="dashboard-proto-flat" data-caption="Dashbaord Prototype">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" style="background-position: -130px center;" id="inbox-flat" data-caption="Inbox Prototype">&nbsp;</div></div>
      <div class="box quarter"><div class="image cover" id="overview-elccs" data-caption="Expeditionary Learning, Common Core Success: Program Overview">&nbsp;</div></div>
    </div>

    <div class="set">
      <div class="box quarter"><div class="title"><span>Heritage<br /><small>Whitney &amp; Gotham &amp; Archer</small></span></div></div>
      <div class="box thq right no-height">
        <div class="content heritage introduction">
          <div class="content-wrap">
            <p><strong>The past, rejuvinated:</strong> World Pulse team members
              are proud of and nostalgic for brand assets of the past and the
              present. Leveraging the existing palette of rich, organic tertiary
              colors which convey a non-specific international diversity and
              combining it with more legible typography and modern layout
              techniques freshens the look and feel without departing from
              current standards. Reminiscent of the World Pulse website and
              magazine (especially in coloring), with inspiration from
              <a href="http://www.vitalvoices.org/">Vital Voices</a>,
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
      <div class="box half"><div class="image cover" id="overview-elccs" style="background-position-y: -195px;" data-caption="Expeditionary Learning, Common Core Success: Program Overview">&nbsp;</div></div>
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