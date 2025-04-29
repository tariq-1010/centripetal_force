<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="js/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
	function swnw(){
		$("#ZXMCO70CC-MH370-JAJJFS-ISS-1_SAUCER").animate({ left: '1181px', top: '251px'}, 1010 , function(){
			$("#ZXMCO70CC-MH370-JAJJFS-ISS-1_SAUCER").animate({ left: '1089px', top: '332px'}, 1010 , function(){
				$("#ZXMCO70CC-MH370-JAJJFS-ISS-1_SAUCER").animate({ left: '-13px', top: '482px'}, 1010 , function(){
					$("#ZXMCO70CC-MH370-JAJJFS-ISS-1_SAUCER").animate({ left: '1131px', top: '185px'}, 1010 , function(){
						$("#ZXMCO70CC-MH370-JAJJFS-ISS-1_SAUCER").animate({ left: '1204px', top: '190px'}, 1010 , function(){
							recursion_point();
						});
					});
				});
			});
		});
	}
	function recursion_point() {
		swnw();
	}
	$(document).ready(function(){
		swnw();
	});
</script>

<style>
	body  {
			background-image:url(images/islands_siyal_1010.png);
			background-repeat:no-repeat;
    		background-size:100% 100vh;
			position: absolute;
	}
	.saucer {
		height: 25px;
		width: 26px;
		display: inline-block;
		float: left;
		top: 190px;
		left: 1204px;
		text-align: center;
		position: absolute;
		font-size: 46px;
		transform: rotate(360deg);
		color:#FF0000;
}
</style>
<title>Based on Natural Learning</title>
</head>

<body id="generic">
<span class="saucer" id="ZXMCO70CC-MH370-JAJJFS-ISS-1_SAUCER">&#x1F6F8;</span>
</body>
</html>