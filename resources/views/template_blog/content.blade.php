<!-- SECTION -->
@include('template_blog.head')
	<div class="section">
		<!-- container -->
		<div class="container">
						<!-- row -->
			<div id="hot-post" class="row hot-post">
				
				@yield('isi')
				
				@include('template_blog.widget')
	

		</div>
	</div>
	
	@include('template_blog.footer')