<td valign="top" align="center" class="tdmain">
	<script type="text/javascript">
		function ckform(a){
			fn = document.getElementById('fullname');
			if(!fn.value){
				alert('Bạn phải điền thông tin họ và tên!');
			}
			mb = document.getElementById('mobile');
			if(!mb.value){
				alert('Bạn phải điền thông tin số điện thoại!');
			}	
			em = document.getElementById('email');
			if(!em.value){
				alert('Bạn phải điền thông tin email!');
			}				
		}			
	</script>
	<form action="index.php?mod=contact&act=xl_add" method="POST">
		<table>
			<tr>
				<td style="font-weight: bold;">Họ và tên:</td>
				<td><input type="text" id="fullname" name="fullname" value="" /> <b style="color: red;">*</b></td>
			</tr>		
			<tr>
				<td style="font-weight: bold;">Mobile:</td>
				<td><input type="text" id="mobile" name="mobile" value="" /><b style="color: red;">*</b></td>
			</tr>		
			<tr>
				<td style="font-weight: bold;">Email:</td>
				<td><input type="text" id="email" name="email" value="" /><b style="color: red;">*</b></td>
			</tr>		
			<tr>
				<td style="font-weight: bold;">Address:</td>
				<td><input type="text" id="address" name="address" value="" /></td>
			</tr>		
			<tr>
				<td colspan="2" style="font-weight: bold;">Nội dung liên hệ:</td>
				
			</tr>
			<tr>
				<td colspan="2" ><textarea class="ckeditor" name="content"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Chấp nhận" onmouseover="ckform()"/></td>				
			</tr>		
		</table>
	</form>
	</td>