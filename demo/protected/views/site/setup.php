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

	<p>Download the latest release.</p>

	<p>
		<?php echo CHtml::link('<i class="icon-share icon-white"></i> Get Yii-Bootstrap from Yii extensions',
				'http://www.yiiframework.com/extension/bootstrap/', array('class'=>'btn btn-primary btn-large', 'target'=>'_blank')); ?>
	</p>

	<p>Unzip the extension under <strong>protected/extensions/bootstrap</strong> and add the following code to your application configuration:</p>

<?php echo $parser->safeTransform("~~~
[php]
'preload'=>array(
    .....
    'bootstrap', // preload the bootstrap component
),
'modules'=>array(
    .....
    'gii'=>array(
        .....
        'generatorPaths'=>array(
            'bootstrap.gii',
        ),
    ),
),
'components'=>array(
    .....
    'bootstrap'=>array(
        'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
    ),
),
~~~"); ?>

	<p>
		You're done! Now you can start using Bootstrap in your application. For examples on how to use the widgets please visit the
		<?php echo CHtml::link('demo page', array('site/index')); ?>.
	</p>

</section>

<section id="comments">

	<h2>Comments</h2>

	<div class="fb-comments" data-href="<?php echo $this->createAbsoluteUrl('setup'); ?>" data-num-posts="10" data-width="470"></div>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>