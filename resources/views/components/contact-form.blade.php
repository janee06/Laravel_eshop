<div class="py-20 text-center" style="background-color: #fff0f5; color: #c2185b;">
    <h1 style="font-size: 3rem; font-weight: 800;">Kontaktujte nás</h1>

    <div style="max-width: 80rem; margin: 3rem auto; display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <!-- Levá část - Formulář -->
        <div style="background-color: #ffe4ec; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <p style="color: #d6336c; font-size: 1.1rem; margin-bottom: 1.5rem;">Máte otázku? Zanechte nám zprávu a my se vám co nejdříve ozveme.</p>

            <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;">
                @csrf

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <input type="text" name="first_name" placeholder="Jméno"
                        style="padding: 0.75rem; font-size: 1rem; border: 1px solid #f9c7d9; border-radius: 0.5rem; background-color: #ffffff; color: #b95c7a;">
                    <input type="text" name="last_name" placeholder="Příjmení"
                        style="padding: 0.75rem; font-size: 1rem; border: 1px solid #f9c7d9; border-radius: 0.5rem; background-color: #ffffff; color: #b95c7a;">
                </div>

                <input type="email" name="email" placeholder="E-mail"
                    style="padding: 0.75rem; font-size: 1rem; border: 1px solid #f9c7d9; border-radius: 0.5rem; background-color: #ffffff; color: #b95c7a;">

                <textarea name="message" placeholder="Vaše zpráva" rows="4"
                    style="padding: 0.75rem; font-size: 1rem; border: 1px solid #f9c7d9; border-radius: 0.5rem; background-color: #ffffff; color: #b95c7a;"></textarea>

                <button type="submit"
                    style="background-color: #ff69b4; color: white; font-weight: 600; padding: 0.75rem 1.5rem; border-radius: 0.5rem; border: none; cursor: pointer; transition: background-color 0.3s ease;">
                    Odeslat zprávu
                </button>
            </form>
        </div>

        <!-- Pravá část - Obrázek -->
        <div style="display: flex; justify-content: center;">
            <div style="width: 20rem; height: 20rem; background-color: #ffd3e0; border-radius: 1rem; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); display: flex; align-items: center; justify-content: center;">
            <img src="{{ asset('/kocicka.png') }}" alt="Hello Kitty s megafonem"
            style="width: 100%; height: 100%; object-fit: contain; border-radius: 1rem;">
            </div>
        </div>
    </div>
</div>
