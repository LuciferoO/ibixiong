<?php 

class Mail_SendMail
{
        protected	$smtp="";   //SMTP邮件发送服务器
        protected	$smtpport=25;
        protected	$title="";     //邮件标题
        protected	$username="";   //SMTP用户名
        protected	$passwd;   //SMTP密码
        protected	$mailfrom=""; //发送人
        protected	$mailsend=""; //对方显示的发送人
        protected	$replyto="";//回复邮件人
        protected	$sendto=""; //收件人
        protected	$mail="";     //邮件正文
        
        protected	$message = "";
        protected	$lastmessage = "";	
        protected	$isAttach = 0;
        protected	$type;
        protected	$name;
        protected	$data; 
        
        // 设置基本信息
        function __construct($smtp, $smtpport, $title, $username, $passwd, $mailfrom, $mailsend, $replyto, $sendto, $mail)
        {
                $this->smtp=$smtp;
                $this->smtpport=$smtpport;
                $this->title=$title;
                $this->username=$username;
                $this->passwd=$passwd;
                $this->mailfrom=$mailfrom;
                $this->mailsend=$mailsend;
                $this->replyto=$replyto;
                $this->sendto=$sendto;
				$this->mail = $mail;
        }
        
        // 设置附件
        function  setAttach($type, $name, $data)
        {
                $this->type=$type;
                $this->name=$name;
                $this->data=$data;
                $this->isAttach=1;
        }
        
