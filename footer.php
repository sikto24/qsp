
				</div>
			</div>
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<?php if(is_active_sidebar( 'footer' )): ?>

				<div class="row">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>

			<?php endif; ?>
			<div class="row">
				<div class="col">
					<div class="copy-right">
						&copy; <?php echo date('Y'); ?>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
