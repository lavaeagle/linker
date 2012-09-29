<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Linker, Simulate user clicking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Linker</a>
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Linker</h1>
        <p>
          Find errors in your application by simulating users clicking through your site.<br>
          While Linker is checking for errors automatically, you can continue working.
        </p>

        <p>
            <?php if( !Session::has( 'linker' ) ): ?>
                <a class="btn btn-success btn-large" href='<?php echo url( 'linker/main/activate' ) ?>'>Activate</a>
            <?php else: ?>
                <a class="btn btn-danger btn-large" href='<?php echo url( 'linker/main/deactivate' ) ?>'>Deactivate</a>
                <a class="btn btn-success btn-large" href='<?php echo url( '/' ) ?>' target='_blank'>Open The Testing Tab &raquo;</a>
            <?php endif; ?>
        </p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span6">
          <h2>How to install</h2>
          <p>
            <ol>
              <li>
                Install using artisan
                <pre>php artisan bundle:install linker</pre>
              </li>

              <li>
                Add this application/bundles.php.
                <pre>'linker' => array(
    'auto' => true,
    'handles' => 'linker',
),</pre>
              </li>

              <li>
                Add this all to the bottom of layouts you want tested.
                <pre>{{ Linker::render() }}
// or
&lt;?php Linker::render(); ?&gt;</pre>
              </li>

              <li>
                Bookmark this to activate/deactivate Linker
                <a href='<?php echo url( 'linker' ) ?>' target='_blank'><?php echo url( 'linker' ) ?></a>
              </li>
            </ol>
          </p>
        </div>

        <div class="span6">
          <h2>How to use</h2>
          <p>
            <ol>
              <li>Open a different browser or an incognito tab.</li>
              <li>Login to your app or not.</li>
              <li>Activate Linker to test your application's links.</li>
              <li>Open the testing tab, and let it run while you work in your primary browser.</li>
              <li>Keep this tab open so you can deactivate Linker when you want.</li>
            </ol>
          </p>
        </div>
      </div>

      <hr>

      <footer>
        <p>
          &copy; CloudDueling.com 2012 | <a href='https://twitter.com/michaeljcalkins' target='_blank'>@michaeljcalkins</a>
        </p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/js/bootstrap.min.js"></script>

  </body>
</html>
