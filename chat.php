
<?php
				$allmsg = $bdd->Query('SELECT * FROM user ORDER BY ID DESC LIMIT 0,25');
				while($msg = $allmsg->Fetch())
				{
				?>
				<b><?php echo $msg['pseudo'] ?> :</b><?php echo $msg['messages'] ?> <br />

				<?php
				}

			?>