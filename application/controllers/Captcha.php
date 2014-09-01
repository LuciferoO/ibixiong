<?php
class CaptchaController extends Yaf_Controller_Abstract
{
	//protected $session;
	public function IndexAction()
	{
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		$config = array(
			'img_w'				=> 200,
			'img_h'				=> 70,
			'font_size'			=> 40,
			'angle_l'			=> -25,
			'angle_r'			=> 25,						
			'pixel_num'			=>	40,
			'pixel_color'		=>	8,
			'noise_font_size'	=>	5,
			'Yamplitude'		=>	17,	
		);
		$scale = 5;				//ͼƬ�Ŵ����
		$img_w      = 200 ;  // ����ͼƬ��
		$img_h      = 70  ; // ����ͼƬ��
		$font_size  = 18;   // �����С
		$angle_l    = -14;  // ��ƫ��
		$angle_r    = 14;   // ��ƫ��
		$code_str   = "123456789abcdefghijklmnpqrstuvwxyz";
		$word_len   = 4;    // ��֤��λ��
		$pixel_num  = 14;    // �ӵ���Ŀ����
		$pixel_color= $config['pixel_color'];    // �ӵ�ֻ�� $pixel_color ����ɫ  �ܵ��ӵ���Ϊ$pixel_num*$pixel_color
		$noise_font_size = $config['noise_font_size']; // �ӵ������С
		$session_key= "captcha";	//�Զ���session����

		$font_dir   = "font/";	// �����

		$fonts_cfg = array(
	                '4'      => array('spacing' => -17, 'font' => '5.ttf')
		);
		
		//��������ַ���
		$word = "";
		$code_str_len = strlen($code_str) - 1;
		for ($i = 0; $i < $word_len; $i++) {
			$word .= $code_str[rand(0, $code_str_len)];
		}

		//$_SESSION [$session_key] = strtolower($word);
		$this->session->set($session_key,$word);
		
		//��������
		$image = imagecreatetruecolor($img_w * $scale, $img_h * $scale);
	        $rancolor = imagecolorallocate($image, 189, 252, 201);
		imagefilledrectangle($image, 0, 0, $img_w * $scale, $img_h * $scale, imagecolorallocate($image,255,255,255));

		$font = $fonts_cfg[array_rand($fonts_cfg)];
		$font_path = $font_dir . $font['font'];

		$color = imagecolorallocate($image, mt_rand(0, 100), mt_rand(20, 120), mt_rand(50, 150));
		$base_point_x = $img_w /5 * $scale;
		$base_point_y = round(($img_h * $scale + (imagefontheight($font_size))*$scale)/2);
	        $rand = mt_rand(-30,30);
		//��������
		for ($i = 0; $i < $word_len; ++$i) {
			$coords = imagettftext($image, $font_size*$scale,$rand, $base_point_x, $base_point_y, $color,$font_path, mb_substr($word, $i, 1, 'utf-8'));
			$base_point_x = $coords[2] + $font['spacing'];
		}
		
		//����֤��ͼƬ�����������ߴ�.
		$imResampled = imagecreatetruecolor($img_w, $img_h);
		imagecopyresampled($imResampled, $image,
			0, 0, 0, 0,
			$img_w, $img_h,
			$img_w * $scale, $img_h * $scale
		);
		imagedestroy($image);
		$image = $imResampled;
		header("Cache-Control: no-cache, must-revalidate");
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header("Pragma: no-cache");
		header("Cache-control: private");
		header('Content-Type: image/png');
		imagepng($image);
		imagedestroy($image);
		//echo $this->session->get($session_key);
		exit;
	}
	
}