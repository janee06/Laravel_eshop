<div class="relative py-8">
    <!-- Left Arrow -->
    <button id="leftArrow" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-full w-10 h-10 flex items-center justify-center z-10">
        &#9664;
    </button>

    <!-- Slider Container -->
    <div id="slider" class="flex overflow-x-auto space-x-4 pb-6 scroll-smooth">
        @foreach($products as $product)
            <div class="min-w-[200px] bg-white shadow-md rounded-lg p-4">
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h3>
                <p class="text-lg text-gray-600">${{ $product->price }}</p>
                <a href="{{ route('products.show', $product->id) }}" class="text-blue-500 hover:text-blue-600">View Product</a>
            </div>
        @endforeach
    </div>

    <!-- Right Arrow -->
    <button id="rightArrow" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-full w-10 h-10 flex items-center justify-center z-10">
        &#9654;
    </button>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.getElementById('slider');
            const leftArrow = document.getElementById('leftArrow');
            const rightArrow = document.getElementById('rightArrow');

            if (!slider || !leftArrow || !rightArrow) return;

            let slideWidth = 0;
            let slideMargin = 16; // Space between slides

            // Function to update slide width
            const updateSlideWidth = () => {
                const firstSlide = slider.children[0];
                if (firstSlide) {
                    slideWidth = firstSlide.offsetWidth + slideMargin;
                }
            };

            // Initial calculation of slide width and update on window resize
            updateSlideWidth();
            window.addEventListener('resize', updateSlideWidth);

            let scrollPosition = 0;

            // Scroll left
            const scrollLeft = () => {
                scrollPosition -= slideWidth;
                if (scrollPosition < 0) {
                    scrollPosition = slider.scrollWidth - slider.clientWidth; // Wrap to end
                }
                slider.scrollLeft = scrollPosition;
            };

            // Scroll right
            const scrollRight = () => {
                scrollPosition += slideWidth;
                if (scrollPosition >= slider.scrollWidth) {
                    scrollPosition = 0; // Wrap to start
                }
                slider.scrollLeft = scrollPosition;
            };

            // Event listeners for arrows
            leftArrow.addEventListener('click', scrollLeft);
            rightArrow.addEventListener('click', scrollRight);
        });
    </script>
@endpush