<?php
defined('_JEXEC') or die('Restricted access');
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$logo = $this->params->get('logo');
$sitename = $app->getCfg('sitename');
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
$doc->setMetaData( 'viewport', 'width=device-width, initial-scale=1.0' );
$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/template.css', $type = 'text/css');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/bootstrap.min.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/respond.min.js', 'text/javascript');
$left = $this->countModules('left');
$right = $this->countModules('right');
if($left && !$right) { $sidebar = "-left"; }
if(!$left && $right) { $sidebar = "-right"; }
if($left && $right) { $sidebar = "-left-right"; }
if(!$left && !$right) { $sidebar = "-full"; }
$countblock1 = ($this->countModules('user1')>0) + ($this->countModules('user2')>0) + ($this->countModules('user3')>0);
$countblock2 = ($this->countModules('user4')>0) + ($this->countModules('user5')>0) + ($this->countModules('user6')>0);
$countblock3 = ($this->countModules('user7')>0) + ($this->countModules('user8')>0) + ($this->countModules('user9')>0);
$countblock4 = ($this->countModules('bottom1')>0) + ($this->countModules('bottom2')>0) + ($this->countModules('bottom3')>0) + ($this->countModules('bottom4')>0) + ($this->countModules('bottom5')>0);
$countblock5 = ($this->countModules('bottom6')>0) + ($this->countModules('bottom7')>0) + ($this->countModules('bottom8')>0) + ($this->countModules('bottom9')>0) + ($this->countModules('bottom10')>0);
$countblock6 = ($this->countModules('footer1')>0) + ($this->countModules('footer2')>0) + ($this->countModules('footer3')>0) + ($this->countModules('footer4')>0) + ($this->countModules('footer5')>0);
$file = JPATH_BASE.'/templates/rt_vehicles/index.php';
$links = 'http://www.rushthemes.com';
$filedata = fopen($file,'r');
$cheaklink = fread($filedata,filesize($file));
fclose($filedata);
if(strpos($cheaklink, $links)==0){ die; }
?>