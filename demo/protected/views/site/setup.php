<?php
$this->pageTitle = array('Setup', Yii::app()->params['appTitle']);
$this->addMetaProperty('og:title', 'Setup - '.Yii::app()->name);
$this->addMetaProperty('og:type', 'website');
$this->addMetaProperty('og:url', $this->createUrl('setup'));
$this->addMetaProperty('og:image', Yii::app()->request->getBaseUrl(true).'/images/bootstrap-avatar_normal.png');
$this->addMetaProperty('og:site_name', Yii::app()->name);
$this->addMetaProperty('og:locale',Yii::app()->fb->locale);
$this->addMetaProperty('fb:app_id', Yii::app()->fb->appID);
?>

<section id="setup">

	<h2>Setup</h2>

	<p>Download the latest release from Yii extensions by following the link below:</p>

	<p>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'primary',
			'size'=>'large',
			'icon'=>'download-alt white',
			'label'=>'Download Yii-Bootstrap',
			'url'=>'http://www.yiiframework.com/extension/bootstrap/',
			'htmlOptions'=>array('target'=>'_blank'),
		)); ?>
	</p>

	<p>Unzip the extension under <strong>protected/extensions/bootstrap</strong> and modify your application configuration accordingly:</p>

	<p>If you wish to use the provided Bootstrap theme copy the <strong>theme</strong> directory to your themes directory.</p>

<?php echo $parser->safeTransform("~~~
[php]
// Define a path alias for the Bootstrap extension as it's used internally.
// In this example we assume that you unzipped the extension under protected/extensions.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

return array(
	'theme'=>'bootstrap', // requires you to copy the theme under your themes directory
	'modules'=>array(
		'gii'=>array(
			'generatorPaths'=>array(
				'bootstrap.gii',
			),
		),
	),
	'components'=>array(
		'bootstrap'=>array(
			'class'=>'bootstrap.components.Bootstrap',
		),
	),
);
~~~"); ?>

	<p>
		You're done! Now you can start using Bootstrap in your application. For examples on how to use the widgets please visit the
		<?php echo CHtml::link('docs', array('site/index')); ?>.
	</p>

</section>

<section id="comments">

	<h2>Comments</h2>

	<div class="fb-comments" data-href="<?php echo $this->createAbsoluteUrl('setup'); ?>" data-num-posts="10" data-width="470"></div>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>