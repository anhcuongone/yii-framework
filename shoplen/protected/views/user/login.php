<div class="form">

<script type="text/javascript">
$(document).ready(function(){
	$("#log").click(function(){
		alert('Gia tri');
		$.ajax({
			url: '/shoplen/index.php/user/login',
			type: 'POST',
			data: {username:user, password:pass},
			success: function(data) {
			alert(data);
			}
			});
			});
});
</script>

<div style="margin: 200px;">
<form action="/shoplen/index.php/user/login" method="POST" >
	<table align="center"  width="20px" style="background: aqua;"> 
		<tr>
			<td>
			<label>Username:</label>
			</td>
			<td>
			<input type="text" name="username" id="username">
			</td>
		</tr>
		<tr>
			<td>
			<label>Password:</label>
			</td>
			<td>
			<input type="password" name="password" id="password">
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<input type="checkbox"> Ghi Nhớ đăng nhập lần sau.
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Đăng Nhập" name="submit"></td>
		</tr>
		<tr>
			<td colspan="2"><label style="color: red;"><?php  echo $result ?></label></td>
		</tr>
	</table>
	<div>
	
	</div>
</form>
</div>

