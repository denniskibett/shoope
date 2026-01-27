<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link href="./assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
	<link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css" />
	<link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico" />

	<!-- Libs CSS -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css" />
	<link rel="stylesheet" href="./assets/libs/simplebar/dist/simplebar.min.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="./assets/css/theme.min.css">
	<!-- Analytics Code -->

	<title>Free Freshcart Tailwind Ecommerce HTML Template</title>
</head>

<body>

	@include('partial.header')

	<!-- Modal -->
	
	@include('welcome.modal')

	<!-- Shop Cart -->

	<div class="offcanvas offcanvas-right" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header border-b">
			<div>
				<h5 id="offcanvasRightLabel">Shop Cart</h5>
				<span>Location in 382480</span>
			</div>
			<button type="button" class="btn-close text-inherit" data-bs-dismiss="offcanvas" aria-label="Close">
				<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x text-gray-700" width="24"
					height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
					stroke-linecap="round" stroke-linejoin="round">
					<path stroke="none" d="M0 0h24v24H0z" fill="none" />
					<path d="M18 6l-12 12" />
					<path d="M6 6l12 12" />
				</svg>
			</button>
		</div>
		<div class="offcanvas-body p-4">
			<div>
				<!-- alert -->
				<div class="bg-red-500 bg-opacity-25 text-red-800 mb-3 rounded-lg p-4" role="alert">
					You’ve got FREE delivery. Start
					<a href="#!" class="alert-link">checkout now!</a>
				</div>
				<ul class="list-none">
					<!-- list group -->
					<li class="py-3 border-t">
						<div class="flex items-center">
							<div class="w-1/2 md:w-1/2 lg:w-3/5">
								<div class="flex">
									<img src="./assets/images/products/product-img-1.jpg" alt="Ecommerce"
										class="w-16 h-16" />
									<div class="ml-3">
										<!-- title -->
										<a href="#!" class="text-inherit">
											<h6>Haldiram's Sev Bhujia</h6>
										</a>
										<span><small class="text-gray-500">.98 / lb</small></span>
										<!-- text -->
										<div class="mt-2 small leading-none">
											<a href="#!" class="text-green-600 flex items-center">
												<span class="mr-1 align-text-bottom">
													<svg xmlns="http://www.w3.org/2000/svg"
														class="icon icon-tabler icon-tabler-trash" width="14"
														height="14" viewBox="0 0 24 24" stroke-width="2"
														stroke="currentColor" fill="none" stroke-linecap="round"
														stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none" />
														<path d="M4 7l16 0" />
														<path d="M10 11l0 6" />
														<path d="M14 11l0 6" />
														<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
														<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
													</svg>
												</span>
												<span class="text-gray-500 text-sm">Remove</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- input group -->
							<div class="w-1/3 md:w-1/4 lg:w-1/5">
								<!-- input -->
								<div class="input-group input-spinner rounded-lg flex justify-between items-center">
									<input type="button" value="-"
										class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
										data-field="quantity" />
									<input type="number" step="1" max="10" value="1" name="quantity"
										class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
									<input type="button" value="+"
										class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
										data-field="quantity" />
								</div>
							</div>
							<!-- price -->
							<div class="w-1/5 text-center md:w-1/5">
								<span class="font-bold text-gray-800">$5.00</span>
							</div>
						</div>
					</li>
					<!-- list group -->
					<li class="py-3 border-t">
						<div class="flex items-center">
							<div class="w-1/2 md:w-1/2 lg:w-3/5">
								<div class="flex">
									<img src="./assets/images/products/product-img-2.jpg" alt="Ecommerce"
										class="w-16 h-16" />
									<div class="ml-3">
										<a href="#!" class="text-inherit">
											<h6>NutriChoice Digestive</h6>
										</a>
										<span><small class="text-gray-500">250g</small></span>
										<!-- text -->
										<div class="mt-2 small leading-none">
											<a href="#!" class="text-green-600 flex items-center">
												<span class="mr-1 align-text-bottom">
													<svg xmlns="http://www.w3.org/2000/svg"
														class="icon icon-tabler icon-tabler-trash" width="14"
														height="14" viewBox="0 0 24 24" stroke-width="2"
														stroke="currentColor" fill="none" stroke-linecap="round"
														stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none" />
														<path d="M4 7l16 0" />
														<path d="M10 11l0 6" />
														<path d="M14 11l0 6" />
														<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
														<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
													</svg>
												</span>
												<span class="text-gray-500 text-sm">Remove</span>
											</a>
										</div>
									</div>
								</div>
							</div>

							<!-- input group -->
							<div class="w-1/3 md:w-1/4 lg:w-1/5">
								<!-- input -->
								<div class="input-group input-spinner rounded-lg flex justify-between items-center">
									<input type="button" value="-"
										class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
										data-field="quantity" />
									<input type="number" step="1" max="10" value="1" name="quantity"
										class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
									<input type="button" value="+"
										class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
										data-field="quantity" />
								</div>
							</div>
							<!-- price -->
							<div class="w-1/5 text-center md:w-1/5">
								<span class="font-bold text-red-600">$20.00</span>
								<div class="line-through text-gray-500 small">$26.00</div>
							</div>
						</div>
					</li>
					<!-- list group -->
					<li class="py-3 border-t">
						<div class="flex items-center">
							<div class="w-1/2 md:w-1/2 lg:w-3/5">
								<div class="flex">
									<img src="./assets/images/products/product-img-3.jpg" alt="Ecommerce"
										class="w-16 h-16" />
									<div class="ml-3">
										<!-- title -->
										<a href="#!" class="text-inherit">
											<h6>Cadbury 5 Star Chocolate</h6>
										</a>
										<span><small class="text-gray-500">1 kg</small></span>
										<!-- text -->
										<div class="mt-2 small leading-none">
											<a href="#!" class="text-green-600 flex items-center">
												<span class="mr-1 align-text-bottom">
													<svg xmlns="http://www.w3.org/2000/svg"
														class="icon icon-tabler icon-tabler-trash" width="14"
														height="14" viewBox="0 0 24 24" stroke-width="2"
														stroke="currentColor" fill="none" stroke-linecap="round"
														stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none" />
														<path d="M4 7l16 0" />
														<path d="M10 11l0 6" />
														<path d="M14 11l0 6" />
														<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
														<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
													</svg>
												</span>
												<span class="text-gray-500 text-sm">Remove</span>
											</a>
										</div>
									</div>
								</div>
							</div>

							<!-- input group -->
							<div class="w-1/3 md:w-1/4 lg:w-1/5">
								<!-- input -->
								<div class="input-group input-spinner rounded-lg flex justify-between items-center">
									<input type="button" value="-"
										class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
										data-field="quantity" />
									<input type="number" step="1" max="10" value="1" name="quantity"
										class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
									<input type="button" value="+"
										class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
										data-field="quantity" />
								</div>
							</div>
							<!-- price -->
							<div class="w-1/5 text-center md:w-1/5">
								<span class="font-bold text-gray-800">$15.00</span>
								<div class="line-through text-gray-500 small">$20.00</div>
							</div>
						</div>
					</li>
					<!-- list group -->
					<li class="py-3 border-t">
						<div class="flex items-center">
							<div class="w-1/2 md:w-1/2 lg:w-3/5">
								<div class="flex">
									<img src="./assets/images/products/product-img-4.jpg" alt="Ecommerce"
										class="w-16 h-16" />
									<div class="ml-3">
										<!-- title -->
										<!-- title -->
										<a href="#!" class="text-inherit">
											<h6>Onion Flavour Potato</h6>
										</a>
										<span><small class="text-gray-500">250g</small></span>
										<!-- text -->
										<div class="mt-2 small leading-none">
											<a href="#!" class="text-green-600 flex items-center">
												<span class="mr-1 align-text-bottom">
													<svg xmlns="http://www.w3.org/2000/svg"
														class="icon icon-tabler icon-tabler-trash" width="14"
														height="14" viewBox="0 0 24 24" stroke-width="2"
														stroke="currentColor" fill="none" stroke-linecap="round"
														stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none" />
														<path d="M4 7l16 0" />
														<path d="M10 11l0 6" />
														<path d="M14 11l0 6" />
														<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
														<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
													</svg>
												</span>
												<span class="text-gray-500 text-sm">Remove</span>
											</a>
										</div>
									</div>
								</div>
							</div>

							<!-- input group -->
							<div class="w-1/3 md:w-1/4 lg:w-1/5">
								<!-- input -->
								<div class="input-group input-spinner rounded-lg flex justify-between items-center">
									<input type="button" value="-"
										class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
										data-field="quantity" />
									<input type="number" step="1" max="10" value="1" name="quantity"
										class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
									<input type="button" value="+"
										class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
										data-field="quantity" />
								</div>
							</div>
							<!-- price -->
							<div class="w-1/5 text-center md:w-1/5">
								<span class="font-bold text-gray-800">$15.00</span>
								<div class="line-through text-gray-500 small">$20.00</div>
							</div>
						</div>
					</li>
					<!-- list group -->
					<li class="py-3 border-t border-b">
						<div class="flex items-center">
							<div class="w-1/2 md:w-1/2 lg:w-3/5">
								<div class="flex">
									<img src="./assets/images/products/product-img-5.jpg" alt="Ecommerce"
										class="w-16 h-16" />
									<div class="ml-3">
										<!-- title -->
										<a href="#!" class="text-inherit">
											<h6>Salted Instant Popcorn</h6>
										</a>
										<span><small class="text-gray-500">100g</small></span>
										<!-- text -->
										<div class="mt-2 small leading-none">
											<a href="#!" class="text-green-600 flex items-center">
												<span class="mr-1 align-text-bottom">
													<svg xmlns="http://www.w3.org/2000/svg"
														class="icon icon-tabler icon-tabler-trash" width="14"
														height="14" viewBox="0 0 24 24" stroke-width="2"
														stroke="currentColor" fill="none" stroke-linecap="round"
														stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none" />
														<path d="M4 7l16 0" />
														<path d="M10 11l0 6" />
														<path d="M14 11l0 6" />
														<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
														<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
													</svg>
												</span>
												<span class="text-gray-500 text-sm">Remove</span>
											</a>
										</div>
									</div>
								</div>
							</div>

							<!-- input group -->
							<div class="w-1/3 md:w-1/4 lg:w-1/5">
								<!-- input -->
								<div class="input-group input-spinner rounded-lg flex justify-between items-center">
									<input type="button" value="-"
										class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
										data-field="quantity" />
									<input type="number" step="1" max="10" value="1" name="quantity"
										class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
									<input type="button" value="+"
										class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
										data-field="quantity" />
								</div>
							</div>
							<!-- price -->
							<div class="w-1/5 text-center md:w-1/5">
								<span class="font-bold text-gray-800">$15.00</span>
								<div class="line-through text-gray-500 small">$25.00</div>
							</div>
						</div>
					</li>
				</ul>
				<!-- btn -->
				<div class="flex justify-between mt-4">
					<a href="#!"
						class="btn inline-flex items-center gap-x-2 bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
						Continue Shopping
					</a>
					<a href="#!"
						class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
						Update Cart
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body p-6">
					<div class="flex justify-between items-start">
						<div>
							<h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
							<p class="text-sm">Enter your address and we will specify the offer you area.</p>
						</div>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x text-gray-700"
								width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
								fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<path d="M18 6l-12 12" />
								<path d="M6 6l12 12" />
							</svg>
						</button>
					</div>
					<div class="my-5">
						<label for="searhNavbarSecond" class="invisible hidden">Search</label>
						<input
							class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
							type="search" placeholder="Search for products" id="searhNavbarSecond" />
					</div>
					<div class="flex justify-between items-center mb-2">
						<h6>Select Location</h6>
						<a href="#" class="btn btn-outline-gray-400 text-gray-500 btn-sm">Clear All</a>
					</div>
					<div>
						<div data-simplebar style="height: 300px">
							<div class="list-none">
								<a href="#"
									class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3 active active:bg-gray-100 bg-gray-100">
									<span>Alabama</span>
									<span>Min:$20</span>
								</a>
								<a href="#"
									class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
									<span>Alaska</span>
									<span>Min:$30</span>
								</a>
								<a href="#"
									class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
									<span>Arizona</span>
									<span>Min:$50</span>
								</a>
								<a href="#"
									class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
									<span>California</span>
									<span>Min:$29</span>
								</a>
								<a href="#"
									class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
									<span>Colorado</span>
									<span>Min:$80</span>
								</a>
								<a href="#"
									class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
									<span>Florida</span>
									<span>Min:$90</span>
								</a>
								<a href="#"
									class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
									<span>Arizona</span>
									<span>Min:$50</span>
								</a>
								<a href="#"
									class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
									<span>California</span>
									<span>Min:$29</span>
								</a>
								<a href="#"
									class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
									<span>Colorado</span>
									<span>Min:$80</span>
								</a>
								<a href="#"
									class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
									<span>Florida</span>
									<span>Min:$90</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<main>
		@include('welcome.slider')

		@include('partial.featured')

		@include('partial.ads')

		@include('partial.popularproducts')

		@include('partial.dailybestsales')

		@include('partial.pros')
	</main>

	@include('partial.footer')
	
	<!-- Modal -->
	<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered lg:min-w-[1140px]">
			<div class="modal-content">
				<div class="modal-body p-8">
					<div class="absolute top-0 right-0 p-3">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x text-gray-700"
								width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
								fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<path d="M18 6l-12 12" />
								<path d="M6 6l12 12" />
							</svg>
						</button>
					</div>
					<div class="flex flex-wrap">
						<div class="md:w-1/2">
							<!-- img slide -->
							<div class="product productModal" id="productModal">
								<div class="zoom" onmousemove="zoom(event)"
									style="background-image: url(./assets/images/products/product-single-img-1.jpg)">
									<!-- img -->
									<!-- img -->
									<img src="./assets/images/products/product-single-img-1.jpg" alt="" />
								</div>
								<div>
									<div class="zoom" onmousemove="zoom(event)"
										style="background-image: url(./assets/images/products/product-single-img-2.jpg)">
										<!-- img -->
										<img src="./assets/images/products/product-single-img-2.jpg" alt="" />
									</div>
								</div>
								<div>
									<div class="zoom" onmousemove="zoom(event)"
										style="background-image: url(./assets/images/products/product-single-img-3.jpg)">
										<!-- img -->
										<img src="./assets/images/products/product-single-img-3.jpg" alt="" />
									</div>
								</div>
								<div>
									<div class="zoom" onmousemove="zoom(event)"
										style="background-image: url(./assets/images/products/product-single-img-4.jpg)">
										<!-- img -->
										<img src="./assets/images/products/product-single-img-4.jpg" alt="" />
									</div>
								</div>
							</div>
							<!-- product tools -->
							<div class="product-tools">
								<div class="thumbnails flex gap-3" id="productModalThumbnails">
									<div class="w-1/4">
										<div class="thumbnails-img">
											<!-- img -->
											<img src="./assets/images/products/product-single-img-1.jpg" alt="" />
										</div>
									</div>
									<div class="w-1/4">
										<div class="thumbnails-img">
											<!-- img -->
											<img src="./assets/images/products/product-single-img-2.jpg" alt="" />
										</div>
									</div>
									<div class="w-1/4">
										<div class="thumbnails-img">
											<!-- img -->
											<img src="./assets/images/products/product-single-img-3.jpg" alt="" />
										</div>
									</div>
									<div class="w-1/4">
										<div class="thumbnails-img">
											<!-- img -->
											<img src="./assets/images/products/product-single-img-4.jpg" alt="" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="md:w-1/2 pr-4 pl-4">
							<div class="lg:pl-10 mt-6 md:mt-0">
								<div class="flex flex-col gap-4">
									<!-- content -->
									<a href="#!" class="block text-green-600">Bakery Biscuits</a>
									<!-- heading -->
									<h1>Napolitanke Ljesnjak</h1>
									<div class="flex flex-col gap-2">
										<div class="flex items-center">
											<!-- rating -->
											<!-- rating -->
											<small class="text-yellow-500 inline-flex items-center">
												<svg xmlns="http://www.w3.org/2000/svg"
													class="icon icon-tabler icon-tabler-star-filled" width="14"
													height="14" viewBox="0 0 24 24" stroke-width="2"
													stroke="currentColor" fill="none" stroke-linecap="round"
													stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
													<path
														d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
														stroke-width="0" fill="currentColor"></path>
												</svg>
												<svg xmlns="http://www.w3.org/2000/svg"
													class="icon icon-tabler icon-tabler-star-filled" width="14"
													height="14" viewBox="0 0 24 24" stroke-width="2"
													stroke="currentColor" fill="none" stroke-linecap="round"
													stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
													<path
														d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
														stroke-width="0" fill="currentColor"></path>
												</svg>
												<svg xmlns="http://www.w3.org/2000/svg"
													class="icon icon-tabler icon-tabler-star-filled" width="14"
													height="14" viewBox="0 0 24 24" stroke-width="2"
													stroke="currentColor" fill="none" stroke-linecap="round"
													stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
													<path
														d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
														stroke-width="0" fill="currentColor"></path>
												</svg>
												<svg xmlns="http://www.w3.org/2000/svg"
													class="icon icon-tabler icon-tabler-star-filled" width="14"
													height="14" viewBox="0 0 24 24" stroke-width="2"
													stroke="currentColor" fill="none" stroke-linecap="round"
													stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
													<path
														d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
														stroke-width="0" fill="currentColor"></path>
												</svg>
												<svg xmlns="http://www.w3.org/2000/svg"
													class="icon icon-tabler icon-tabler-star-filled" width="14"
													height="14" viewBox="0 0 24 24" stroke-width="2"
													stroke="currentColor" fill="none" stroke-linecap="round"
													stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
													<path
														d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
														stroke-width="0" fill="currentColor"></path>
												</svg>
											</small>
											<a href="#" class="text-green-600">(30 reviews)</a>
										</div>
										<div class="text-md">
											<span class="text-gray-900 font-semibold">$18</span>
											<span class="line-through text-gray-500">$24</span>

											<span><small class="text-red-600">26% Off</small></span>
										</div>
									</div>
									<!-- hr -->
									<div class="flex flex-col gap-6">
										<hr />
										<div>
											<button type="button"
												class="btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
												250g
											</button>
											<!-- btn -->
											<button type="button"
												class="btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
												500g
											</button>
											<!-- btn -->
											<button type="button"
												class="btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
												1kg
											</button>
										</div>
										<div>
											<!-- input -->
											<div class="w-1/3 md:w-1/4 lg:w-1/5">
												<!-- input -->
												<div
													class="input-group input-spinner rounded-lg flex justify-between items-center">
													<input type="button" value="-"
														class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
														data-field="quantity" />
													<input type="number" step="1" max="10" value="1" name="quantity"
														class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
													<input type="button" value="+"
														class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
														data-field="quantity" />
												</div>
											</div>
										</div>
										<div class="flex flex-wrap justify-start gap-2 items-center">
											<div class="lg:w-1/3 md:w-2/5 w-full grid">
												<!-- button -->
												<!-- btn -->
												<button type="button"
													class="btn bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 justify-center">
													<svg xmlns="http://www.w3.org/2000/svg"
														class="icon icon-tabler icon-tabler-plus mr-2" width="12"
														height="12" viewBox="0 0 24 24" stroke-width="3"
														stroke="currentColor" fill="none" stroke-linecap="round"
														stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
														<path d="M12 5l0 14"></path>
														<path d="M5 12l14 0"></path>
													</svg>
													Add to cart
												</button>
											</div>
											<div class="md:w-1/3 w-full">
												<!-- btn -->
												<a href="#"
													class="mr-1 btn inline-flex items-center gap-x-2 px-0 h-10 w-10 justify-center bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
													<svg xmlns="http://www.w3.org/2000/svg"
														class="icon icon-tabler icon-tabler-arrows-exchange" width="20"
														height="20" viewBox="0 0 24 24" stroke-width="2"
														stroke="currentColor" fill="none" stroke-linecap="round"
														stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
														<path d="M7 10h14l-4 -4"></path>
														<path d="M17 14h-14l4 4"></path>
													</svg>
												</a>
												<a href="#"
													class="btn inline-flex items-center gap-x-2 px-0 h-10 w-10 justify-center bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
													<svg xmlns="http://www.w3.org/2000/svg"
														class="icon icon-tabler icon-tabler-heart" width="20"
														height="20" viewBox="0 0 24 24" stroke-width="2"
														stroke="currentColor" fill="none" stroke-linecap="round"
														stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none" />
														<path
															d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
													</svg>
												</a>
											</div>
										</div>
										<!-- hr -->
										<hr />
									</div>
									<div>
										<!-- table -->
										<table class="text-left w-full">
											<tbody>
												<tr>
													<td class="px-6 py-3">Product Code:</td>
													<td class="px-6 py-3">FBB00255</td>
												</tr>
												<tr>
													<td class="px-6 py-3">Availability:</td>
													<td class="px-6 py-3">In Stock</td>
												</tr>
												<tr>
													<td class="px-6 py-3">Type:</td>
													<td class="px-6 py-3">Fruits</td>
												</tr>
												<tr>
													<td class="px-6 py-3">Shipping:</td>
													<td class="px-6 py-3">
														<small>
															01 day shipping.
															<span class="text-gray-700">( Free pickup today)</span>
														</small>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div>
										<!-- dropdown -->
										<div class="relative">
											<a class="dropdown-toggle btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
												href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												Share
											</a>

											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="#">
														<svg xmlns="http://www.w3.org/2000/svg"
															class="icon icon-tabler icon-tabler-brand-facebook inline-block"
															width="18" height="18" viewBox="0 0 24 24" stroke-width="2"
															stroke="currentColor" fill="none" stroke-linecap="round"
															stroke-linejoin="round">
															<path stroke="none" d="M0 0h24v24H0z" fill="none" />
															<path
																d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
														</svg>
														Facebook
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														<svg xmlns="http://www.w3.org/2000/svg"
															class="icon icon-tabler icon-tabler-brand-x" width="18"
															height="18" viewBox="0 0 24 24" stroke-width="2"
															stroke="currentColor" fill="none" stroke-linecap="round"
															stroke-linejoin="round">
															<path stroke="none" d="M0 0h24v24H0z" fill="none" />
															<path d="M4 4l11.733 16h4.267l-11.733 -16z" />
															<path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
														</svg>
														Twitter
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														<svg xmlns="http://www.w3.org/2000/svg"
															class="icon icon-tabler icon-tabler-brand-instagram"
															width="18" height="18" viewBox="0 0 24 24" stroke-width="2"
															stroke="currentColor" fill="none" stroke-linecap="round"
															stroke-linejoin="round">
															<path stroke="none" d="M0 0h24v24H0z" fill="none" />
															<path
																d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
															<path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
															<path d="M16.5 7.5l0 .01" />
														</svg>
														Instagram
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Libs JS -->
	<script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>

	<!-- Theme JS -->

	<!-- build:js ./assets/js/theme.min.js -->
	<script src="./assets/js/theme.min.js"></script>
	<!-- endbuild -->

	<script src="./assets/js/vendors/countdown.js"></script>

	<script src="./assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
	<script src="./assets/js/vendors/tns-slider.js"></script>
	<script src="./assets/js/vendors/zoom.js"></script>
	<script src="./assets/js/vendors/language.js"></script>
	<!-- Swiper JS -->
	<script src="./assets/libs/swiper/swiper-bundle.min.js"></script>
	<script src="./assets/js/vendors/swiper.js"></script>
	<script src="./assets/js/vendors/validation.js"></script>
</body>

</html>