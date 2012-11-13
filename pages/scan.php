<form class="scan_form" id="code_form" method="post" action="" onsubmit="return checkCode(this.code.value)">
	<legend>
		Code
	</legend>
	<span>
		<div>
			<label for="session">Session </label>
			<select name="session" id="session">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
			</select>
		</div>
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
			var c = code;
			var session = document.getElementById('session').value;
			$.ajax({
				url : 'pages/check_code.php',
				type : 'GET',
				data : {
					'c' : code
				},
				success : function(data) {
					//alert(data);
					if (data == '0') {
						window.location = "index.php?r=enregistrer&c=" + c;
					} else {
						$("#response").html("<h2>OK</h2>");
						window.location = "index.php?r=pointer&code="+c+"&session="+session;
					}
				}
			});
			return false;
		}
	}
</script>