<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * 系统邮件发送函数
 * @param string $tomail 接收邮件者邮箱
 * @param string $name 接收邮件者名称
 * @param string $subject 邮件主题
 * @param string $body 邮件内容
 * @param string $attachment 附件列表
 * @return boolean
 * @author static7 <static7@qq.com>
 */
function send_mail($toemail, $name, $subject = '', $body = '', $attachment = null) {
    $mail = new \PHPMailer\PHPMailer\PHPMailer();        //实例化PHPMailer对象
    $mail->CharSet = 'UTF-8';           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP();                    // 设定使用SMTP服务
    $mail->SMTPDebug = 1;               // SMTP调试功能 0=关闭 1 = 错误和消息 2 = 消息
    $mail->SMTPAuth = true;             // 启用 SMTP 验证功能
    $mail->SMTPSecure = 'ssl';          // 使用安全协议
    $mail->Host = "smtp.qq.com"; // SMTP 服务器
    $mail->Port = 465;                  // SMTP服务器的端口号
    $mail->Username = "1679026896@qq.com";    // SMTP服务器用户名
    $mail->Password = "lrycjmyojvovfbbe";     // SMTP服务器密码
    $mail->SetFrom('1679026896@qq.com', '人事部');
    $replyEmail = '';                   //留空则为发件人EMAIL
    $replyName = '';                    //回复名称（留空则为发件人名称）
    $mail->AddReplyTo($replyEmail, $replyName);
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    $mail->AddAddress($toemail, $name);
    if (is_array($attachment)) { // 添加附件
        foreach ($attachment as $file) {
            is_file($file) && $mail->AddAttachment($file);
        }
    }
    $result = $mail -> Send();
    if($result){
       return true;
    }else{
       return $mail -> ErrorInfo;
    }
    //return $mail->Send() ? true : $mail->ErrorInfo;
}
//过滤内容
function remove_xss($val)
{
   $val = str_replace('&lt;','<',$val);
   $val = str_replace('&gt;','>',$val);
   $val = strip_tags($val, '<img><p><b><i><a><strike><pre><code><font><blockquote><span><ul><li><table><tbody><tr><td><ol><iframe><embed>');
   $val = preg_replace('/([\x00-\x08,\x0b-\x0c,\x0e-\x19])/', '', $val);
   $search = 'abcdefghijklmnopqrstuvwxyz';
   $search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $search .= '1234567890!@#$%^&*()';
   $search .= '~`";:?+/={}[]-_|\'\\';
   for ($i = 0; $i < strlen($search); $i++) {
      $val = preg_replace('/(&#[xX]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val);
      $val = preg_replace('/(�{0,8}'.ord($search[$i]).';?)/', $search[$i], $val);
   }
   $ra1 = array('expression', 'applet', 'meta', 'xml', 'blink', 'link', 'object', 'frameset', 'bgsound', 'title', 'base');
   $ra2 = array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');
   $ra = array_merge($ra1, $ra2);
   $found = true;
   while ($found == true) {
      $val_before = $val;
      for ($i = 0; $i < sizeof($ra); $i++) {
         $pattern = '/';
         for ($j = 0; $j < strlen($ra[$i]); $j++) {
            if ($j > 0) {
               $pattern .= '(';
               $pattern .= '(&#[xX]0{0,8}([9ab]);)';
               $pattern .= '|';
               $pattern .= '|(�{0,8}([9|10|13]);)';
               $pattern .= ')*';
            }
            $pattern .= $ra[$i][$j];
         }
         $pattern .= '/i';
         $replacement = substr($ra[$i], 0, 2).'<x>'.substr($ra[$i], 2);
         $val = preg_replace($pattern, $replacement, $val);
         if ($val_before == $val) {
            $found = false;
         }
      }
   }
   return $val;
}
//验证手机号
function check_phone($str){
    $search = '/^0?1[3|4|5|6|7|8][0-9]\d{8}$/';
    if ( preg_match( $search, $str ) ) {
        return true;
    } else {
        return false;
    }
}
//验证邮箱
function check_email($email){
    $pattern="/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";
    if(preg_match($pattern,$email)){
        return true;
    }else{
        return false;
    }
}
//年龄数组
function yearArr(){
    $years = range(date("Y", strtotime("now - 10 years")),date("Y", strtotime("now - 60 years"))); 
    foreach($years as $year){
      $yeararr[]= '<option value="'.$year.'">'.$year.'</option>'; 
    }
    return $yeararr;
}
//身高数组
function statureArr(){
    $stature=range(150,200);
    foreach ($stature as $value) {
        $starr[]= '<option value="'.$value.'">'.$value.'</option>';
    }
    return $starr;
}
//镇区
function townArr(){
    $arr=array('建昌镇','沙洲镇','株良镇','上唐镇','里塔镇','洪门镇','龙湖镇','新丰街镇','万坊镇','徐家乡','天井源乡','浔溪乡');
    foreach ($arr as $value) {
        $townarr[]= '<option value="'.$value.'">'.$value.'</option>';
    }
    return $townarr;
}
//学历数组
function eduArr(){
  $arr=array('初中及以下','高中/中专','大专','本科','研究生','博士及以上');
  foreach ($arr as $value) {
      $eduarr[]= '<option value="'.$value.'">'.$value.'</option>';
  }
  return $eduarr;
}
//月薪
function wagesArr(){
  $arr=array('1000以下','1000-2000','2000-3000','3000-4000','4000-5000','5000-8000','8000-10000','10000以上');
  foreach ($arr as $key => $value) {
    $wagesarr[]='<option value="'.$key.'">'.$value.'</option>';
  }
  return $wagesarr;
}
//星座
function signArr(){
  $arr=array('白羊座','金牛座','双子座','巨蟹座','狮子座','处女座','天秤座','天蝎座','射手座','摩羯座','水瓶座','双鱼座');
  foreach ($arr as $key => $value) {
    $signarr[]='<option value="'.$key.'">'.$value.'</option>';
  }
  return $signarr;
}