<?php
/**
* 倒计时
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="container grid-sm s-content">
    <div class="column col-12">
        <div class="links">
            <ul>
                <li>
                        <a><img src="http://love.qqpip.com/usr/themes/love/img/yes.png"> 
                        <h4>圣诞节</h4><p>
<script type="text/javascript"> 
  //获取当前系统时间
  var now=new Date();
  //获取节日时间
  var date1=new Date('2020/12/25');
  //当前日期距初始日期的毫秒数
  var s0=now.getTime();
  //节日距初始日期的毫秒数
  var s1=date1.getTime();
  //到节日还有多少毫秒数
  t1=s1-s0;
  
    //到节日还有多少天
  var riqi1=Math.ceil(t1/(1000*60*60*24));
  
     document.write('还有 <span style="color:#ff4300;">'+riqi1+'</span> 天 ');   
</script></p></a>
                </li>
                <li>
                        <a><img src="http://love.qqpip.com/usr/themes/love/img/yes.png">                   
                        <h4>平安夜</h4><p><script type="text/javascript"> 
  //获取当前系统时间
  var now=new Date();
  //获取节日时间
  var date2=new Date('2020/12/24');
  //当前日期距初始日期的毫秒数
  var s0=now.getTime();
  //节日距初始日期的毫秒数
  var s2=date2.getTime();
  //到节日还有多少毫秒数
  t2=s2-s0;
  
    //到节日还有多少天
  var riqi2=Math.ceil(t2/(1000*60*60*24));
   
     document.write('还有 <span style="color:#ff4300;">'+riqi2+'</span> 天');
</script></p></a>
                </li>
                <li>
                        <a><img src="http://love.qqpip.com/usr/themes/love/img/yes.png">                   
                        <h4>元旦</h4><p><script type="text/javascript"> 
  //获取当前系统时间
  var now=new Date();
  //获取节日时间
  var date3=new Date('2021/1/1');
  //当前日期距初始日期的毫秒数
  var s0=now.getTime();
  //节日距初始日期的毫秒数
  var s3=date3.getTime();
  //到节日还有多少毫秒数
  t3=s3-s0;
  
    //到节日还有多少天
  var riqi3=Math.ceil(t3/(1000*60*60*24));
  
     document.write('还有 <span style="color:#ff4300;">'+riqi3+'</span> 天');
</script></p></a>
                </li>
                <li>
                        <a><img src="http://love.qqpip.com/usr/themes/love/img/yes.png">                  
                        <h4>腊八节</h4><p><script type="text/javascript"> 
  //获取当前系统时间
  var now=new Date();
  //获取节日时间
  var date4=new Date('2021/1/20');
  //当前日期距初始日期的毫秒数
  var s0=now.getTime();
  //节日距初始日期的毫秒数
  var s4=date4.getTime();
  //到节日还有多少毫秒数
  t4=s4-s0;
  
    //到节日还有多少天
  var riqi4=Math.ceil(t4/(1000*60*60*24));
  
     document.write('还有 <span style="color:#ff4300;">'+riqi4+'</span> 天');
</script></p></a>
                </li>
                <li>
                    <a><img src="http://love.qqpip.com/usr/themes/love/img/yes.png"> 
                        <h4>2020-11-08在一起</h4><p>距离现在一共<?php echo floor((time()-strtotime('2020-11-08'))/86400);?>天</p>
                    </a>
                </li>
                <li>
                    <a><img src="http://love.qqpip.com/usr/themes/love/img/yes.png"> 
                        <h4>2020-11-08在一起</h4><p>距离现在一共<?php echo floor((time()-strtotime('2020-11-08'))/86400);?>天</p>
                    </a>
                </li>
                 <li>
                    <a><img src="http://love.qqpip.com/usr/themes/love/img/yes.png"> 
                        <h4>2020-11-08在一起</h4><p>距离现在一共<?php echo floor((time()-strtotime('2020-11-08'))/86400);?>天</p>
                    </a>
                </li>
                 <li>
                    <a><img src="http://love.qqpip.com/usr/themes/love/img/yes.png"> 
                        <h4>2020-11-08在一起</h4><p>距离现在一共<?php echo floor((time()-strtotime('2020-11-08'))/86400);?>天</p>
            x     </a>
                </li>
            </ul>
            <?php $this->content(); ?>
        </div>
    </div>
</div>
<?php $this->need('footer.php'); ?>