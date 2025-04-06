@extends('layouts.app')

@section('content')
<div class="h-20"></div>
<div class="container mx-auto py-10" style="background-color: #fff0f5; border-radius: 1rem; padding: 2rem;">
    <h1 class="text-5xl font-semibold text-center mb-8" style="color: #c2185b;">Časté dotazy</h1>
    <div style="display: flex; flex-direction: column; gap: 1.5rem;">

        <!-- První dotaz -->
        <div>
            <button style="width: 100%; text-align: left; font-size: 1.25rem; font-weight: 600; color: #c2185b; background-color: #ffe4ec; padding: 1rem 1.5rem; border-radius: 0.75rem; display: flex; justify-content: space-between; align-items: center; border: none;"
                    onclick="toggleAnswer(this)">
                Jak dlouho trvá zpracování mé žádosti?
                <span style="margin-left: 1rem;">+</span>
            </button>
            <div class="hidden mt-2" style="color: #b95c7a; padding-left: 1.5rem; padding-top: 0.5rem;">
                Zpracování žádosti obvykle trvá 1–2 pracovní dny. Budeme vás informovat e-mailem.
            </div>
        </div>

        <!-- Druhý dotaz -->
        <div>
            <button style="width: 100%; text-align: left; font-size: 1.25rem; font-weight: 600; color: #c2185b; background-color: #ffe4ec; padding: 1rem 1.5rem; border-radius: 0.75rem; display: flex; justify-content: space-between; align-items: center; border: none;"
                    onclick="toggleAnswer(this)">
                Jak mohu kontaktovat podporu?
                <span style="margin-left: 1rem;">+</span>
            </button>
            <div class="hidden mt-2" style="color: #b95c7a; padding-left: 1.5rem; padding-top: 0.5rem;">
                Podporu můžete kontaktovat prostřednictvím našeho e-mailu support@firma.cz nebo telefonicky na čísle 123 456 789.
            </div>
        </div>

        <!-- Třetí dotaz -->
        <div>
            <button style="width: 100%; text-align: left; font-size: 1.25rem; font-weight: 600; color: #c2185b; background-color: #ffe4ec; padding: 1rem 1.5rem; border-radius: 0.75rem; display: flex; justify-content: space-between; align-items: center; border: none;"
                    onclick="toggleAnswer(this)">
                Nabízíte vrácení peněz?
                <span style="margin-left: 1rem;">+</span>
            </button>
            <div class="hidden mt-2" style="color: #b95c7a; padding-left: 1.5rem; padding-top: 0.5rem;">
                Ano, nabízíme vrácení peněz do 30 dnů od zakoupení, pokud nejste s produktem spokojeni.
            </div>
        </div>
    </div>
</div>

<script>
function toggleAnswer(button) {
    const answer = button.nextElementSibling;
    const isHidden = answer.classList.contains('hidden');
    answer.classList.toggle('hidden');
    button.querySelector('span').textContent = isHidden ? '−' : '+';
}
</script>
@endsection
