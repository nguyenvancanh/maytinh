<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('main');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>
<body>
	<div id="container">
		<div id="header">
			<h1><span>May tinh don gian</span></h1>
		</div>
		<div id="content">
			<div id="maytinh">
				<form method="post">
					<fieldset>
						<div>
							<span class ="largefont" >Enter a:</span>
							<input type="text" id="soa" name="soa"></input>
						</div>
						<div>
							<span class ="largefont" >Enter b:</span>
							<input type="text" id="sob" name="sob"></input>
						</div>
						<div>
							<span class ="largefont" > Select </span>
							<select name="toantu[]" id="select">
								<option value="1">+</option>
								<option value="2">-</option>
								<option value="3">*</option>
								<option value="4">/</option>

							</select>
						</div>
						
						<div>
							<button type="submit">
								Ket Qua
							</button>
						</div>
						<div>
							<span class ="error"><?php echo $error; ?></span>
						</div>
						
						<div>
							<span class ="largefont">Ket qua phep tinh la: <?php echo "<p style='color:red'>".$ketqua."</p>";?></span>
						</div>
					</fieldset>
					

				</form>
			</div>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
</body>
</html>
