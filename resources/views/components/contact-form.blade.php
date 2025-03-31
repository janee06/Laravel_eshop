<div class="py-100 bg-white text-gray-800 text-center">
    <h1 class="text-5xl font-extrabold">Kontaktujte nás</h1>

    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center mt-12">
        <!-- Levá část - Formulář -->
        <div class="bg-gray-100 p-8 rounded-xl shadow-md">
            <p class="text-gray-600 text-lg mb-6">Máte otázku? Zanechte nám zprávu a my se vám co nejdříve ozveme.</p>

            <form action="#" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-2 gap-4">
                    <div class="relative">
                        <input type="text" id="first_name" name="first_name" placeholder="Jméno"
                            class="w-full border border-gray-300 focus:border-blue-500 outline-none bg-white p-3 text-lg rounded-md shadow-sm text-gray-800">
                    </div>

                    <div class="relative">
                        <input type="text" id="last_name" name="last_name" placeholder="Příjmení"
                            class="w-full border border-gray-300 focus:border-blue-500 outline-none bg-white p-3 text-lg rounded-md shadow-sm text-gray-800">
                    </div>
                </div>

                <div class="relative">
                    <input type="email" id="email" name="email" placeholder="E-mail"
                        class="w-full border border-gray-300 focus:border-blue-500 outline-none bg-white p-3 text-lg rounded-md shadow-sm text-gray-800">
                </div>

                <div class="relative">
                    <textarea id="message" name="message" placeholder="Vaše zpráva"
                        class="w-full border border-gray-300 focus:border-blue-500 outline-none bg-white p-3 text-lg rounded-md shadow-sm text-gray-800 h-24"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 text-white font-semibold px-6 py-3 rounded-md shadow-md hover:bg-blue-600 transition duration-300">
                    Odeslat zprávu
                </button>
            </form>
        </div>

        <!-- Pravá část - Obrázek -->
        <div class="flex justify-center">
            <div class="w-80 h-80 bg-gray-200 rounded-xl shadow-lg flex items-center justify-center">
            
                <span class="text-gray-500 text-lg">Zde bude obrázek</span>
            </div>
        </div>
    </div>
</div>