{{include file="../public/header.tpl"}}
<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/morecity.js"></script>
{{include file="../public/headnavbar.tpl"}}
{{include file="../public/user_leftbar.tpl"}}
				<div class="span7 content">
					<div class="row-fluid">
						<h4>个人资料</h4>
						<hr class="hr">
					</div>
					<div class="row-fluid">
					<form class="form-horizontal" action="{{$smarty.const.DOMAIN}}/user_info/post" method="post">
						<div class="control-group">
						<label class="control-label" for="nickname">昵称：</label>
						<div class="controls">
						  <input type="text" name="nickname" id="inputNickname" placeholder="昵称" value="{{$user_info.user_nickname}}">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="inputSex">性别：</label>
						<div class="controls">
							<label class="radio inline">
								<input type="radio" name="radiosSex" id="male" value="1" {{if $user_info.user_sex == 1 || $user_info.user_sex == 0 }}checked{{/if}}>男
							</label>	
							<label class="radio inline">
								<input type="radio" name="radiosSex" id="female" value="2" {{if $user_info.user_sex == 2}}checked{{/if}}>女
							</label>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="inputPassword">居住地：</label>
						<div class="controls">
							<select  name="ddlProvince" id="ddlProvince" onchange="selectMoreCity(this)">
								<option selected value="">省份</option>
							</select>
							<select name="ddlCity" id="ddlCity">
								<option selected value="">城市</option>
							</select>
							<script type="text/javascript" language ="javascript"><!--
								//BindProvince("{{$user_info.province_name}}");//只初始化省份
								BindCity("{{$user_info.city_name}}");//初始化，并选中洛阳市和洛阳市所在的省
							</script>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="inputSex">性取向：</label>
						<div class="controls">
							<label class="checkbox inline">
								<input type="checkbox" name="checkboxSexMale" id="male" value="1" {{if $user_info.user_sexual_orientation == 1 || $user_info.user_sexual_orientation == 3}}checked{{/if}}>男
							</label>	
							<label class="checkbox inline">
								<input type="checkbox" name="checkboxSexFemale" id="female" value="2" {{if $user_info.user_sexual_orientation == 2 || $user_info.user_sexual_orientation == 3}}checked{{/if}}>女
							</label>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="QQ">QQ：</label>
						<div class="controls">
						  <input type="text" name="QQ" id="inputQQ" placeholder="QQ" value="{{$user_info.user_qq}}">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="WeiBo">微博：</label>
						<div class="controls">
						  <input type="text" name="weibo" id="WeiBo" placeholder="微博" value="{{$user_info.user_weibo}}">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="inputPresentation">一句话介绍：</label>
						<div class="controls">
						  <textarea class="input-block-level" cols="40" rows="3" name="pesentation" id="inputPresentation"  {{if $user_info.user_description}} {{else}}placeholder="介绍自己的特长吧，亲"{{/if}} tabindex="1" >{{if $user_info.user_description}} {{$user_info.user_description}}{{/if}}</textarea>
						</div>
					  </div>
					  
					  <div class="control-group">
						<div class="controls">

						  
						  <button type="submit" class="btn btn-primary" data-loading-text="保存中...">保存</button>
						  <!--button type="submit" class="btn">重置</button-->
						</div>
					  </div>
					</form>	
					</div>
				</div>
{{include file="../public/user_rightbar.tpl"}}
{{include file="../public/footer.tpl"}}	
