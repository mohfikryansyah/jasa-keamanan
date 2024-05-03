<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jasa Keamanan - PT. Dinar
        Mutiara Sakti
        Bersinar</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins">


    <nav class="bg-blue-900 border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="https://localhost" class="flex items-center space-x-3 rtl:space-x-reverse">
                {{-- <img src="{{ asset('images/logo/security-logo.png') }}" class="h-8" alt="PT. Dinar Mutiara Sakti Bersinar Logo" /> --}}
                <span class="self-center md:text-2xl text-lg font-semibold whitespace-nowrap text-gray-100">PT. Dinar
                    Mutiara Sakti
                    Bersinar</span>
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                {{-- <a href="tel:5541251234" class="text-sm  text-gray-400 dark:text-white hover:underline">(555)
                    412-1234</a> --}}
                {{-- <a href="#" class="text-sm  text-blue-500 dark:text-blue-500 hover:underline">Login</a> --}}
            </div>
        </div>
    </nav>
    <nav class="bg-gray-100 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto overflow-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-md">
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#layanan" class="text-gray-900 dark:text-white hover:underline">Layanan</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Pemeliharaan</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline truncate">Visi & Misi</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Pelaporan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-0">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="md:py-1 py-8" data-aos="fade-right">
                    <p
                        class="bg-green-100 text-green-800 md:text-md font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                        Pengamanan
                    </p>
                    <p
                        class="bg-blue-100 text-blue-800 md:text-md font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                        Security
                    </p>
                    <p
                        class="bg-orange-100 text-orange-800 md:text-md font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-gray-700 dark:text-orange-400 mb-2">
                        Satpam
                    </p>
                    <h2 class="text-gray-900 dark:text-white md:text-3xl text-2xl font-extrabold mb-2">Tenaga Jasa
                        Keamanan</h2>
                    <p class="md:text-lg text-md font-normal text-gray-500 dark:text-gray-400 mb-4">Kami dapat menjamin
                        dan
                        memastikan bahwa setiap pengawasan yang kami berikan mematuhi Standar Security yang relevan dan
                        Terintegrasi dengan kebutuhan Spesifik dari setiap klien kami.</p>
                    <a href="#layanan"
                        class="text-blue-600 dark:text-blue-500 hover:underline font-medium md:text-lg text-md inline-flex items-center">Baca
                        selengkapnya
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="md:py-0 py-8 flex justify-center" data-aos="fade-left">
                    <img class="h-100 max-w-full" src="{{ asset('images/logo/security-guard.png') }}"
                        alt="image description">
                </div>
            </div>
        </div>
    </section>

    <section id="layanan" class="bg-blue-900 dark:bg-gray-900">
        <div class="md:py-8 py-6 px-4 mx-auto max-w-screen-lg">
            <h1 class="text-3xl font-semibold text-white text-center md:pb-8 pb-6">Layanan</h1>
            <p class="mb-8 text-lg font-light text-gray-300 lg:text-md dark:text-gray-400 font-inter" data-aos="fade-up">
                Personil Keamanan kami menerima beberapa Pelatihan yang paling Komprehensif yang tersedia saat ini dan
                dilengkapi dengan Sertifikat Security, kerja Profesional serta laporan mendetail setiap harinya, kami
                menjaga Keamanan dengan Standar Kualitas yang tinggi dan Profesional.
            </p>
            <p class="mb-8 text-lg font-light text-gray-300 lg:text-md dark:text-gray-400 font-inter" data-aos="fade-up">
                PT. Dinar Mutiara Sakti Bersinar menyediakan Jasa Tenaga Pengamanan/Security/Satpam untuk menjadi
                penanggung jawab dan pengelolaan pengamanan di berbagai jenis usaha yang dimiliki oleh para klien.
                Dengan berbagai pengalaman yang kami miliki serta para personil yang terampil dan profesional di
                bidangnya kami siap mengamankan serta menjaga dan menjadi solusi terbaik untuk masalah keamanan Anda.
            </p>
            <p class="mb-8 text-lg font-light text-gray-300 lg:text-md dark:text-gray-400 font-inter" data-aos="fade-up">
                Kami merupakan Perusahaan Outsourcing terpercaya yang memiliki jaringan luas. Kami memiliki Sertifikat
                serta Legalitas yang lengkap dan sesuai Normatif Pemerintah / mengikuti aturan Pemerintah yang berlaku.
                Tim Manajemen yang lengkap: Development, Oprasional, Rekrutmen, HRD yang berdedikasi pada bidangnya
                masing-masing. kami siap memberikan pelayanan terbaik dimanapun anda berada. berbagai jenis lokasi
                seperti: Perhotelan, Apartemen, Gedung, Pabrik, Rumah Sakit, Kantor, Perkantoran, Bank, Mall, Objek
                Vital dan lain sebagainya.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 pb-7">
                <div
                    class="bg-gray-300 rounded-lg shadow-xl border border-gray-300 border-opacity-25 hover:scale-105 transition duration-300" data-aos="fade-right">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/layanan/gedung-apart.png') }}"
                        alt="">
                </div>
                <div
                    class="bg-gray-300 rounded-lg shadow-xl border border-gray-300 border-opacity-25 hover:scale-105 transition duration-300" data-aos="fade-up">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/layanan/pabrik.png') }}"
                        alt="">
                </div>
                <div
                    class="bg-gray-300 rounded-lg shadow-xl border border-gray-300 border-opacity-25 hover:scale-105 transition duration-300" data-aos="fade-left">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/layanan/bank.png') }}"
                        alt="">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-gray-300 p-6 rounded-lg hover:scale-105 transition duration-300" data-aos="fade-up">
                    <h1 class="text-3xl font-semibold text-gray-800 pb-3">Pelaporan</h1>
                    <p class="mb-8 text-lg font-light text-gray-800 lg:text-md dark:text-gray-400 font-inter">
                        PT. Dinar Mutiara Sakti Bersinar wajib melakukan pelaporan setiap harinya, setiap minggu dan
                        dievaluasi setiap bulan. Sehingga kita pastikan semua terkontrol sebagai bahan evaluasi kinerja
                        dan kenyamanan bagi pengguna.
                    </p>
                </div>
                <div class="bg-gray-300 p-6 rounded-lg hover:scale-105 transition duration-300" data-aos="fade-up">
                    <h1 class="text-3xl font-semibold text-gray-800 pb-3">Pemeliharaan</h1>
                    <p class="mb-8 text-lg font-light text-gray-800 lg:text-md dark:text-gray-400 font-inter">
                        Proses Pemeliharaan merupakan hal penting bagi perusahan kami. mempertahankan layanan
                        pemeliharaan sesuai kontrak yang berlaku untuk memastikan keamanan kami tetap terawasi dan
                        terlindungi. Proses Pemeliharaan dilakukan dalam mencegah adanya kerusakan sehinggah dapat
                        memberikan suatu kenyamanan bagi pengguna.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section id="visimisi" class="bg-gray-100 dark:bg-gray-900">
        <div class="md:py-8 py-6 px-4 mx-auto max-w-screen-lg">
            <h1 class="text-3xl font-semibold text-gray-800 text-center md:pb-8 pb-6">Visi & Misi</h1>
            <div class="grid md:grid-cols-2 gap-8">
                <div
                    class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12" data-aos="fade-up-right">

                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Visi</h2>
                    <p class="text-md font-normal text-gray-500 dark:text-gray-400 mb-4">
                        PT. Dinar Mutiara Sakti Bersinar adalah Badan Usaha dengan komitmen penuh tanggung jawab atas
                        keseimbangan antara kepentingan bersama dan kesejahteraan seluruh karyawan security. kami
                        bertekad menjadikan petugas security layak dan membuka lebar kesempatan bagi seluruh karyawan
                        untuk meningkatkan karir. pengembangan internal berkesinambungan dan ini menjadi faktor kunci
                        keseriusan kami.

                    </p>
                    <blockquote
                        class="p-4 my-4 border-s-4 border-gray-300 bg-gray-50 dark:border-gray-500 dark:bg-gray-800">
                        <svg class="w-8 h-8 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                        <p class="text-lg italic font-medium leading-relaxed text-gray-900 dark:text-white">
                            Menjadi Perusahaan yang terbaik, terpercaya dalam memikul tanggung jawab untuk memberikan
                            keamanan dan kenyamanan terhadap rekan kerja kami.

                            PT. Dinar Mutiara Sakti Bersinar memiliki tekat yaitu komitmen profesionalisme, terstruktur
                            dengan sistem kontrol manajemen yang kuat dan dukungan finansial yang baik


                        </p>
                    </blockquote>
                </div>
                <div
                    class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12" data-aos="fade-up-left">
                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Misi</h2>
                    <p class="text-md font-normal text-gray-500 dark:text-gray-400 mb-4">
                        PT. Dinar Mutiara Sakti Bersinar melakukan perekrutan, pelatihan, penempatan dan pengembangan
                        SDM sehingga tercapainya sasaran yang diinginkan.
                        Dengan berjalannya waktu kami menganalisa kebutuhan pelanggan terhadap manajemen pengelolaan
                        suatu Perusahaan berupa Perhotelan, Apartemen, Gedung, Pabrik, Rumah Sakit, Kantor, Perkantoran,
                        Bank, Mall, Objek Vital dan lain sebagainya. maupun penanganan keamanan terpadu demi lancarnya
                        kegiatan.

                    </p>
                    <blockquote
                        class="p-4 my-4 border-s-4 border-gray-300 bg-gray-50 dark:border-gray-500 dark:bg-gray-800">
                        <svg class="w-8 h-8 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                        <p class="text-lg italic font-medium leading-relaxed text-gray-900 dark:text-white">
                            Mengelola resiko menjadi peluang, menciptakan rasa aman dan nyaman dalam usaha.
                            Mencegah kejadian yang tidak diinginkan sehingga memberikan solusi tepat penanganan masalah
                            yang mungkin timbul. Senantiasa menjalin hubungan dan menjadi mitra terdekat dari aparat
                            Pemerintah dalam memberikan rasa aman teradap rekan kerja dan kepada masyarakat.

                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section id="alamat" class="bg-gray-100 dark:bg-gray-900">
        <div class="md:py-8 py-6 px-4 mx-auto max-w-screen-lg">
            <h1 class="text-3xl font-semibold text-gray-800 text-center md:pb-8 pb-6">Alamat</h1>
            <p class="text-lg pb-4 text-gray-500">
                Jalan Sultan Botutihe
                RT 001 RW 001
                Kelurahan Moodu Kecamatan Kota Timur
                Kota Gorontalo
            </p>
            <iframe data-aos="zoom-in"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.547351122548!2d123.05486488279901!3d0.5464874184035873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32792b33c1598faf%3A0x20acc14cd3fed12!2sMoodu%2C%20Kec.%20Kota%20Tim.%2C%20Kota%20Gorontalo%2C%20Gorontalo!5e0!3m2!1sid!2sid!4v1714720860226!5m2!1sid!2sid"
                width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>




    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <p class="text-sm text-gray-500 text-center dark:text-gray-400">
                    © 2024. PT. Dinar
                    Mutiara Sakti
                    Bersinar
                </p>
        </div>
    </footer>




    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
