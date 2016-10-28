				<div class="col-sm-3 side-bar col-sm-offset-1">
					<div class="side-about">
					<h3>About</h3>
					<p>This blog provides you with all you need about PHP and makes you have apportunity to join us to work on that blogger if you deserve that. Just be optimistic and you will get it sooner or later.Thanks</p>
					</div>
					<div class="side-cat">
					<h3>Categories</h3>
					<ul>
						<?php while($row = $cat->fetch_assoc()):?>
							<li><a href='posts.php?cat=<?=$row['id']?>'><?= $row['name']; ?></a></li>
					  <?php endwhile?>
					<ul>
					</div>
				</div><!--End side col-->
			</div><!--End row-->
		</div>
		<footer>
		<p class="text-center">PHP Lovers Blog &copy; 2015 All rights saved.</p>
		</footer>
		<script src="js/jquery-1.11.js"></script>
		<script src="js/bootstrap.js" ></script>
	</body>
</html>
