<?php /**  * @copyright	Copyright (C) 2011 JoomlaThemes.co - All Rights Reserved. **/
defined( '_JEXEC' ) or die( 'Restricted access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
?>
<?php // no direct access 
defined( '_JEXEC' ) or die( 'Restricted access' );
$slogan	= $this->params->get("slogan");
$slogandisable	= $this->params->get("slogandisable");
$addthis	= $this->params->get("addthis");
$footertext	= $this->params->get("footertext");
$footerdisable	= $this->params->get("footerdisable");
$googleanalytics	= $this->params->get("googleanalytics");
$analyticsdisable	= $this->params->get("analyticsdisable");
$socialbuttons	= $this->params->get("socialbuttons");
$slidedisable	= $this->params->get("slidedisable");
$slidedesc1	= $this->params->get("slidedesc1");
$url1	= $this->params->get("url1");
$slidedesc2	= $this->params->get("slidedesc2");
$url2	= $this->params->get("url2");
$slidedesc3	= $this->params->get("slidedesc3");
$url3	= $this->params->get("url3");
$slidedesc4	= $this->params->get("slidedesc4");
$url4	= $this->params->get("url4");
$config = JFactory::getConfig();
JHTML::_('behavior.framework', true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis:600' rel='stylesheet' type='text/css'>
<jdoc:include type="head" />
<?php require(YOURBASEPATH . DS . "functions.php"); ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/screen.css" type="text/css" />
<?php if ($this->params->get( 'analyticsdisable' )) : ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo ($googleanalytics); ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php endif; ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/NivooSlider.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/NivooSlider.js"></script>
    <script type="text/javascript">
        window.addEvent('domready', function () {
            // initialize Nivoo-Slider
            new NivooSlider($('Slider'), {
				effect: 'random',
				interval: 5000,
				orientation: 'random'
			});
        });
    </script>
</head>

<body class="background">
<div id="main">
<div id="header-w">
    	<div id="header">
		<div class="topmenu">
		<div class="topleft"></div><div class="topright">
			<jdoc:include type="modules" name="position-1" style="none" />
		</div><div class="topright2"></div>
		</div>
        	<?php if ($this->countModules('logo')) : ?>
                <div class="logo">
                	<jdoc:include type="modules" name="logo" style="none" />
                </div>
            <?php else : ?>
                <div class="logo">
            	<a href="<?php echo $this->baseurl ?>/" class="logo">
			<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" border="0" >
			</a>
                </div>
            <?php endif; ?>
		<div class="slogan"><?php if ($this->params->get( 'slogandisable' )) : ?><a href="<?php echo $this->baseurl ?>/"><?php echo ($slogan); ?><?php endif; ?></a></div>
            <?php
            if ($this->countModules('top')) : ?>
                <div class="top">
                    <jdoc:include type="modules" name="top"/>
                </div>
            <?php endif; ?>
	</div>
</div>
<div class="shadow">
<div id="wrapper">
        	<div id="navr">
			<div class="tguser"><jdoc:include type="modules" name="position-0" style="none" /></div>
		<div id="navl">
		<div id="nav">
				<div id="nav-left">
<jdoc:include type="modules" name="menuload" style="none" /></div>
	<div id="nav-right">
	<?php include "html/com_content/archive/component.php"; ?>
	<?php if ($this->countModules('breadcrumb')) : ?>
        	<jdoc:include type="modules" name="breadcrumb"  style="none"/>
        <?php endif; ?>
	<div class="clearpad"></div>
	<div id="message">
	    <jdoc:include type="message" />
	</div>
            <?php if($this->countModules('left')) : ?>
<div id="leftbar-w">
    <div id="sidebar">
        <jdoc:include type="modules" name="left" style="jaw" /></div>
<!-- MODIFY social buttons here (add yours from addthis.com) -->
<?php if ($this->params->get( 'socialbuttons' )) : ?>
<div id="bookmark"><div id="addthis">
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
</div>
<script type="text/javascript" src="<?php echo ($addthis); ?>"></script>
</div></div>
<?php endif; ?>
<!-- END of social script -->
</div>
    <?php endif; ?>
    <?php if($this->countModules('left') xor $this->countModules('right')) $maincol_sufix = '_md';
	  elseif(!$this->countModules('left') and !$this->countModules('right'))$maincol_sufix = '_bg';
	  else $maincol_sufix = ''; ?>
<div id="centercontent<?php echo $maincol_sufix; ?>">
<!-- Slideshow -->
<?php $menu = JSite::getMenu(); ?>
<?php $lang = JFactory::getLanguage(); ?>
<?php if ($menu->getActive() == $menu->getDefault($lang->getTag())) { ?>
<?php if ($this->params->get( 'slidedisable' )) : ?>
		<div id="Slider" class="nivoo-slider">
		<a href="<?php if ($this->params->get( 'url1' )) : ?><?php echo ($url1); ?><?php endif; ?>">
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/1.jpg" title="<?php if ($this->params->get( 'slidedesc1' )) : ?><?php echo ($slidedesc1); ?><?php endif; ?>" height="250" width="500" /></a>
		<a href="<?php if ($this->params->get( 'url2' )) : ?><?php echo ($url2); ?><?php endif; ?>">
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/2.jpg" title="<?php if ($this->params->get( 'slidedesc2' )) : ?><?php echo ($slidedesc2); ?><?php endif; ?>" height="250" width="500" /></a>
		<a href="<?php if ($this->params->get( 'url3' )) : ?><?php echo ($url3); ?><?php endif; ?>">
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/3.jpg" title="<?php if ($this->params->get( 'slidedesc3' )) : ?><?php echo ($slidedesc3); ?><?php endif; ?>" height="250" width="500" /></a>
		<a href="<?php if ($this->params->get( 'url4' )) : ?><?php echo ($url4); ?><?php endif; ?>">
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/4.jpg" title="<?php if ($this->params->get( 'slidedesc4' )) : ?><?php echo ($slidedesc4); ?><?php endif; ?>" height="250" width="500" /></a>
		</div>
<?php endif; ?>
<?php } ?>
<!-- END Slideshow -->
    <?php
    if ($this->countModules('position-7')) : ?>
        <jdoc:include type="modules" name="position-7"/>
    <?php endif; ?>
<div class="clearpad">
    <jdoc:include type="component" />
</div></div>
    <?php if($this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>
<div id="rightbar-w">
    <div id="sidebar">
         <jdoc:include type="modules" name="right" style="jaw" />
    </div>
    </div>
    <?php endif; ?>
<div class="clr"></div>
        </div>
        </div>
		<div id="user-bottom">
<div class="user1"><jdoc:include type="modules" name="user1" style="xhtml" /></div>
<div class="user2"><jdoc:include type="modules" name="user2" style="xhtml" /></div>
<div class="user3"><jdoc:include type="modules" name="user3" style="xhtml" /></div>
</div>

<div id="bottom">
            <div class="tg">
            <jdoc:include type="modules" name="copyright"/>Copyright 2012.
			Powered by <a href="http://www.qualityjoomlatemplates.com" title="visit qjt" target="_blank">qualityjoomlatemplates.com</a>.
<?php if ($this->params->get( 'footerdisable' )) : ?><?php echo ($footertext); ?><?php endif; ?>
</div></div></div></div>
<div class="back-bottom"><!--shadow top--></div>
</div>
</div>
</body>
</html>