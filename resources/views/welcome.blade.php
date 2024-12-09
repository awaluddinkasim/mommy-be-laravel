<x-landing-page>

    <!-- Banner -->
    <section id="home" class="banner video-bg bottom-oval">

        <!-- Container -->
        <div class="container">

            <div class="row align-items-center">

                <!-- Content -->
                <div class="col-12 col-lg-6 offset-lg-3">

                    <!-- Banner text -->
                    <div class="banner-text text-center">

                        <h1 class="wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0s">
                            {{ config('app.name') }}
                        </h1>

                        <p class="wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.3s">
                            Mommy Be hadir untuk membantu ibu hamil dan menyusui dalam memantau kesehatan dan
                            perkembangan selama kehamilan serta masa menyusui.
                        </p>

                        <div class="button-store wow fadeInUp" data-wow-offset="10" data-wow-duration="1s"
                            data-wow-delay="0.6s">

                            {{-- <a href="#" class="d-inline-flex align-items-center m-2 m-sm-0 me-sm-3"
                                target="_blank">
                                <img src="assets/lp/images/banner/google-play.png" alt="" />
                            </a> --}}

                            <a href="{{ route('download') }}" class="d-inline-flex align-items-center m-2 m-sm-0">
                                <img src="{{ asset('assets/lp/images/banner/download.png') }}" alt="" />
                            </a>

                        </div>

                    </div>

                    <div class="empty-30"></div>

                </div>

            </div>

        </div>

        <!-- Image -->
        <div class="banner-image-center w-100 wow fadeInUp" data-wow-offset="10" data-wow-duration="1s"
            data-wow-delay="0.3s">
            <img src="assets/lp/images/banner/video-welcome.png" alt="" />
        </div>

    </section>

    <!-- Features -->
    <section id="features" class="bg-grey">

        <!-- Container -->
        <div class="container">

            <!-- Section title -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">

                    <div class="section-title text-center">
                        <h3>Fitur Aplikasi</h3>
                        <p>Aplikasi ini memungkinkan Anda untuk mengelola data kehamilan Anda dengan mudah. Berikut
                            beberapa fitur yang tersedia:</p>
                    </div>

                </div>
            </div>

            <div class="row d-flex align-items-center">

                <!-- Left -->
                <div class="col-12 col-md-6 col-lg-4">

                    <ul class="features-item">

                        <!-- Feature box -->
                        <li>
                            <div class="feature-box box-left d-flex">

                                <!-- Box icon -->
                                <div class="box-icon">
                                    <div class="icon icon-basic-gear"></div>
                                </div>

                                <!-- Box Text -->
                                <div class="box-text align-self-center align-self-md-start">
                                    <h4>Data Bayi</h4>
                                    <p>Kelola dan pantau data tentang bayi Anda dengan mudah.</p>
                                </div>

                            </div>
                        </li>

                        <!-- Feature box -->
                        <li>
                            <div class="feature-box box-left d-flex">

                                <!-- Box icon -->
                                <div class="box-icon">
                                    <div class="icon icon-basic-sheet-txt"></div>
                                </div>

                                <!-- Box Text -->
                                <div class="box-text align-self-center align-self-md-start">
                                    <h4>Obstetri</h4>
                                    <p>Panduan seputar kehamilan dan persalinan ibu.</p>
                                </div>

                            </div>
                        </li>

                        <!-- Feature box -->
                        <li>
                            <div class="feature-box box-left d-flex">

                                <!-- Box icon -->
                                <div class="box-icon">
                                    <div class="icon icon-basic-alarm"></div>
                                </div>

                                <!-- Box Text -->
                                <div class="box-text align-self-center align-self-md-start">
                                    <h4>Nutrisi Harian</h4>
                                    <p>Lacak dan rencanakan asupan nutrisi harian.</p>
                                </div>

                            </div>
                        </li>

                    </ul>
                </div>

                <!-- Center -->
                <div class="col-12 col-lg-4 d-none d-lg-block">
                    <div class="features-thumb text-center">
                        <img src="{{ asset('assets/lp/images/features/awesome-features.png') }}" alt="" />
                    </div>
                </div>

                <!-- Right -->
                <div class="col-12 col-md-6 col-lg-4">

                    <ul class="features-item">

                        <!-- Feature box -->
                        <li>
                            <div class="feature-box d-flex">

                                <!-- Box icon -->
                                <div class="box-icon">
                                    <div class="icon icon-basic-share"></div>
                                </div>

                                <!-- Box Text -->
                                <div class="box-text align-self-center align-self-md-start">
                                    <h4>Status Gizi</h4>
                                    <p>
                                        Lacak dan pantau status gizi kehamilan.
                                    </p>
                                </div>

                            </div>
                        </li>

                        <!-- Feature box -->
                        <li>
                            <div class="feature-box d-flex">

                                <!-- Box icon -->
                                <div class="box-icon">
                                    <div class="icon icon-basic-clockwise"></div>
                                </div>

                                <!-- Box Text -->
                                <div class="box-text align-self-center align-self-md-start">
                                    <h4>Monitor Laktasi</h4>
                                    <p>Catat dan pantau jadwal serta durasi menyusui.</p>
                                </div>

                            </div>
                        </li>

                        <!-- Feature box -->
                        <li>
                            <div class="feature-box d-flex">

                                <!-- Box icon -->
                                <div class="box-icon">
                                    <div class="icon icon-basic-sheet-multiple"></div>
                                </div>

                                <!-- Box Text -->
                                <div class="box-text align-self-center align-self-md-start">
                                    <h4>Screening PPd</h4>
                                    <p>Skrining kesehatan mental ibu pasca persalinan.</p>
                                </div>

                            </div>
                        </li>

                    </ul>
                </div>

            </div>

        </div>

    </section>

</x-landing-page>
