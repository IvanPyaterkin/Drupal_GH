<body>
<div id="wrap">
	<div id="header">
		<h1><a href="http://drupal.home/">GeekHub</a></h1>
		
        <?php if ($main_menu || $secondary_menu): ?>
    <nav id="navigation" class="menumain-nav <?php if (!empty($main_menu)) {print "with-primary";}
      if (!empty($secondary_menu)) {print " with-secondary";} ?>">
      <div class="container">
        <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
        
      </div>
    </nav> <!-- /navigation -->
  <?php endif; ?>

        <ul class="links">
            <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
            <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
            <li class="tw"><a href="http://twitter.com/#%21/geek_hub">twitter</a></li>
            <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
        </ul>
        <span class="line"></span>

        <h4 class="registration">Реєстрацію на 4й сезон закрито</h4>
        <p class="note">*залиште нам ваш емейл і ми повідомимо вас про початок реєстрації</p>
        <form action="#">
            <fieldset>
                <span></span>
                <input class="email" placeholder="Ваш email" type="text">
                <input value="Відіслати" type="submit">
            </fieldset>

        </form>
        <img src="/images/splash.png" alt="splash">
	</div><!-- header -->
	<div id="content">
        <div class="home">
		
            <?php if ($title): ?>
            <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
          <?php endif; ?>
		    	
					<?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
          <?php print render($title_prefix); ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <div class="clearfix">
            <?php print render($page['content']); ?>
          </div>
		  
		  
            <ul class="social_share">
                <li style="height: 240px; width: 276px; background: none repeat scroll 0% 0% transparent;" id="vk"><iframe style="overflow: hidden; height: 240px;" id="vkwidget1" scrolling="no" src="GeekHub%20-%20%D0%BE%D1%82%D1%80%D0%B8%D0%BC%D0%B0%D0%B9%20%D0%BF%D1%80%D0%B0%D0%BA%D1%82%D0%B8%D1%87%D0%BD%D1%96%20%D0%B7%D0%BD%D0%B0%D0%BD%D0%BD%D1%8F%20%D0%B2%20%D1%81%D1%84%D0%B5%D1%80%D1%96%20IT_files/widget_community.htm" name="fXD7ead7" frameborder="0" height="200" width="276"></iframe>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk", {mode: 0, width: "276", height: "240"}, 30111409);
                    </script>
                </li>
                <li class="sertificates_list">
                	<h4><a href="http://geekhub.ck.ua/certified-professionals.html">Сертифiкованi професiонали</a></h4>
                </li>
                <li>
                    <h4>Наші Спонсори</h4>
                    <ul>
                        <li class="de"><a href="http://povnahata.com/">Дім Євангелія</a></li>
                        <li class="moc"><a href="http://masterofcode.com/">Masterofcode LTD</a></li>
                        <li class="sergium"><a href="http://sergium.net/">SerGium.net</a></li>
                        <li class="clear left stuff"><a href="http://val.co.ua/">val.co.ua/</a></li>
                        <li class="youthog"><a href="http://yothog.com/">Youthog.com</a></li>
                        <li class="jetbrains"><a href="http://jetbrains.com/">JetBrains.com</a></li>
                        <li class="ucoz"><a href="http://rabota.ucoz.ua/">ucoz.ua</a></li>
                        <li class="spd-ukraine"><a href="http://spd-ukraine.com/">SPD-Ukraine.com</a></li>
                        <li class="ekreative"><a href="http://www.ekreative.com/">Ekreative.com</a></li>
                        <li class="n3wnormal"><a href="http://n3wnormal.com/">n3wnormal.ua</a></li>
                        <li class="in-ck-ua"><a href="http://in.ck.ua/">in.ck.ua</a></li>
                    </ul>
                </li>
            </ul>
        </div>
	</div><!-- content -->
    <ul id="footer">
        <li>
            <ul class="nav">
                <li><a href="http://geekhub.ck.ua/">Головна</a></li>
                <li><a href="http://geekhub.ck.ua/about.html">Про GeekHub</a></li>
                <li><a href="http://geekhub.ck.ua/team.html">Команда</a></li>
                <li><a href="http://geekhub.ck.ua/contacts.html">Зв'язок</a></li>
            </ul>
        </li>
        <li>© Copyright 2011</li>
    </ul>
</div>
</body>
