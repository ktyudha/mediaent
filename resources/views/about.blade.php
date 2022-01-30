@extends('layouts.master')
@section('content')

	<x-app-layout>
		<main class="flex flex-col min-h-screen mt-36 md:mt-40">
			<!-- about us -->
			<section class="flex flex-col lg:flex-row justify-center items-center gap-10 p-28 bg-hero-background bg-cover">
				<div class="h-96 w-full bg-slate-300 flex justify-center items-center">
					<img src="assets/images/Ilust.png" alt="">
				</div>
				<div>
					<h2 class="text-2xl font-semibold text-center md:text-left">MEDIA ENT</h2>
					<p class="text-lg mt-5 text-justify md:text-left">
						ENT merupakan tim jurnalistik dan jaringan yang dinaungi oleh UPT Jaringan Komputer dan Sistem Informasi Politeknik Elektronika Negeri Surabaya (PENS) yang terbagi menjadi lima divisi yakni Reporter, Fotografer, Videografer, Graphic Designer, dan Webmaster.
					</p>
					<p class="text-lg mt-3 text-justify md:text-left">
						Sebagai tim jurnalistik, ENT menghadirkan Media ENT sebagai website portal berita yang akan berbagi pengetahuan dan informasi terkini kepada kalian dengan mengusung empat kategori konten yakni Lifestyle, Hiburan, Teknologi, dan Explore.
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
								Pada tahun 2022, Media ENT dikelola oleh generasi ke-16 ENT yang terdiri dari lima divisi yakni Reporter, Fotografer, Videografer, Graphic Designer, dan Webmaster. Setiap tahun ENT melakukan evaluasi dan update terhadap website, fitur maupun artikel yang ditampilkan melalui Media ENT. Untuk tahun ini, Gen 16 Crews menghadirkan website portal berita bertema minimalis, artikel yang up to date, dan suggestion box untuk kalian generasi Z. 
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
											Photographer bertanggung jawab atas dokumentasi foto dan tampilan gambar pada setiap artikel di Media ENT. Ada empat anggota divisi Photographer yaitu Lily, Rizky, Johan, dan Karina.
										</p>
									</div>

									<div class="w-full flex flex-col lg:flex-row lg:justify-between">
										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/lily.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Lily</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Lily Ananta Saputri, punya motivasi hidup "ikutin aja alurnya" gara-gara itu semenjak kuliah tiap hari hobinya rebahan mulu. Ga lah becanda, kalau hobi sih suka traveling kemana aja walaupun gaada duit hehe. Kalau kepo cek aja IG @lilyannts, tapi percuma gaada isinya.
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
												<h3 class="text-center font-semibold mt-2">Rizky</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Miftahul Rizqi merupakan orang yang hobi main game dan tentu saja suka dunia fotografi. Motivasi hidup "Man Jadda Wa Jada" untuk IG sendiri @i._kyy.
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
												<h3 class="text-center font-semibold mt-2">Johan</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Johan Muhammad Iqbal punya motivasi hidup untuk Jangan Lupa Bernafas. Untuk hobinya suka tiap hari menggalau walau aslinya sih gak galau. Kalau mau pantengin IG ketik aja @johaniqbal_ di pencarian.
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
												<h3 class="text-center font-semibold mt-2">Karina</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Hallo! aku Karina Sovia Sari, bukan member aespa tapi cuma mahasiswi biasa. Untuk hobi, mungkin nonton film si yang paling konsisten. Di hidup yang penuh struggles, quote “Nothing lasts forever, not even pain” bikin aku percaya kalau semua akan ada waktunya, tapi ya dengan terus berjuang dan mencoba ea. Terakhir, yang mau mampir ke flat instagram ku boleh cek @karinasoviaa.
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
									<h2 class="font-extrabold text-3xl font-serif text-accent3">Graphic Designer</h2>
								</div>

								<div class="md:w-4/6 space-y-10">
									<div class="flex flex-col gap-2">
										<p>
											Graphic Designer bertugas untuk membuat ilustrasi pada website Media ENT dengan menggabungkan ide kreatif dan konten edukatif. Anggota divisi Graphic Designer terdiri dari Yoga, Rasyid, dan Diva.
										</p>
									</div>

									<div class="w-full flex flex-col lg:flex-row lg:justify-between">
										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/yoga.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Yoga</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
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
												<h3 class="text-center font-semibold mt-2">Rasyid</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															M. Rasyid Maulana (M nya emang disingkat) yang awalnya tau desain hanya coba² gabung ekskul desain semasa sekolah jadi keterusan sampai kuliah, buat IG @raasyidmaulana.
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
												<h3 class="text-center font-semibold mt-2">Diva</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Hai gaes, aku Diva Farikha Syafitri biasa dipanggil Diva. Asalku dari Surabaya. Makanan favorit, apapun yg ada kejunya. Warna kesukaan item. Hobi ku banyak, salah satunya digosting.. ga deh becanda hobiku traveling, bahasa kerennya gitu, padahal pokoknya keluar kemana aja ya mau. Quotes favoritku "Whatever you are, be a good one". Jangan lupa follow @farikhasyafitri ya.
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
											Reporter bertanggung jawab atas penulisan artikel dan pembuatan konten yang ada pada Media ENT. Anggota divisi Reporter yaitu Suci, Rifda, dan Hera.
										</p>
									</div>

									<div class="w-full flex flex-col lg:flex-row lg:justify-between">
										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/suci.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Suci</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Suci Rindya Kaswarie tipe orang yang absurd tapi serius. Repoter yang super kece dan cantik. Motivasi hidup selama ini "Be yourself" dan kalau mau stalking IG cari aja @sucirindyaaa.
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
												<h3 class="text-center font-semibold mt-2">Rifda</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Rifda Qurrotul 'Ain is an Applied Data Science student who is interested in business intelligence and journalism. She likes to spend her time mostly for reading, interacting, writing, watching movies and cooking. Ad astra per aspera is one of her life motivation, which means "through hardships to the star". Get to know Rifda more on Instagram @arrifdaa.
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
												<h3 class="text-center font-semibold mt-2">Hera</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Hera Dian Marssheila suka nyoba hal baru yang menantang dan sesuai minat tapi juga masih sanggup dikerjain. Hobi suka main musik dan nyanyi yang lama - lama jadi rutinitas apalagi pas overthinking. Terus sekarang karena udah dewasa suka berbisnis buat dapet cuan mandiri. Buat prestasi akademik alhamdulillah IPS PENS tidak pelit ya bundah. Aku juga suka bergaul sama banyak orang buat nambah temen, karna semakin banyak temen tuh kayak rame aja bumi ternyata. Terakhir punya quotes "jadilah versi terbaik dari dirimu sendiri" dan dipersilahkan searching IG ku @heramarssheila.
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
											Videographer bertugas dalam pengambilan video, video editing, dan audio editing untuk kategori video yang terdapat pada website Media ENT. Anggota divisi Videografer yakni Destyo, Burhan, dan Iqbal.
										</p>
									</div>

									<div class="w-full flex flex-col lg:flex-row lg:justify-between">
										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/destyo.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Destyo</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Destyo Avrilsyah punya quotes kece "People go, Memories Stay" dan untuk bahan stalking IG bisa search @desoyt.
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
												<h3 class="text-center font-semibold mt-2">Burhan</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Burhanuddin Ahmad Habibi punya hobi joging, main game dan membaca buku. Quotes dalam hidupku "Sebaik baik manusia adalah yang paling bermanfaat bagi manusia". Untuk IG sendiri boleh pantengin @brhnn.ah.
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
												<h3 class="text-center font-semibold mt-2">Iqbal</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Iqbal Dhiyaudin Prayitnoadi, Pengguna akun IG  @iqbaldhydn adalah Orang Jawa asli yang punya motivasi hidup "Sing isok dilakokno yo dilakoni ae".
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
											Webmaster memiliki peran dalam membangun dan mengelola website pada Media ENT. Anggota divisi Webmaster yaitu Althaf, Nabila, dan Khoirul.
										</p>
									</div>

									<div class="w-full flex flex-col lg:flex-row lg:justify-between">
										<!-- person -->
										<div class="flex flex-col justify-center space-y-6 lg:my-0">
											<div class="w-32 aspect-square bg-slate-300 flex justify-center items-center">
												<img src="assets/images/Foto/althaf.png" alt="">
											</div>
											<div x-data="{isOpen: false}" @click.away="isOpen = false" class="w-max container mx-auto px-10">
												<h3 class="text-center font-semibold mt-2">Althaf</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Muhammad Althaf Firdaus, bisa dipanggil Althaf tipe kepribadian ku adalah plegmatis. Punya hobi bermain badminton, mendengarkan musik, dan rebahan (tidur). Motivasi hidup selama ini "Do the best, God the rest". Buat IG ku @althaf-77.
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
												<h3 class="text-center font-semibold mt-2">Nabila</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Nabilatulhawa punya motivasi hidup "Do anything I can, If that it's for me. It won't change". Hobinya belajar hal baru dan lama, juga marathon movie atau drama. And get to know me more at  @nbhawaa_.
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
												<h3 class="text-center font-semibold mt-2">Khoirul</h3>
												<button @click="isOpen = !isOpen" class="w-full">
													<span class="text-gray-400 underline">detail</span>
												</button>

												<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
													class="absolute mt-2 w-80 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none mx-auto"
													role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
													<div class="py-2" role="none">
														<p class="text-gray-700 block px-4 py-2 text-sm">
															Ahmad Musafir Khoirul Fattah adalah orang yang hidupnya gak bisa jauh - jauh dari kasur, laptop, kopi dan Indomie tentunya, alias hobi begadang. Kfc @musafir.khoirul.
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
					<div class="w-5/6 flex flex-col md:flex-row gap-12 justify-center items-center text-center">
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Hanief.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Hanief</h1>
								<span class="text-gray-400 text-sm">Gen 13</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Fauzi.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Fauzi</h1>
								<span class="text-gray-400 text-sm">Gen 13</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Yanu.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Yanu</h1>
								<span class="text-gray-400 text-sm">Gen 13</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Rafli.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Rafli</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Yusuf.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Yusuf</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Roid.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Roid</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Putri.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Putri</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Kiko.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Kiko</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Ardian.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Ardian</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Firsha.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Firsha</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
					</div>
					<div class="mt-10 w-5/6 flex flex-col md:flex-row gap-12 justify-center items-center text-center">
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Dyaz.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Dyaz</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Iqbal.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Iqbal</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Cahyo.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Cahyo</h1>
								<span class="text-gray-400 text-sm">Gen 14</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Bunga.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Bunga</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Fasya.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Fasya</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Krisna.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Krisna</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Iil.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Iil</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Ryan.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Ryan</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Ekky.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Ekky</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Fariz.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Fariz</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
					</div>
					<div class="mt-10 w-5/6 flex flex-col md:flex-row gap-12 justify-center items-center text-center">
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Arbi.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Arbi</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Khoiron.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Khoiron</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Santi.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Santi</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Irfan.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Irfan</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Thania.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Thania</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Jessica.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Jessica</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
							</div>
						</div>
						<div>
							<div class="h-16 aspect-square mx-auto bg-slate-300 flex justify-center items-center rounded-full">
								<img  class="items-center rounded-full" src="assets/images/GenAtas/Inten.png" alt="">
							</div>
							<div class="mt-4 flex flex-col justify-around items-center">
								<h1 class="font-semibold">Inten</h1>
								<span class="text-gray-400 text-sm">Gen 15</span>
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
