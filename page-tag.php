<?php
/**
* 云标签页
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="u-backgroundGrayLightest u-marginBottom50 hasHeaderBackground" style="background-image: url(https://i.loli.net/2018/04/29/5ae5756891992.png)">
    <header class="hero--standalone layoutSingleColumn layoutSingleColumn--wide">
        <h2 class="hero-title">标签</h2>
        <p class="hero-description">Stories grouped by tags</p>
    </header>
</div>


<div class="list--collection layoutSingleColumn">
<?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true))->to($tags); ?>
    <h3 class="widget-title"><?php _e('标签云'); ?></h3>
    <?php if($tags->have()): ?>
        <?php while ($tags->next()): ?>
        <a style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,
           <?php echo(rand(0,255)); ?>)" href="<?php $tags->permalink();?>">
           <?php $tags->name(); ?></a>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php $this->need('footer.php'); ?>
