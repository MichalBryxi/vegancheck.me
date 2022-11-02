<?php
  include_once('includes/header.php');
?>
    <style>
      .form h2, p {
        text-align: left;
        -webkit-hyphens: auto;
        -moz-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
      }
    </style>
  </head>

  <body>
      <nav class="nav">
    <div class="flex-container">
      <div class="flex-item">
        <a href="/">
          <span class="icon icon-vegancheck"></span>
          <span class="menu-item">Home</span>
      </a>
      </div>
  <div class="flex-item">
    <a href="/ingredients">
        <span class="icon icon-ingredients"></span>
        <span class="menu-item"><?php echo L::ingredients_shorttitle; ?></span>
    </a>
  </div>
  <div class="flex-item active">
      <span class="icon icon-ellipsis"></span>
      <span class="menu-item"><?php echo L::more_more; ?></span>
  </div>
  </div>
  </nav>
    <div class="modal_view animatedfaster fadeInUp" id="donationmodal" style="display: none;">
      <div class="modal_close" id="modal_close"><a class="btn-dark">&times;</a></div>
          <h2><?php echo L::more_supportus; ?></h2>
          <div class="option active" id="option_once">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="once" checked>
            <span class="muted">Just support us once</span>
            <span class="price">1-15€</span>
          </div>
          <div class="option" id="option_monthly">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="monthly">
            <span class="muted">Monthly</span>
            <span class="price">1-15€/month</span>
          </div>
          <div class="option" id="option_stripe">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="stripe">
            <span class="muted">Once via Stripe</span>
            <span class="price">1-100€</span>
          </div>
          <div class="option" id="option_gh">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="gh">
            <span class="muted">Monthly via GitHub</span>
            <span class="price">1-100$/month</span>
          </div>
          <div class="center">
            <a href="https://www.paypal.com/donate/?hosted_button_id=J7TEA8GBPN536" class="button" id="supportbtn"><span class="icon-paypal"></span> Donate with PayPal</a>
            <span class="info">The payment process will be completed on <span id="vendor">PayPal</span>.</span>
        </div>
  </div>

    <div class="container top" id="mainpage">
      <div id="main">
        <div class="form">
          <!--<a href="javascript:history.back();" class="icon-left-open"></a>-->
            <a href="#" id="donate" class="Grid links">
                  <div class="Grid-cell description"><?php echo L::more_supportus; ?></div>
                  <div class="Grid-cell icons"><span class="unknown icon-right-open"></span></div>
            </a>
            <a href="tos" class="Grid links">
                  <div class="Grid-cell description"><?php echo L::more_tos; ?></div>
                  <div class="Grid-cell icons"><span class="unknown icon-right-open"></span></div>
            </a>
            <a href="privacy-policy" class="Grid links">
                  <div class="Grid-cell description"><?php echo L::more_privacypolicy; ?></div>
                  <div class="Grid-cell icons"><span class="unknown icon-right-open"></span></div>
            </a>
            <a href="https://jokenetwork.de/vegancheck-api" class="Grid links">
                  <div class="Grid-cell description"><?php echo L::more_api; ?></div>
                  <div class="Grid-cell icons"><span class="unknown icon-right-open"></span></div>
            </a>
            <a href="impressum" class="Grid links">
                  <div class="Grid-cell description"><?php echo L::more_imprint; ?></div>
                  <div class="Grid-cell icons"><span class="unknown icon-right-open"></span></div>
            </a>
      </div>
    </div>
<?php
  include_once('includes/footer.php');
?>
  </body>
</html>