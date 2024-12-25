<x-app-layout meta-title="Page Not Found | NeCo EDC " meta-description="">
		<!-- Start page_not_found -->
		<section class="page_not_found">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center wow fadeIn">
						<img src="{{ asset('assets/img/404.svg')}}" alt="404"> 
						<h2>Page not found: /error</h2>
						<p>Please try searching for some other page.</p>
						<a href="{{route('home')}}" class="bg_btn bt">Back To Home</a>
					</div> <!-- End Col -->

				</div>
			</div>
		</section>
		<!-- End page_not_found -->

</x-app-layout>

