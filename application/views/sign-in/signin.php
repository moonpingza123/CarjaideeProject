<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title>Sign-in</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/semantic.css">

  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .inverted.secondary.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .inverted.secondary.menu .item,
      .inverted.secondary.menu .menu {
        display: none;
      }
      .inverted.secondary.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }

  </style>

  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/semantic.js"></script>

  <script>
  $(document).ready(function() {
    $('.masthead').visibility({
      once: false,
        onBottomPassed: function() {
          $('.fixed.menu.login').transition('fade in');
        },
        onBottomPassedReverse: function() {
          $('.fixed.menu.login').transition('fade out');
        }
    });

    $('.ui.sidebar').sidebar('attach events', '.toc.item');

  });
  </script>
</head>

<body class="pushable">

<div class="ui large top fixed menu login transition hidden">
  <div class="ui container">
    <a class="active item">Home</a>
    <a class="item">Work</a>
    <a class="item">Company</a>
    <a class="item">Careers</a>
    <div class="right menu">
      <div class="item">
        <a class="ui button">Log in</a>
      </div>
      <div class="item">
        <a class="ui primary button">Sign Up</a>
      </div>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu left">
  <a class="active item">Home</a>
  <a class="item">Work</a>
  <a class="item">Company</a>
  <a class="item">Careers</a>
  <a class="item">Login</a>
  <a class="item">Signup</a>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted segment">

    <div class="ui container">
      <div class="ui inverted secondary menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item">Home</a>
        <a class="item">Work</a>
        <a class="item">Company</a>
        <a class="item">Careers</a>
        <div class="right item">
          <a class="ui inverted button">Log in</a>
          <a class="ui inverted button">Sign Up</a>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="ui inverted vertical menu"> -->
  <div class="ui vertical inverted sticky menu" >
   <!-- <div class="ui large top fixed menu transition hidden"> -->
    <div class="ui container">
      <a class="item">Home</a>
      <a class="item">Work</a>
      <a class="item">Company</a>
      <a class="item">Careers</a>
      <div class="right menu">
        <div class="item">
          <a class="ui button">Log in</a>
        </div>
        <div class="item">
          <a class="ui primary button">Sign Up</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Page form -->
  <div class="ui container">
    <form class="ui form">
      <div class="field">
        <label>First Name</label>
        <input type="text" name="first-name" placeholder="First Name">
      </div>
      <div class="field">
        <label>Last Name</label>
        <input type="text" name="last-name" placeholder="Last Name">
      </div>
      <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" tabindex="0" class="hidden">
          <label>I agree to the Terms and Conditions</label>
        </div>
      </div>
      <button class="ui button" type="submit">Submit</button>
    </form>
  </div>


  <!-- Page footer -->
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Sitemap</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Contact Us</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Religious Ceremonies</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Banana Pre-Order</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">DNA FAQ</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">How To Access</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>