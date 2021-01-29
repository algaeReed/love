<?php
/**
 * Typecho主题 - LOVE<br>chen du xiu dou mei you wo xiu
 * @package Love
 * @author XJH
 * @version 1.0
 * @link https://www.xujianhua.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="container grid-sm s-content posts bor">
	<div class="column col-12">
        <ol>
            <?php while($this->next()): ?>
            <li class=<?php if (array_key_exists('done',unserialize($this->___fields()))): ?>"done"<?php else : ?><?php endif; ?>><?php if (array_key_exists('done',unserialize($this->___fields()))): ?><del><?php $this->title() ?></del><?php else : ?><p><?php $this->title() ?></p><?php endif; ?></li>
            <?php endwhile; ?>
        </ol>
	</div>
</div>

<?php $this->need('footer.php'); ?>