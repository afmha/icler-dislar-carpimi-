<?php

	if($_POST){
		
		if($_POST['s1'] || $_POST['s2'] || $_POST['s3'] || $_POST['s4']){
			$a = $_POST['s1'];
			$b = $_POST['s2'];
			$c = $_POST['s3'];
			$d = $_POST['s4'];
			
			if($a == '?'){
				$h1 = $b*$c;
				$h2 = $h1/$d;
				echo $h2;
			}else if($b == '?'){
				$h1 = $a*$d;
				$h2 = $h1/$c;
				echo $h2;
			}else if($c == '?'){
				$h1 = $a*$d;
				$h2 = $h1/$b;
				echo $h2;
			}else if($d == '?'){
				$h1 = $b*$c;
				$h2 = $h1/$a;
				echo $h2;
			}else{
				die('Soru işareti konulan bir yer bulunamadı.<a href="index.php">Geri</a>');
			}
			
		}else{
			die('Boş bırakmayınız.<a href="index.php">Geri</a>');
		}
		
	}
	else
	{
		echo '
		<i>Not: Lütfen bulmak istediğiniz sayının yerine ? işareti koyun.</i>
			<form action="" method="POST">
				<table>
					<tr>
						<td><input type="text" name="s1"></td>
						<td><input type="text" name="s2"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><input type="text" name="s3"></td>
						<td><input type="text" name="s4"></td>
					</tr>
				</table>
				<input type="submit" name="hesapla" value="hesapla">
			</form>
		';
	}

?>
