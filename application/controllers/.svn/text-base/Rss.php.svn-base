<?php
/**
*	Rss生成页面
**/
class RssController extends Yaf_Controller_Abstract {

	public function indexAction() {
		
		$rssmodel = new RssModel();
		
		$posts = $rssmodel->get_posts();
		
		$now = date("D, d M Y H:i:s T");
		
		$output = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
            <rss version=\"2.0\">
                <channel>
                    <title>RSS - i比熊</title>
                    <link>". DOMAIN ."/RSS/RSS.php</link>
                    <description>专注于精品阅读</description>
                    <language>zh-cn</language>
                    <pubDate>$now</pubDate>
                    <lastBuildDate>$now</lastBuildDate>
                    <docs>". DOMAIN ."</docs>
                    <managingEditor>ibixiong@ibixiong.com</managingEditor>
                    <webMaster>ibixiong@ibixiong.com</webMaster>
            ";
		foreach ($posts as $post) {
			//$post['post_content'] = strip_tags($post['post_content']);
			//$post['post_content'] = mb_strcut($post['post_content'],0,150,'utf-8');
			//$post['post_content'] = strip_tags($post['post_content']);
			$output .= "<item>
							<title>".htmlspecialchars($post['post_title'])."</title>
							<link>". DOMAIN ."/content/view/id/" .htmlspecialchars($post['post_id'])."</link>
							<description>".htmlspecialchars($post['post_content'])."</description>
						</item>";
		}
		$output .= "</channel>";
		$output .= "</rss>";
		//$output .= "</xml>";
		//$xml = simplexml_load_string($output);
		
		//print_r($xml);
		header("Content-type: text/xml");
		echo $output;
	}
}
?>