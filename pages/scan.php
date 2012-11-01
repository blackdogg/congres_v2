<form class="scan_form" id="code_form" method="post" action="" onsubmit="return checkCode(this.code.value)">
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
		if (code == '') {
			alert('Veuillez rescanner le badge.');
			return false;
		} else {
			var c = code
			$.ajax({
				url: 'pages/check_code.php',
				type: 'GET',
				data: {'c': code},
				success: function(data){
					//alert(data);
					if(data=='0'){
						window.location = "index.php?r=enregistrer&c="+c;
					}else{
						$("#response").html("<h2>OK</h2>");
						window.location = "index.php";
					}
				}
			});
			return false;
		}
	}
</script>