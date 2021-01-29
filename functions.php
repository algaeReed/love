<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    
    function themeConfig($form) {
	$favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('Favicon'), _t('在这里输入图标链接，不填则使用主题自带的Favicon'));
	$form->addInput($favicon);
	$iosicon = new Typecho_Widget_Helper_Form_Element_Text('iosicon', NULL, NULL, _t('Apple Touch Icon'), _t('在这里输入图标链接，不填则使用主题自带的Apple Touch Icon'));
	$form->addInput($iosicon);
	$message = new Typecho_Widget_Helper_Form_Element_Text('message', NULL, NULL, _t('祝福页面链接'), _t('在这里输入祝福页面链接'));
	$form->addInput($message);
	$links = new Typecho_Widget_Helper_Form_Element_Text('links', NULL, NULL, _t('生存手册链接'), _t('在这里输入生存手册链接'));
	$form->addInput($links);
    $gravatar = new Typecho_Widget_Helper_Form_Element_Radio('gravatar',array('default' => _t('默认'),'v2ex' => _t('V2EX CDN')),'default',_t('Gravatar头像源'),_t('设置Gravatar头像源，推荐V2EX CDN'));
    $form->addInput($gravatar);
    $htmlCompress = new Typecho_Widget_Helper_Form_Element_Radio('htmlCompress',array('enable' => _t('启用'),'disable' => _t('禁止')),'disable', _t('HTML代码压缩'), _t('默认禁止，启用则会对HTML代码进行压缩，可能会跟部分插件存在兼容问题，请自行测试'));
    $form->addInput($htmlCompress);
}

function getCommentAt($coid){
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent')
        ->from('table.comments')
        ->where('coid = ?', $coid));
    $parent = $prow['parent'];
    $status = $prow['status'];
    if ($parent != "0" || $status == "approved") {
        $arow = $db->fetchRow($db->select('author')
            ->from('table.comments')
            ->where('coid = ? AND status = ?', $parent, 'approved'));
        $author = $arow['author'];
        $href   = '<a href="#comment-'.$parent.'">@'.$author.'</a>';
        echo $href;
    } else {
        echo '';
    }
}

function htmlCompress($html_source) {
    $chunks = preg_split('/(<!--<nocompress>-->.*?<!--<\/nocompress>-->|<nocompress>.*?<\/nocompress>|<pre.*?\/pre>|<textarea.*?\/textarea>|<script.*?\/script>)/msi', $html_source, -1, PREG_SPLIT_DELIM_CAPTURE);
    $compress = '';
    foreach ($chunks as $c) {
        if (strtolower(substr($c, 0, 19)) == '<!--<nocompress>-->') {
            $c = substr($c, 19, strlen($c) - 19 - 20);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 12)) == '<nocompress>') {
            $c = substr($c, 12, strlen($c) - 12 - 13);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 4)) == '<pre' || strtolower(substr($c, 0, 9)) == '<textarea') {
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 7)) == '<script' && strpos($c, '//') != false && (strpos($c, "\r") !== false || strpos($c, "\n") !== false)) {
            $tmps = preg_split('/(\r|\n)/ms', $c, -1, PREG_SPLIT_NO_EMPTY);
            $c = '';
            foreach ($tmps as $tmp) {
                if (strpos($tmp, '//') !== false) {
                    if (substr(trim($tmp), 0, 2) == '//') {
                        continue;
                    }
                    $chars = preg_split('//', $tmp, -1, PREG_SPLIT_NO_EMPTY);
                    $is_quot = $is_apos = false;
                    foreach ($chars as $key => $char) {
                        if ($char == '"' && $chars[$key - 1] != '\\' && !$is_apos) {
                            $is_quot = !$is_quot;
                        } else if ($char == '\'' && $chars[$key - 1] != '\\' && !$is_quot) {
                            $is_apos = !$is_apos;
                        } else if ($char == '/' && $chars[$key + 1] == '/' && !$is_quot && !$is_apos) {
                            $tmp = substr($tmp, 0, $key);
                            break;
                        }
                    }
                }
                $c .= $tmp;
            }
        }
        $c = preg_replace('/[\\n\\r\\t]+/', ' ', $c);
        $c = preg_replace('/\\s{2,}/', ' ', $c);
        $c = preg_replace('/>\\s</', '> <', $c);
        $c = preg_replace('/\\/\\*.*?\\*\\//i', '', $c);
        $c = preg_replace('/<!--[^!]*-->/', '', $c);
        $compress .= $c;
    }
    return $compress;
}