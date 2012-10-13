<form id="scan_form" method="post" action="" onsubmit="return checkCode(this.code.value)">
	<legend>
		Code
	</legend>
	<span>
		<input type="text" id="code" name="code"/>
		<input type="submit" id="ok" name="ok" value="Ok"/>
	</span>
</form>

<div id="response"></div>

<script type="text/javascript">
	function checkCode(code) {
		alert(code);
		if (code == '') {
			alert('Valeur');
			return false;
		} else {
			var c = code
			$.ajax({
				url: 'pages/check_code.php',
				type: 'GET',
				data: {'c': code},
				success: function(data){
					$('#response').html(data);
				}
			});
			return false;
		}
		
	}
</script>