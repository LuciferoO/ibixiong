<?php
/**
 * @name ErrorController
 * @desc 错误控制器, 在发生未捕获的异常时刻被调用
 * @see http://www.php.net/manual/en/yaf-dispatcher.catchexception.php
 * @author root
 */
class ErrorController extends Yaf_Controller_Abstract {

	//从2.1开始, errorAction支持直接通过参数获取异常
	public function errorAction($exception) {
		$exception = $this->getRequest()->getException();
		//1. assign to view engine
		$this->getView()->assign("exception", $exception);

		/*try {
			//throw $exception;
			if (isset($_SERVER['HTTP_REFERER'])) {
				//$msg = "try http_referer";
				$url = $_SERVER['HTTP_REFERER'];
			
				$url_parts = parse_url($url);
				//print_r($url);
				if (preg_match('/.*\.ibixiong(\.com)$/i', $url_parts['host'])) {
					$referer = $url;
				} else {
					//echo "not match";
					$referer = DOMAIN;
				}
			} else {
				//$msg = "try ";
				$referer = DOMAIN;
			}
				
			$this->getView()->assign("title"," 精品阅读分享 - i比熊  ");	
			$this->getView()->assign("referer",$referer);	
			//$this->getView()->assign("msg",$msg);	
			$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/404.tpl");
		} catch (Yaf_Exception_LoadFailed $e) {
			//加载失败
			
			if (isset($_SERVER['HTTP_REFERER'])) {
				//$msg = "load http_referer";
				$url = $_SERVER['HTTP_REFERER'];
			
				$url_parts = parse_url($url);
				if (preg_match('/.*\.ibixiong(\.com)$/i', $url_parts['host'])) {
					$referer = $url;
				} else {
					$referer = DOMAIN;
				}
			} else {
				//$msg = "load ";
				$referer = DOMAIN;
			}
				
			$this->getView()->assign("title"," 精品阅读分享 - i比熊  ");	
			$this->getView()->assign("referer",$referer);
			//$this->getView()->assign("msg",$msg);				
			$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/404.tpl");
		} catch (Yaf_Exception $e) {
			//其他错误
			if (isset($_SERVER['HTTP_REFERER'])) {
				//$msg = "other http_referer";
				$url = $_SERVER['HTTP_REFERER'];
			
				$url_parts = parse_url($url);
				if (preg_match('/.*\.ibixiong(\.com)$/i', $url_parts['host'])) {
					$referer = $url;
				} else {
					$referer = DOMAIN;
				}
			} else {
				//$msg = "other ";
				$referer = DOMAIN;
			}
				
			$this->getView()->assign("title"," 精品阅读分享 - i比熊  ");	
			$this->getView()->assign("referer",$referer);	
			//$this->getView()->assign("msg",$msg);	
			$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/404.tpl");
		}*/
  
	}
}
