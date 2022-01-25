@extends('layouts.master')
@section('content')

	<x-app-layout>
		<main class="flex flex-col min-h-screen mt-36 md:mt-40">
			<!-- about us -->
			<section class="flex flex-col lg:flex-row justify-center items-center gap-10 p-28 bg-hero-background bg-cover">
				<div class="h-96 w-full bg-slate-300 flex justify-center items-center">
					<h3 class="text-3xl font-semibold text-slate-400">Image</h3>
				</div>
				<div>
					<h2 class="text-2xl font-semibold text-center md:text-left">About Us</h2>
					<p class="text-lg mt-3 text-justify md:text-left">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo eius odit suscipit consectetur
						recusandae sunt quas quo voluptatum non pariatur iure, nam dolores nisi voluptatibus dolorum placeat
						quidem beatae omnis!
						Sapiente, repudiandae qui ab totam ipsa hic doloribus iusto consectetur ratione itaque accusantium
						odio voluptatibus, error impedit neque consequuntur quam veniam nihil in explicabo debitis!
						Praesentium aut velit
						debitis ipsa!
					</p>
				</div>
			</section>
			<!-- end of about us -->
			<div class="container py-7">

				<!-- our teams -->
				<section class="flex flex-col py-28">
					<!-- header -->
					<div class="sm:w-3/4 lg:w-5/12 mx-auto px-2 mb-10">
						<h1 class="text-3xl text-center font-bold">Active Contributor</h1>
					</div>
					<!-- endheader -->

					<!-- our team photo -->
					<div class="flex flex-col justify-center">
						<div class="h-96 w-9/12 bg-slate-300 flex justify-center items-center mx-auto">
							<h3 class="text-3xl font-semibold text-slate-400">Our teams</h3>
						</div>
						<div class="text-center md:p-7 py-7">
							<h2 class="uppercase font-semibold">ENT Crews Gen 16</h2>
							<p class="text-lg text-justify md:text-center">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel laborum ex voluptate repellat,
								corporis at animi assumenda architecto consequuntur, eius autem aliquam ipsam, totam blanditiis
								nobis sint eveniet ad
								voluptates? Labore totam deserunt sit dolores vitae nulla cumque quos non repellendus ut omnis
								placeat nesciunt voluptatibus voluptate quas architecto facilis beatae laboriosam pariatur eum,
								nihil cum sapiente.
								Tempora, minima ut!
							</p>
						</div>
					</div>
					<!-- end of our team photo -->

					<!-- divisions -->
					<div class="py-20 2xl:px-10">
						<!-- content -->
						<div class="container">
							<div class="flex flex-col lg:flex-row lg:justify-around">
								<div class="flex flex-col justify-center mb-16 lg:my-0">
									<img src="assets/images/fg.jpg" alt="" class="h-32 aspect-square mb-2">
									<h3 class="font-semibold text-xl text-center">Photographer</h3>
								</div>
								<div class="flex flex-col justify-center mb-16 lg:my-0">
									<img src="assets/images/vg.jpg" alt="" class="h-32 aspect-square mb-2">
									<h3 class="font-semibold text-xl text-center">Videographer</h3>
								</div>
								<div class="flex flex-col justify-center mb-16 lg:my-0">
									<img src="assets/images/dg.jpg" alt="" class="h-32 aspect-square mb-2">
									<h3 class="font-semibold text-xl text-center">Graphic designer</h3>
								</div>
								<div class="flex flex-col justify-center mb-16 lg:my-0">
									<img src="assets/images/rp.jpg" alt="" class="h-32 aspect-square mb-2">
									<h3 class="font-semibold text-xl text-center">Reporter</h3>
								</div>
								<div class="flex flex-col justify-center mb-16 lg:my-0">
									<img src="assets/images/wm.jpg" alt="" class="h-32 aspect-square mb-2">
									<h3 class="font-semibold text-xl text-center">Webmaster</h3>
								</div>
							</div>
						</div>
					</div>
					<!-- end of divisions -->

					<!-- divisions fragment -->
					<div class="p-12">
						<div class="max-w-6xl mx-auto space-y-32">
							<section class="md:flex md:space-x-10 items-start">
								<div class="w-full md:w-2/6 sticky md:top-36">
									<h2 class="font-extrabold text-3xl font-serif text-accent3">Photographer</h2>
								</div>

								<div class="md:w-4/6 space-y-10">
									<div class="flex flex-col gap-2">
										<p>
											Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quae. Exercitationem,
											aspernatur cupiditate reiciendis veniam fugiat rerum officia dolor accusantium ipsam cum
											provident eum voluptatum numquam
											consequatur! Consectetur, quos rem.
										</p>
										<p>
											Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quae. Exercitationem,
											aspernatur cupiditate reiciendis veniam fugiat rerum officia dolor accusantium ipsam cum
											provident eum voluptatum numquam
											consequatur! Consectetur, quos rem.
										</p>
									</div>

									<div class="w-full flex flex-col lg:flex-row lg:justify-between">
										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/lily.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->

										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/rizky.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->

										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/johan.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->

										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/karina.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->
									</div>
								</div>
							</section>
						</div>
					</div>
					<!-- 2 -->
					<div class="p-12">
						<div class="max-w-6xl mx-auto space-y-32">
							<section class="md:flex md:space-x-10 items-start">
								<div class="w-full md:w-2/6 sticky md:top-36">
									<h2 class="font-extrabold text-3xl font-serif text-accent3">Desain Grafis</h2>
								</div>

								<div class="md:w-4/6 space-y-10">
									<div class="flex flex-col gap-2">
										<p>
											Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quae. Exercitationem,
											aspernatur cupiditate reiciendis veniam fugiat rerum officia dolor accusantium ipsam cum
											provident eum voluptatum numquam
											consequatur! Consectetur, quos rem.
										</p>
										<p>
											Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quae. Exercitationem,
											aspernatur cupiditate reiciendis veniam fugiat rerum officia dolor accusantium ipsam cum
											provident eum voluptatum numquam
											consequatur! Consectetur, quos rem.
										</p>
									</div>

									<div class="w-full flex flex-col lg:flex-row lg:justify-between">
										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/yoga.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->

										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/rasyid.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->

										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/diva.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->
									</div>
								</div>
							</section>
						</div>
					</div>
					<!-- reporter -->
					<div class="p-12">
						<div class="max-w-6xl mx-auto space-y-32">
							<section class="md:flex md:space-x-10 items-start">
								<div class="w-full md:w-2/6 sticky md:top-36">
									<h2 class="font-extrabold text-3xl font-serif text-accent3">Reporter</h2>
								</div>

								<div class="md:w-4/6 space-y-10">
									<div class="flex flex-col gap-2">
										<p>
											Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quae. Exercitationem,
											aspernatur cupiditate reiciendis veniam fugiat rerum officia dolor accusantium ipsam cum
											provident eum voluptatum numquam
											consequatur! Consectetur, quos rem.
										</p>
										<p>
											Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quae. Exercitationem,
											aspernatur cupiditate reiciendis veniam fugiat rerum officia dolor accusantium ipsam cum
											provident eum voluptatum numquam
											consequatur! Consectetur, quos rem.
										</p>
									</div>

									<div class="w-full flex flex-col lg:flex-row lg:justify-between">
										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/suci.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->

										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/rifda.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->

										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/hera.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->
									</div>
								</div>
							</section>
						</div>
					</div>
					<!-- Video Grapher -->
					<div class="p-12">
						<div class="max-w-6xl mx-auto space-y-32">
							<section class="md:flex md:space-x-10 items-start">
								<div class="w-full md:w-2/6 sticky md:top-36">
									<h2 class="font-extrabold text-3xl font-serif text-accent3">Videographer</h2>
								</div>

								<div class="md:w-4/6 space-y-10">
									<div class="flex flex-col gap-2">
										<p>
											Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quae. Exercitationem,
											aspernatur cupiditate reiciendis veniam fugiat rerum officia dolor accusantium ipsam cum
											provident eum voluptatum numquam
											consequatur! Consectetur, quos rem.
										</p>
										<p>
											Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quae. Exercitationem,
											aspernatur cupiditate reiciendis veniam fugiat rerum officia dolor accusantium ipsam cum
											provident eum voluptatum numquam
											consequatur! Consectetur, quos rem.
										</p>
									</div>

									<div class="w-full flex flex-col lg:flex-row lg:justify-between">
										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/destyo.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->

										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/burhan.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->

										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/iqbal.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->
									</div>
								</div>
							</section>
						</div>
					</div>
					<!-- webmaster -->
					<div class="p-12">
						<div class="max-w-6xl mx-auto space-y-32">
							<section class="md:flex md:space-x-10 items-start">
								<div class="w-full md:w-2/6 sticky md:top-36">
									<h2 class="font-extrabold text-3xl font-serif text-accent3">Webmaster</h2>
								</div>

								<div class="md:w-4/6 space-y-10">
									<div class="flex flex-col gap-2">
										<p>
											Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quae. Exercitationem,
											aspernatur cupiditate reiciendis veniam fugiat rerum officia dolor accusantium ipsam cum
											provident eum voluptatum numquam
											consequatur! Consectetur, quos rem.
										</p>
										<p>
											Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quae. Exercitationem,
											aspernatur cupiditate reiciendis veniam fugiat rerum officia dolor accusantium ipsam cum
											provident eum voluptatum numquam
											consequatur! Consectetur, quos rem.
										</p>
									</div>

									<div class="w-full flex flex-col lg:flex-row lg:justify-between">
										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/suci.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->

										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/nabila.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->

										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/khoirul.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Name</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">details</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla
															exercitationem nobis veritatis id assumenda deserunt ipsa magnam quo cumque
															fugit libero aspernatur, aliquid dolor
															dolorum. Assumenda quos soluta eligendi.
														</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of person -->
									</div>
								</div>
							</section>
						</div>
					</div>
					<!-- end of divisions fragment -->
				</section>

				<!-- start of our teams -->
				<section class="w-full lg:w-full my-12 items-center">
					<div class="py-2 mx-auto mb-8">
						<h2 class="font-bold text-2xl text-center tracking-widest uppercase">Our Teams</h2>
					</div>
					<div class="w-full flex flex-col md:flex-row gap-12 justify-center items-center text-center">
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<h3 class="text-lg font-semibold text-slate-400">1</h3>
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Someone</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
					</div>
			</div>
			</section>


			</div>
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"
			   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
			<script src="assets/js/main.js"></script>
		</main>

	</x-app-layout>
@endsection
