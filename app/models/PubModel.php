<?php
class PubModel{

	public static function make_li($index,$name){
		return sprintf("<li class='default-li' id='1-%d'>%s</li>",$index,$name);
	}
	
	public static function make_li_delete($index,$name){
		return sprintf("<li class='default-li' id='1-%d'>%s</li><div>删除</div>",$index,$name);
	}
	
	public static function make_content($index,$name,$time,$iframe){
		$ret = "";
		$ret = $ret.sprintf("<div class='item_content showpart' id='content-1-%d'>",$index);
		$ret = $ret.sprintf("<h3>活动简介</h3><p>名称:%s</p><p>时间:%s</p>",$name,$time);
		$ret = $ret.sprintf("<iframe src=%s",$iframe)." frameborder='0' id='frame_con' class='cke_wysiwyg_frame cke_reset' style='width:100%;height:500px;background-color:rgb(247, 247, 247);' scrolling=no></iframe>";
		$ret = $ret."<script type='text/javascript'>$('#frame_con').load(function(){var thisheight = $(this).contents().find('body').height()+30;$(this).height(thisheight < 500 ? 500 : thisheight);});</script></div>";
		return $ret;
			
	}
		
}