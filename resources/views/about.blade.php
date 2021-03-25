@extends('layouts.master')
@section('konten')

    <x-app-layout>
    <x-slot name="title">
        About Us
    </x-slot>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> --}}
    {{-- Edit Disini --}}

    <!--Hero-->
    <div class="py-8"></div>
    <div class="mx-10">
        <div class="px-0 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="ml-0 flex flex-col w-full md:w-1/2 justify-center items-start text-center md:text-left">
                <img class="object-cover w-full h-41" src="entcrews.png" alt="entcrews">
            </div>
            <!--Right Col-->
            <div class="text-white md:w-1/2 py-12 md:text-left text-center md:overflow-auto h-90">
                <div>
                    <a href="#" class="block mt-2 text-3xl font-semibold ">About Us</a>
                    <p class="mt-2 text-sm pr-15">ENT merupakan tim jurnalistik dan jaringan yang dinaungi oleh UPT Jaringan Komputer dan Sistem Informasi Politeknik Elektronika Negeri Surabaya (PENS) yang sudah berdiri pada tahun 2005</p>
                    <div class="mx-auto">
                        <div class="pt-7 pb-40 pl-4 font-bold text-white text-1xl">
                            <button  id="btn-selengkapnya" class=" gradient hover:bg-white hover:text-white inline-flex mx-auto lg:mx-0 hover:no-underline text-white font-bold rounded-full lg:mt-0 text-center py-1 px-3 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" type="button" style="transition: all .15s ease" onclick="toggleModal('modal-id')">
                                Read More ...
                            </button>
                        </div>
                </div>
            </div>

            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
                <div class="relative w-auto my-6 mx-auto max-w-3xl">
                    <!--content-->
                    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--header-->
                    <div class="flex items-start justify-between p-5 border-b border-solid  rounded-t">
                        <h3 class="text-3xl text-black font-semibold">
                        About ENT
                        </h3>
                        <button class="p-1 ml-auto border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                            ×
                        </button>
                    </div>
                    <!--body-->
                    <div class="relative p-6 flex-auto">
                        <p class="my-4 text-gray-600 text-lg leading-relaxed">
                            ENT merupakan tim jurnalistik dan jaringan yang dinaungi oleh UPT Jaringan Komputer dan Sistem Informasi Politeknik Elektronika Negeri Surabaya (PENS).
                            Berdiri pada tahun 2005, ENT pada awalnya hanya bertanggungjawab dalam mengatur urusan jaringan di PENS.
                            Kemudian saat ini berkembang menjadi tim jurnalistik dan jaringan PENS yang terbagi menjadi lima divisi yakni Reporter, Fotografer, Videografer, Desain Grafis, dan Webmaster.
                        </p>
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
                        <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('modal-id')">
                        Close
                        </button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
        </div>
    </div>

    </div>