        function Send()
        {
                $s = fsockopen($this->smtp,$this->smtpport);
                if ($s)
                {
                        //set_socket_blocking($s,true);
						stream_set_blocking($s,true);
                        $this->lastmessage=fread($s,2000);
                        if (!preg_match("/^220/",$this->lastmessage))
                        {
                                $this->message .= "Failed connect stmp error:" . $this->lastmessage . "<br>";
                        }
                        else
                        {
                                $this->message .= "Connect stmp ok:" . $this->lastmessage . "<br>";
                                fputs($s,"HELO mailuser"."\r\n");
                                $this->lastmessage=fread($s,2000);
                                if (preg_match("/^250/",$this->lastmessage))
                                {
                                        $this->message .= "HELO ok:" .$this->lastmessage. "<br>";
                                }
                                else
                                {
                                        $this->message .= "HELO failed:" .$this->lastmessage. "<br>";
                                }
                                fputs($s,"AUTH LOGIN"."\r\n");
                                $this->lastmessage=fread($s,2000);
                                if (preg_match("/^334/",$this->lastmessage))
                                {
                                        $this->message .= "AUTH ...:" .$this->lastmessage. "<br>";
                                }
                                else
                                {
                                        $this->message .= "AUTH can't:" .$this->lastmessage. "<br>";
                                }
                                fputs($s,base64_encode($this->username)."\r\n");
                                $this->lastmessage=fread($s,2000);
                                if (preg_match("/^334/",$this->lastmessage))
                                {
                                        $this->message .= "AUTH user ok:" .$this->lastmessage. "<br>";
                                }
                                else
                                {
                                        $this->message .= "AUTH failed:" .$this->lastmessage. "<br>";
                                }
                                fputs($s,base64_encode($this->passwd)."\r\n");
                                $this->lastmessage=fread($s,2000);
                                if (preg_match("/^235/",$this->lastmessage))
                                {
                                        $this->message .= "AUTH pass ok:" .$this->lastmessage. "<br>";
                                }
                                else
                                {
                                        $this->message .= "AUTH pass failed:" .$this->lastmessage. "<br>";
                                }
                                fputs($s,"MAIL FROM:$this->mailfrom"."\r\n");
                                $this->lastmessage=fread($s,2000);
                                if (preg_match("/^250/",$this->lastmessage))
                                {
                                        $this->message .= "MAIL FROM ok:" .$this->lastmessage. "<br>";
                                }
                                else
                                {
                                        $this->message .= "MAIL FROM failed:" .$this->lastmessage. "<br>";
                                }
                                fputs($s,"RCPT TO:$this->sendto"."\r\n");
                                $this->lastmessage=fread($s,2000);
                                if (preg_match("/^250/",$this->lastmessage))
                                {
                                        $this->message .= "RCPT TO ok:" .$this->lastmessage. "<br>";
                                }
                                else
                                {
                                        $this->message .= "RCPT TO failed:" .$this->lastmessage. "<br>";
                                }
                                fputs($s,"DATA"."\r\n");
                                $this->lastmessage=fread($s,2000);
                                if (preg_match("/^354/",$this->lastmessage))
                                {
                                        
                                        $this->message .= "DATA ..." .$this->lastmessage. "<br>";
                                        if ($this->isAttach)
                                        {
                                                fputs($s, 'Content-Type: multipart/mixed; boundary=----------wXSaZdWK9CA5VAy6CUTRhf' . "\r\n");
                                        }
                                        fputs($s, "MIME-Version: 1.0" . "\r\n");
                                        fputs($s,"From: $this->mailsend" . "\r\n");
                                        fputs($s,"Subject:$this->title" . "\r\n");
                                        fputs($s,"To:$this->sendto" . "\r\n");
                                        
                                        
                                        if ($this->isAttach)
                                        {
                                                //fputs($s, 'Content-Type: multipart/mixed; boundary=----------inm3Z3G8Gv7qKnPf62Tb8c' . "\r\n");
                                        }
                                        else 
                                        {
                                                fputs($s, 'Content-Type: text/html;charset=utf-8' . "\r\n");
                                                fputs($s, 'Content-Transfer-Encoding: base64' . "\r\n");
                                        }
                                        
                                        fputs($s, "\r\n");
                                        //fputs($s,"\r\n");
                
                                        // 如果有附件的话要添加标识
                                        if ($this->isAttach)
                                        {
                                                fputs($s, '------------wXSaZdWK9CA5VAy6CUTRhf' . "\r\n");
                                                fputs($s, 'Content-Type: text/html; charset=utf-8; format=flowed; delsp=yes' . "\r\n");
                                                fputs($s, 'Content-Transfer-Encoding: Base64' . "\r\n\r\n");
                                        }
                                        
                                        
                                        fputs($s,base64_encode($this->mail) . "\r\n");
                                        //fputs($s,"\r\n");
                                        
                                        
                                        // 如果有附件，发送附件
                                        if ($this->isAttach)
                                        {
                                                fputs($s, '------------wXSaZdWK9CA5VAy6CUTRhf' . "\r\n");
                                                fputs($s, "Content-Disposition: attachment; filename=$this->name" . "\r\n");
                                                fputs($s, "Content-Type: $this->type; name=". '"' . "$this->name" . '"' . "\r\n" );
                                                fputs($s, "Content-Transfer-Encoding: Base64" . "\r\n");                                
                                                fputs($s, "\r\n");
                                                fputs($s, base64_encode($this->data) . "\r\n");
                                                fputs($s, "\r\n");
                                                fputs($s, '------------wXSaZdWK9CA5VAy6CUTRhf--');
                                        }

                                        fputs($s, "\r\n");
                                        fputs($s,"." . "\r\n");
                                        $this->lastmessage=fread($s,2000);
                                        if (preg_match("/^250/",$this->lastmessage))
                                        {
                                                $this->message .= "send mail ok:" .$this->lastmessage. "<br>";
                                        }
                                        else
                                        {
                                                $this->message .= "send mail failed:" .$this->lastmessage. "<br>";
                                        }
                                }
                                else
                                {
                                        $this->message .= "DATA failed:" .$this->lastmessage. "<br>";
                                }
                
                                fputs($s,"QUIT"."\r\n");
                                $this->lastmessage=fread($s,2000);
                                if (preg_match("/^221/",$this->lastmessage))
                                {
                                        $this->message .= "close with server ok:" .$this->lastmessage. "<br>";
                                }
                                else
                                {
                                        $this->message .= "close with server failed:" .$this->lastmessage. "<br>";
                                }
                
                        }
                        return $this->message;
                        //echo "s_".$this->message;
                }
                else
                {
                        return "err_";
                        //echo "err_";
                }
                
                fclose($s);
        }
        
        
}

/*

$smtp = "smtp.ym.163.com";
$smtpport=25;
$title="注册成功 邮件激活 - i比熊";     //邮件标题
$mailfrom="<ibixiong@ibixiong.com>"; //发送人
$username = "ibixiong@ibixiong.com";//"qiuyanjie";
$passwd="i@bixiong";   //SMTP密码
$mailsend="ibixiong@ibixiong.com"; //对方显示的发送人
$replyto="<ibixiong@ibixiong.com>";//回复邮件人
$sendto="<272709362@qq.com>"; //收件人
$mail='<span style="color:#000;">恭喜！您已经在i比熊(<a href="http://www.ibixiong.com" target="_blank">www.ibixiong.com</a>)注册成功，</span>';     //邮件正文
//$mail='test';

//$smtp, $smtpport, $title, $username, $passwd, $mailfrom, $mailsend, $replyto, $sendto, $mail

$sendit = new SendMail($smtp, $smtpport, $title, $username, $passwd, $mailfrom, $mailsend, $replyto, $sendto, $mail);
//$sendit->setAttach("text/plain", "test.txt", "geek come on");
$sendit->Send();
//echo $sendit->Send();

unset($sendit);*/
?>