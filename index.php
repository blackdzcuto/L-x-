<?php

$name1 = substr($arr[0], 0, strlen($arr[0]) - 9);
$name = ucwords(str_replace("___"," ",$name1)); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta property="og:image" content="https://199z.net/asset/image/gif/118.gif">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://199z.net/asset/image/gif/118.gif" type="image/x-icon"/>
	<style>
		body {
			background-color: #9e0b0f;
			background-image: url(/img/1704362246169-1.gif);
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			background-position-y: bottom;
			margin: 0;
			padding: 0;
			font-family: 'Arial', sans-serif;
			color: #fff;
		}

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    height: 100vh;
}

.greeting {
    text-align: center;
    padding: 20px;
    margin: 6px;
    border-radius: 10px;
    background-image: url(https://199z.net/asset/image/gif/118.gif);
    background-repeat: no-repeat;
    background-size: auto;
    background-position: center;
    background-position-y: 10px;
    background-color: white;
    box-shadow: 0 0 13px 1px #ff7373;
    max-width: 388px;
    color: #873737;
}

input, select {
    display: inline-block;
    margin-bottom: 13px;
    border: 0;
    background: #e9e9e9;
    padding: 10px 13px;
    border-radius: 4px;
    outline: none;
}

	.buttons {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row;
}
.buttons > div {
    display: flex;
    justify-content: center;
    text-align: center;
    width: 100%;
}
		button {
			padding: 12px 18px;
			margin: 0 10px;
			font-size: 16px;
			cursor: pointer;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			transition: transform 1s ease-in-out;
			text-align: center;
			border: 1px px solid white;
			box-shadow: 0 0 19px 9px white;
		}



		#noBtn {
			background-color: #120032;
		}
		@keyframes multiBlink {
			0% {
				color: #ff0000;
			}
			20% {
				color: #ff6600;
			}
			40% {
				color: #ffff00;
			}
			60% {
				color: #00ccff; 
			}
			80% {
				color: #00ff00;
			}
			100% {
				color: #ff0000; 
			}
		}

h1 {
    font-size: 36px;
    text-align: center;
    margin: 50px 0 20px 0;
    padding-bottom: 28px;
    border-bottom: 1px solid;
    animation: multiBlink 1s infinite;
}

	</style>
	<title>Quà Lì Xì Cho <?php echo $name ?></title>
</head>
<body>
    
	<div class="container">
	    <center style="display:none"><audio id="myAudio" controls autoplay>
    <source  src="/file/ngay-xuan-long-phung-sum-vay.mp3" >
</audio></center>
		<div class="greeting" id="main" >
			<h1>Chào <span id="name"><?php echo $name ?></span>, đến năm mới rồi. <?php echo $name ?> có muốn nhận lì xì không?</h1>
			<div class="group">
			    <select id="nganHang" name="nganHang">
			        
    <option value="vietcombank">Chọn ngân hàng</option>
    <option value="vietcombank">Vietcombank (VCB)</option>
    <option value="techcombank">Techcombank (TCB)</option>
    <option value="bidv">BIDV</option>
    <option value="acb">ACB</option>
    <option value="vib">VIB</option>
    <option value="mbbank">MB Bank</option>
    <option value="vpbank">VPBank</option>
    <option value="shb">SHB</option>
    <option value="agribank">Agribank</option>
    <option value="eximbank">Eximbank</option>
    <option value="scb">SCB</option>
    <option value="hdbank">HDBank</option>
    <option value="tpbank">TPBank</option>
</select>
			    <input type="number" id="stk" placeholder="Nhập STK nhận lì xì...">
			</div>
			<div class="buttons">
			    <div>
				<button id="yesBtn">NHẬN LÌ XÌ</button>
				</div>
				<div><button id="noBtn">KHÔNG NHẬN</button>
				</div>
			</div>
		</div>
	</div>
	<script>

document.addEventListener('click', function() {
    var audio = document.getElementById('myAudio');
    if (audio.paused) {
        audio.play();
    }
});

		document.getElementById('yesBtn').addEventListener('mouseenter', function() {
			moveButtonRandomly(this);
		});

		document.getElementById('yesBtn').addEventListener('click', function() {
			moveButtonRandomly(this);
		});
		document.getElementById('noBtn').addEventListener('click', function() {
			document.getElementById('main').innerHTML = "<br><br><br>Dù rất muốn lì xì, nhưng ép nhiều quá thì ngượng ngùng đôi bên.<br><br>Nhân dịp năm mới, Chúc <?php echo $name ?> cùng gia đình nhiều sức khỏe, gặp may mắn trong cuộc sống, và thuận lợi trong công việc. <h2>CHÚC MỪNG NĂM MỚI</h2>";
		});

		function moveButtonRandomly(button) {
			const newX = Math.random() * (window.innerWidth - button.clientWidth);
			const newY = Math.random() * (window.innerHeight - button.clientHeight);
			      const distance = Math.sqrt(Math.pow(newX - noBtn.offsetLeft, 2) + Math.pow(newY - noBtn.offsetTop, 2));
      if (distance < 100) {
        moveButtonRandomly(button);
        return;
      }

			button.style.position = 'absolute';
			button.style.left = newX + 'px';
			button.style.top = newY + 'px';
		}

	</script>
</body>
</html>
	
