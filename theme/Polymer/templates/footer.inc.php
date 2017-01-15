<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.inc.php
* @Package:		GetSimple
* @Action:		Material theme for GetSimple CMS
*
* 
*
*****************************************************/
?>

<!-- site footer -->

<style>

  footer.fixed { position: fixed; bottom: 0; right: 0; left: 256px;}

  footer.page-footer {
    margin-top: 20px;
    padding-top: 20px;
    background-color: #333; 
    }

  footer.page-footer .footer-copyright {
      overflow: hidden;
      height: 50px;
      line-height: 50px;
      background-color: rgba(0, 0, 0, 0.12); }

  @media (max-width: 640px) {
      footer.fixed {
        left: 0;
      }
    }

</style>

<footer class="page-footer container">

  <div class="row">
    <div class="col-md-8">
      <h5 class="white-text">ICWS Zurburg ICT</h5>
      <p class="grey-text text-lighten-4">We develop great websites</p>
    </div>
    <div class="col-md-4">
      <h5 class="white-text">Contact</h5>
      <ul>
        <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/baszurburg">Linkedin</a></li>
        <li><a class="grey-text text-lighten-3" href="https://github.com/baszurburg">Github</a></li>
        <li><a class="grey-text text-lighten-3" href="mailto:b.zurburg@xs4al.nl">Mail</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-copyright row">

      <div class="col-xxs-12 grey-text text-lighten-5">
        © <?php echo date('Y'); ?> <?php get_site_name(); ?>
        <!--
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        -->
      </div>

  </div>

</footer>

<script>

      var ICWS = ICWS || {};

      var content = document.querySelector('app-drawer-layout article');
      var header = document.querySelector('app-header');
      var footer = document.querySelector('footer'); 
      var positionPrev = 'static';

      ICWS.setFooterStyle = function () {

        var positionCalculated = (content.clientHeight + header.clientHeight + footer.clientHeight  <= window.innerHeight) ? 'fixed' : 'static';

        if (positionCalculated !== positionPrev) {
          if (positionCalculated === 'fixed') {
            footer.classList.add('fixed');
          } else {
            footer.classList.remove('fixed');
          }
          positionPrev = positionCalculated;
        }

      };

      ICWS.setFooterStyle();
      window.addEventListener('resize', ICWS.setFooterStyle);

</script>