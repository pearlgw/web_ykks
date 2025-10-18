<!-- About Us Section -->
<section class="py-20 bg-white" id="about">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-12 gap-12 pt-16">

            <!-- Left Content (col-span-7) -->
            <div class="col-span-12 md:col-span-7 flex items-end">
                <div class="w-full">
                    <div class="mb-6">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-12 h-1 bg-gray-800"></div>
                            <span class="text-sm font-semibold text-gray-800 uppercase tracking-wider pl-1">ABOUT
                                US</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight pl-16">
                            We provide a place for families and children
                        </h2>
                    </div>

                    <p class="text-gray-600 leading-relaxed mb-8 pl-16 text-justify">
                        Founded in 1990, Yayasan Kesejahteraan Keluarga Soegijapranata (YKKS) is a non-profit
                        organization committed to promoting family welfare, education, and social empowerment in
                        Indonesia. With a deep belief that strong families build strong communities, YKKS provides
                        programs that support women, children, and vulnerable groups through education, health, and
                        community-based initiatives. Over the years, YKKS has grown into a trusted foundation that
                        uplifts lives and encourages inclusive development across local communities.
                    </p>

                    <button
                        class="bg-[#009ED6] hover:bg-cyan-700 hover:text-white px-8 py-3 rounded-md font-medium transition ml-16">
                        Learn more
                    </button>
                </div>
            </div>

            <!-- Right Image (col-span-5) -->
            <div class="col-span-12 md:col-span-5 relative">
                <div class="rounded-2xl overflow-hidden shadow-xl h-[500px]">
                    <img src="{{ asset('img/about.jpg') }}" alt="Children playing outdoor"
                        class="w-full h-full object-cover">

                    <!-- Play Button Overlay -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <button
                            class="bg-white hover:bg-gray-100 rounded-full w-20 h-20 flex items-center justify-center shadow-lg transition group">
                            <i class="fas fa-play text-cyan-400 text-2xl ml-1 group-hover:scale-110 transition"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="pt-16 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <h3 class="text-sm font-semibold text-gray-700 uppercase tracking-wider whitespace-nowrap">OUR PARTNERS
            </h3>
            <div class="flex-grow h-px bg-gray-300 ml-16"></div>
        </div>

        <div class="flex flex-wrap items-center gap-12">
            <!-- ChildFund Logo -->
            <img src="{{ asset('img/image 6.png') }}" alt="ChildFund International" class="h-12 object-contain">

            <!-- USAID Logo -->
            <img src="{{ asset('img/image 7.png') }}" alt="USAID" class="h-12 object-contain">

            <!-- Tanoto Foundation Logo -->
            <img src="{{ asset('img/image 8.png') }}" alt="Tanoto Foundation" class="h-12 object-contain">
        </div>
    </div>
</section>
