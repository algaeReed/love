<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="container grid-sm s-content footer">
    <div class="column col-12">
        <p>
            <a href="<?php $this->options->links(); ?>">生存手册</a>。<a class="top" href="#">返回顶部</a>
        </p>
    </div>
</div>
<script>
console.log("\n %c LOVE  %c  | 熠 & 哲 \n", "color: #fff; background: #ff3366; padding:5px 0;", "background: #ddd; color: #fff; padding:5px 0;");
</script>
<?php $this->footer(); ?>

</body>
</html>
<?php if ($this->options->htmlCompress == 'enable'): $html_source = ob_get_contents(); ob_clean(); print htmlCompress($html_source); ob_end_flush(); endif; ?>