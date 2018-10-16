<?php
/**
* 归档页面
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="u-backgroundGrayLightest u-marginBottom50 hasHeaderBackground" style="background-image: url(https://i.loli.net/2018/04/29/5ae5756891992.png)">
    <header class="hero--standalone layoutSingleColumn layoutSingleColumn--wide">
        <h2 class="hero-title">归档</h2>
        <p class="hero-description">Stories grouped by time</p>
    </header>
</div>


<div class="list--collection layoutSingleColumn">
<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->parse('<li>{year}-{month}-{day} : <a href="{permalink}">{title}</a></li>'); ?>
</div>

<?php $this->need('footer.php'); ?>
