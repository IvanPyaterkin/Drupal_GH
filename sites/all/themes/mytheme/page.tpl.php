
<body class="inner">
<div id="wrap">
	<div id="header">
		<h1><a href="http://geekhub.ck.ua/">GeekHub</a></h1>
        <ul class="nav">
            <li><a href="http://geekhub.ck.ua/">Головна</a></li>
            <li><a href="http://geekhub.ck.ua/about.html">Про GeekHub</a></li>
            <li><a href="http://geekhub.ck.ua/team.html">Команда</a></li>
            <li><a href="http://geekhub.ck.ua/faq.html">FAQ</a></li>
            <li><a href="http://geekhub.ck.ua/contacts.html">Зв’язок</a></li>
        </ul>
        <ul class="links">
            <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
            <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
            <li class="tw"><a href="http://twitter.com/#%21/geek_hub">twitter</a></li>
            <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
        </ul>
	</div><!-- header -->
	<div id="content">
        <div class="sidebar">
            
               <?php print render($page['content_top']); ?>
          
        </div>
        <div class="details">
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
        </div>
	</div><!-- content -->
    <ul id="footer">
        <li>
            <ul class="nav">
                <li><a href="http://geekhub.ck.ua/">Головна</a></li>
                <li><a href="http://geekhub.ck.ua/about.html">Про GeekHub</a></li>
                <li><a href="http://geekhub.ck.ua/team.html">Команда</a></li>
                <li><a href="http://geekhub.ck.ua/contacts.html">Зв’язок</a></li>
            </ul>
        </li>
        <li>© Copyright 2011</li>
    </ul>
</div>
</body>