</div>


    <!-- Featured Post 1 -->

    <!-- Featured Post 2 -->
    <div class="px-0 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="ml-0 mt-5 flex flex-col w-full md:w-1/3 justify-center items-start text-center md:text-left">
            <div class="bg-white mb-2 ml-5 sm:ml-10 sm:mr-3 mr-5 max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md">
                <img class="object-cover w-full h-41" src="gen15.png" alt="ENT Crews">
                <div class="p-6">
                    <div>
                        <a href="https://www.instagram.com/entcrews/" class="block mt-2 font-semibold text-gray-800 hover:text-gray-600 hover:underline">ENT CREWS GEN 15</a>
                        <p class="mt-2 text-sm text-gray-600">
                            Anggota ENT GEN 15 adalah mahasiswa dari Politeknik Elektronika Negeri Surabaya yang bergabung dengan ENT CREWS sejak tahun 2020.
                            <br>Anggotanya terdiri dari 16 orang dari berbagai program studi yang bergabung dalam 5 devisi yang ada di ENT.
                        </p>
                    </div>

                    <div class="mt-2 mb-0">
                        <div class="flex items-center flex-col md:text-left">
                            <div class="items-center flex hover:text-gray-700 text-gray-400">
                                <a href="https://www.instagram.com/entcrews/" class=" inline-block font-semibold">Kunjungi instagram kami
                                    <svg
                                        class="inline-block h-5 w-5 "
                                        viewbox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"/>
                                        <polyline points="12 5 19 12 12 19"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-2/3 py-6 md:overflow-auto h-90">
            <div class="flex flex-wrap" id="tabs-id">
                <div class="w-full">
                  <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                    <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                      <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-blue-600" onclick="changeAtiveTab(event,'tab-fg')">
                        <i class="fas fa-camera text-base mr-1"></i> <br>  Photographer
                      </a>
                    </li>
                    <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                      <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-blue-600 bg-white" onclick="changeAtiveTab(event,'tab-vg')">
                        <i class="fas fa-video text-base mr-1"></i> <br> Videographer
                      </a>
                    </li>
                    <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                      <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-blue-600 bg-white" onclick="changeAtiveTab(event,'tab-dg')">
                        <i class="fas fa-palette text-base mr-1"></i> <br> Graphic designer
                      </a>
                    </li>
                    <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-blue-600 bg-white" onclick="changeAtiveTab(event,'tab-rp')">
                          <i class="fas fa-microphone text-base mr-1"></i> <br> Reporter
                        </a>
                      </li>
                      <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-blue-600 bg-white" onclick="changeAtiveTab(event,'tab-wm')">
                          <i class="fas fa-code text-base mr-1"></i> <br> WEBMASTER
                        </a>
                      </li>
                  </ul>
                  <div class="text-center relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                    <div class="px-4 py-5 flex-auto">
                      <div class="tab-content tab-space">
                        <div class="text-gray-600 block" id="tab-fg">
                            <p>
                                Photographer is person who have responsible in take a documentation photo at some event.
                            </p> <br>
                            <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                                <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal text-white bg-gray-500" >
                                        <button id = "tampil" class="bg-gray-500 text-white font-bold uppercase text-sm rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-fess')" onmouseleave="openPopover(event,'popover-fess')">
                                            M. IZZUDIN FASYA
                                        </button>
                                        <div id="fg" class="mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/fasya.jpg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">fasya</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D4 Teknik Informatika </div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                        Tetaplah baik walaupun orang lain tidak baik kepadamu <br>
                                                        <em>- Fess -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/masfess_/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="text-center hidden bg-gray-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-fess">
                                    <div>
                                      <div class="bg-gray-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                        MOTTO
                                      </div>
                                      <div class="p-3">
                                        Tetaplah baik walaupun orang lain tidak baik kepadamu <br>
                                        <em>- Fasya -</em>
                                      </div>
                                    </div>
                                  </div>
                                </li>

                                <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="bg-pink-200 text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal ">
                                        <button id = "tampil2" class=" text-gray-600 font-bold uppercase text-sm rounded outline-none focus:outline-none  mr-1 mb-1 " type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-bunga')" onmouseleave="openPopover(event,'popover-bunga')">
                                            Bunga Adinda
                                        </button>
                                        <div id="fg2"  class=" mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/bunga.jpg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Bunga</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D4 Teknologi Game</div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                            We work in the dark to save the light   <br>
                                                        <em>- Bng -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/bunganyx/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center hidden bg-pink-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-bunga">
                                        <div>
                                        <div class="bg-pink-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                            MOTTO
                                        </div>
                                        <div class="p-3">
                                            We work in the dark to save the light <br>
                                            <em>- Bunga -</em>
                                        </div>
                                        </div>
                                    </div>
                                  </li>

                                  <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal text-white bg-gray-500" >
                                        <button id = "tampil3" class="bg-gray-500 text-white font-bold uppercase text-sm rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-kris')" onmouseleave="openPopover(event,'popover-kris')">
                                            M. Krisna Sofyan
                                        </button>
                                        <div id="fg3" class="mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/krisna.jpg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">krisna</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D3 Multimedia Broadcasting </div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                        don't trust too much<br>
                                                        don't love too much<br>
                                                        don't hope too much<br>
                                                        because too much can hurt you so much. <br>
                                                        <em>- Kris -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/krisna._.sofyan/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="text-center hidden bg-gray-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-kris">
                                    <div>
                                      <div class="bg-gray-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                        MOTTO
                                      </div>
                                      <div class="p-3">
                                        don't trust too much<br>
                                        don't love too much<br>
                                        don't hope too much<br>
                                        because too much can hurt you so much. <br>
                                        <em>- Krisna -</em>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden text-gray-600" id="tab-vg">
                          <p>
                            Videographer is person who have responsible in making small scale journalism video, start from take a video, video editing, and audio editing.
                          </p> <br>
                          <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                                <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal text-white bg-gray-500" >
                                        <button id = "tampil4" class="bg-gray-500 text-white font-bold uppercase text-sm rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-frz')" onmouseleave="openPopover(event,'popover-frz')">
                                        Fariz Bagaskoro Muzakkir
                                        </button>
                                        <div id="vg" class="mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/fariz.jpg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">fasya</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D4 Teknik Telekomunikasi</div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                        Only God can judge me <br>
                                                        <em>- Frz -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/farizbagaaas/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="text-center hidden bg-gray-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-frz">
                                    <div>
                                      <div class="bg-gray-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                        MOTTO
                                      </div>
                                      <div class="p-3">
                                        Only God can judge me <br>
                                        <em>- Fariz -</em>
                                      </div>
                                    </div>
                                  </div>
                                </li>

                                <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                <div class="bg-pink-200 text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal ">
                                    <button id = "tampil5" class=" text-gray-600 font-bold uppercase text-sm rounded outline-none focus:outline-none  mr-1 mb-1 " type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-vivi')" onmouseleave="openPopover(event,'popover-vivi')">
                                        Nurul Lailatul Lutfiah Dimyatiyah
                                    </button>
                                    <div id="vg2"  class="mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                    <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/vivi.jpeg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">fasya</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D3 Multimedia Broadcasting </div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                            If u never try, u never know   <br>
                                                        <em>- Vi -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/viivii27_/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="text-center hidden bg-pink-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-vivi">
                                    <div>
                                      <div class="bg-pink-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                        MOTTO
                                      </div>
                                      <div class="p-3">
                                        If u never try, u never know <br>
                                        <em>- Vivi -</em>
                                      </div>
                                    </div>
                                  </div>
                                  </li>

                                  <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal text-white bg-gray-500" >
                                        <button id = "tampil6" class="bg-gray-500 text-white font-bold uppercase text-sm rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-fren')" onmouseleave="openPopover(event,'popover-fren')">
                                            Frendy Trio Ardana
                                        </button>
                                        <div id="vg3" class="mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/frendy.jpeg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Frendy</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D3 Multimedia Broadcasting</div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                            Stay creative and let's be a frend.  <br>
                                                        <em>- Fren -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/frendyfren/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="text-center hidden bg-gray-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-fren">
                                    <div>
                                      <div class="bg-gray-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                        MOTTO
                                      </div>
                                      <div class="p-3">
                                            Stay creative and let's be a frend. <br>
                                        <em>- Frendy -</em>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden text-gray-600" id="tab-dg">
                          <p>
                            Graphic designer is person who have responsible in making visualization an information with computer software which is combining creative idea and educative content.
                          </p> <br>
                          <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                                <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal text-white bg-gray-500" >
                                        <button id = "tampil7" class="bg-gray-500 text-white font-bold uppercase text-sm rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-iil')" onmouseleave="openPopover(event,'popover-iil')">
                                            Marwah Insan Kamil
                                        </button>
                                        <div id="dg" class="mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/iil.jpg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">marwah</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D3 Multimedia Broadcasting</div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                        If there is the hard one, why we choose the easy one <br>
                                                        <em>- iil -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/marwah_kamil04/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="text-center hidden bg-gray-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-iil">
                                    <div>
                                      <div class="bg-gray-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                        MOTTO
                                      </div>
                                      <div class="p-3">
                                        If there is the hard one, why we choose the easy one <br>
                                        <em>- iil -</em>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal text-white bg-gray-500" >
                                        <button id = "tampil8" class="bg-gray-500 text-white font-bold uppercase text-sm rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-ryan')" onmouseleave="openPopover(event,'popover-ryan')">
                                            Ryan Ramadhan Lazuardy
                                        </button>
                                        <div id="dg2" class="mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/ryan.jpg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Ryan</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D4 Teknologi Game </div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                            Do or don't do there is no try<br>
                                                        <em>- Ray -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/rayydra_/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="text-center hidden bg-gray-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-ryan">
                                    <div>
                                      <div class="bg-gray-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                        MOTTO
                                      </div>
                                      <div class="p-3">
                                            Do or don't do there is no try  <br>
                                        <em>- Ryan -</em>
                                      </div>
                                    </div>
                                  </div>
                                </li>

                                <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal text-white bg-gray-500" >
                                        <button id = "tampil9" class="bg-gray-500 text-white font-bold uppercase text-sm rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-eky')" onmouseleave="openPopover(event,'popover-eky')">
                                            M. Afrizal Ekky Ardhana
                                        </button>
                                        <div id="dg3" class="mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/ekky.jpeg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Ekky</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D3 Teknik Telekomunikasi </div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                        jika kamu malas-malasan ingatlah masih banyak orang lain yang bekerja keras demi mencapai kesuksesan<br>
                                                        <em>- Eky -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/ekkyardhana/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="text-center hidden bg-gray-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-eky">
                                    <div>
                                      <div class="bg-gray-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                        MOTTO
                                      </div>
                                      <div class="p-3">
                                            jika kamu malas-malasan ingatlah masih banyak orang lain yang bekerja keras demi mencapai kesuksesan  <br>
                                        <em>- Ekky -</em>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden text-gray-600" id="tab-rp">
                            <p>
                                Reporter is person who have responsible in making news articles and broadcasting some event reports.
                            </p> <br>
                            <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                                <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="bg-pink-200 text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal ">
                                        <button id = "tampil10" class=" text-gray-600 font-bold uppercase text-sm rounded outline-none focus:outline-none  mr-1 mb-1 " type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-tan')" onmouseleave="openPopover(event,'popover-tan')">
                                            Thania Wahyu Anandita
                                        </button>
                                        <div id="rp"  class=" mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                        <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                <center>
                                                    <div class="foto ">
                                                        <img src="crews/thania.jpg" class="foto rounded shadow-lg">
                                                    </div>
                                                </center>
                                                <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Thania</p>
                                                <div class=" font-bold text-xl text-gray-900 px-6">D3 Multimedia Broadcasting</div>
                                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                        Lakukan apapun dan dimanapun dengan versi terbaik dirimu  <br>
                                                    <em>- Tan -</em>
                                                </p>
                                                <p class="text-gray-800 text-base px-6 mb-5">
                                                    <a href="https://www.instagram.com/thanianio/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="text-center hidden bg-pink-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-tan">
                                        <div>
                                        <div class="bg-pink-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                            MOTTO
                                        </div>
                                        <div class="p-3">
                                            Lakukan apapun dan dimanapun dengan versi terbaik dirimu  <br>
                                            <em>- Thania -</em>
                                        </div>
                                        </div>
                                    </div>
                                  </li>

                                  <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="bg-pink-200 text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal ">
                                        <button id = "tampil11" class=" text-gray-600 font-bold uppercase text-sm rounded outline-none focus:outline-none  mr-1 mb-1 " type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-jes')" onmouseleave="openPopover(event,'popover-jes')">
                                            Jessica Barans Widyasari
                                        </button>
                                        <div id="rp2"  class=" mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                        <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                <center>
                                                    <div class="foto ">
                                                        <img src="crews/jessica.jpg" class="foto rounded shadow-lg">
                                                    </div>
                                                </center>
                                                <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Jessica</p>
                                                <div class=" font-bold text-xl text-gray-900 px-6">D3 Multi Media dan Broadcasting </div>
                                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                    Be brave, doing good, belive in miracle  <br>
                                                    <em>- Jess -</em>
                                                </p>
                                                <p class="text-gray-800 text-base px-6 mb-5">
                                                    <a href="https://www.instagram.com/jessicaabarans/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="text-center hidden bg-pink-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-jes">
                                        <div>
                                        <div class="bg-pink-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                            MOTTO
                                        </div>
                                        <div class="p-3">
                                                Be brave, doing good, belive in miracle  <br>
                                            <em>- Jessica -</em>
                                        </div>
                                        </div>
                                    </div>
                                  </li>

                                  <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal text-white bg-gray-500" >
                                        <button id = "tampil12" class="bg-gray-500 text-white font-bold uppercase text-sm rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-irfan')" onmouseleave="openPopover(event,'popover-irfan')">
                                            Irfan Ardiansyah
                                        </button>
                                        <div id="rp3" class="mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/irfan.jpeg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Irfan</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D3 Multimedia Broadcasting </div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                            Be your self<br>
                                                        <em>- Fan -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/irfan_rdiansyah/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="text-center hidden bg-gray-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-irfan">
                                    <div>
                                      <div class="bg-gray-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                        MOTTO
                                      </div>
                                      <div class="p-3">
                                            Be your self  <br>
                                        <em>- Irfan -</em>
                                      </div>
                                    </div>
                                  </div>
                                </li>

                                  <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="bg-pink-200 text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal ">
                                        <button id = "tampil13" class=" text-gray-600 font-bold uppercase text-sm rounded outline-none focus:outline-none  mr-1 mb-1 " type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-inten')" onmouseleave="openPopover(event,'popover-inten')">
                                            Anak Agung Inten Pramitriyani
                                        </button>
                                        <div id="rp4"  class=" mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                        <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                <center>
                                                    <div class="foto ">
                                                        <img src="crews/inten.png" class="foto rounded shadow-lg">
                                                    </div>
                                                </center>
                                                <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Inten</p>
                                                <div class=" font-bold text-xl text-gray-900 px-6">D4 Teknologi Game </div>
                                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                        CTRL yourself, ALT your thinking, DEL negativity  <br>
                                                    <em>- Ten -</em>
                                                </p>
                                                <p class="text-gray-800 text-base px-6 mb-5">
                                                    <a href="https://www.instagram.com/intenpramitriyanii/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="text-center hidden bg-pink-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-jes">
                                        <div>
                                        <div class="bg-pink-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                            MOTTO
                                        </div>
                                        <div class="p-3">
                                                CTRL yourself, ALT your thinking, DEL negativity  <br>
                                            <em>- Inten -</em>
                                        </div>
                                        </div>
                                    </div>
                                  </li>

                            </ul>
                          </div>
                          <div class="hidden text-gray-600" id="tab-wm">
                            <p>
                                Webmaster is person who have responsible in technical network of campus and campus website development.
                            </p> <br>
                            <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                            <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal text-white bg-gray-500" >
                                        <button id = "tampil14" class="bg-gray-500 text-white font-bold uppercase text-sm rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-arbi')" onmouseleave="openPopover(event,'popover-arbi')">
                                            Arbi julianto
                                        </button>
                                        <div id="wm" class="mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/arbi.jpeg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Arbi</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D4 Teknik Komputer</div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                            Stay foolish, dont judge evryone<br>
                                                        <em>- Arb -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/arbicuning/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="text-center hidden bg-gray-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-arbi">
                                    <div>
                                      <div class="bg-gray-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                        MOTTO
                                      </div>
                                      <div class="p-3">
                                            Stay foolish, dont judge evryone <br>
                                        <em>- Arbi -</em>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="bg-pink-200 text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal ">
                                        <button id = "tampil15" class=" text-gray-600 font-bold uppercase text-sm rounded outline-none focus:outline-none  mr-1 mb-1 " type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-san')" onmouseleave="openPopover(event,'popover-san')">
                                            Santi
                                        </button>
                                        <div id="wm2"  class=" mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                        <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                <center>
                                                    <div class="foto ">
                                                        <img src="crews/santi.jpeg" class="foto rounded shadow-lg">
                                                    </div>
                                                </center>
                                                <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Santi</p>
                                                <div class=" font-bold text-xl text-gray-900 px-6">D4 Teknik Informatika </div>
                                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                        Follow your dreams and believe in yourself <br>
                                                    <em>- Sans -</em>
                                                </p>
                                                <p class="text-gray-800 text-base px-6 mb-5">
                                                    <a href="https://www.instagram.com/santi_sebelas/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="text-center hidden bg-pink-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-san">
                                        <div>
                                        <div class="bg-pink-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                            MOTTO
                                        </div>
                                        <div class="p-3">
                                                Follow your dreams and believe in yourself  <br>
                                            <em>- Santi -</em>
                                        </div>
                                        </div>
                                    </div>
                                  </li>

                                  <li class="-mb-px mt-2 mr-2 last:mr-0 flex-auto text-center">
                                    <div class="text-xs font-bold px-5 py-3 shadow-lg rounded block leading-normal text-white bg-gray-500" >
                                        <button id = "tampil16" class="bg-gray-500 text-white font-bold uppercase text-sm rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease" onmouseenter="openPopover(event,'popover-ron')" onmouseleave="openPopover(event,'popover-ron')">
                                            M. Nur Hidayatul Khoiron
                                        </button>
                                        <div id="wm3" class="mx-5 my-5 flex flex-wrap no-underline hover:no-underline">
                                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                                    <center>
                                                        <div class="foto ">
                                                            <img src="crews/khoiron.jpg" class="foto rounded shadow-lg">
                                                        </div>
                                                    </center>
                                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Arbi</p>
                                                    <div class=" font-bold text-xl text-gray-900 px-6">D3 Teknik Informatika </div>
                                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                            Hidup untuk belajar<br>
                                                        <em>- Ron -</em>
                                                    </p>
                                                    <p class="text-gray-800 text-base px-6 mb-5">
                                                        <a href="https://www.instagram.com/khoironn14/"><i class="fab fa-instagram text-base mr-1"></i>Follow Me</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="text-center hidden bg-gray-200 text-gray-700 border-0 mt-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words rounded-lg" id="popover-ron">
                                    <div>
                                      <div class="bg-gray-300 opacity-75 font-semibold p-3 mb-0 border-b border-solid border-gray-200 uppercase rounded-t-lg">
                                        MOTTO
                                      </div>
                                      <div class="p-3">
                                            Stay foolish, dont judge evryone <br>
                                        <em>- Khoiron -</em>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                            </ul>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>

    <script type="text/javascript">
        //santi
        //divisi
        function changeAtiveTab(event,tabID){
          let element = event.target;
          while(element.nodeName !== "A"){
            element = element.parentNode;
          }
          ulElement = element.parentNode.parentNode;
          aElements = ulElement.querySelectorAll("li > a");
          tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
          for(let i = 0 ; i < aElements.length; i++){
            aElements[i].classList.remove("text-white");
            aElements[i].classList.remove("bg-blue-600");
            aElements[i].classList.add("text-blue-600");
            aElements[i].classList.add("bg-white");
            tabContents[i].classList.add("hidden");
            tabContents[i].classList.remove("block");
          }
          element.classList.remove("text-blue-600");
          element.classList.remove("bg-white");
          element.classList.add("text-white");
          element.classList.add("bg-blue-600");
          document.getElementById(tabID).classList.remove("hidden");
          document.getElementById(tabID).classList.add("block");
        }
        //modal
        function toggleModal(modalID){
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
          }
          //open devisi
          $(document).ready(function() {
            $("#fg").hide();
            $("#tampil").click(function() {
              $("#fg").slideToggle("slow");
            })
            $("#fg2").hide();
            $("#tampil2").click(function() {
              $("#fg2").slideToggle("slow");
            })
            $("#fg3").hide();
            $("#tampil3").click(function() {
              $("#fg3").slideToggle("slow");
            })
            $("#vg").hide();
            $("#tampil4").click(function() {
              $("#vg").slideToggle("slow");
            })
            $("#vg2").hide();
            $("#tampil5").click(function() {
              $("#vg2").slideToggle("slow");
            })
            $("#vg3").hide();
            $("#tampil6").click(function() {
              $("#vg3").slideToggle("slow");
            })
            $("#dg").hide();
            $("#tampil7").click(function() {
              $("#dg").slideToggle("slow");
            })
            $("#dg2").hide();
            $("#tampil8").click(function() {
              $("#dg2").slideToggle("slow");
            })
            $("#dg3").hide();
            $("#tampil9").click(function() {
              $("#dg3").slideToggle("slow");
            })
            $("#rp").hide();
            $("#tampil10").click(function() {
              $("#rp").slideToggle("slow");
            })
            $("#rp2").hide();
            $("#tampil11").click(function() {
              $("#rp2").slideToggle("slow");
            })
            $("#rp3").hide();
            $("#tampil12").click(function() {
              $("#rp3").slideToggle("slow");
            })
            $("#rp4").hide();
            $("#tampil13").click(function() {
              $("#rp4").slideToggle("slow");
            })
            $("#wm").hide();
            $("#tampil14").click(function() {
              $("#wm").slideToggle("slow");
            })
            $("#wm2").hide();
            $("#tampil15").click(function() {
              $("#wm2").slideToggle("slow");
            })
            $("#wm3").hide();
            $("#tampil16").click(function() {
              $("#wm3").slideToggle("slow");
            })
          });
          //motto
          function openPopover(event,popoverID){
            let element = event.target;
            while(element.nodeName !== "BUTTON"){
            element = element.parentNode;
            }
            var popper = new Popper(element, document.getElementById(popoverID), {
            placement: 'bottom'
            });
            document.getElementById(popoverID).classList.toggle("hidden");
        }
      </script>
</x-app-layout>
</html>
@endsection
