<?php require 'partials/head.view.php' ?>
<?php require 'partials/nav.view.php' ?>
<?php require 'partials/header.view.php' ?>
    
    <main class="-mt-32 pb-2">
        <div class="mx-auto max-w-7xl mb-20 px-16 py-20 bg-white rounded-lg shadow-lg">
          
            <h1 class="mb-10 font-bold text-2xl">Zadanie rekrutacyjne</h1>

            <h2 class="mb-6 font-bold text-xl">Opis zadania</h2>
            
            <p class="mb-6 leading-relaxed">
                Zadaniem jest napisanie aplikacji w czystym PHP (bez użycia frameworków), która będzie korzystać z API NBP (Narodowy Bank Polski) do pobierania kursów walut. Aplikacja powinna umożliwiać zapisywanie pobranych kursów walut do bazy danych oraz wyświetlanie ich w formie tabeli. Dodatkowo, aplikacja powinna umożliwiać przewalutowanie danej kwoty z wybranej waluty na inną i zapisywanie wyników przewalutowań do bazy danych.
            </p>

            <p class="mb-6 leading-relaxed">
                API NBP: <a class="text-red-400 hover:underline" href="http://api.nbp.pl" target="_blank">http://api.nbp.pl</a>
            </p>

            <h2 class="mb-6 font-bold text-xl">Podczas oceny rozwiązania pod uwagę były brane:</h2>

            <ul class="list-disc ml-10 space-y-2">
                <li>Poprawność działania aplikacji</li>
                <li>Jakość kodu (czytelność, organizacja, nazewnictwo zmiennych, komentarze itp.)</li>
                <li>Wykorzystanie obiektowego podejścia w czystym PHP</li>
                <li>Estetykę pracy i kodu</li>
                <li>Poprawność integracji z API NBP i bazą danych</li>
                <li>Zgodność z wymaganiami</li>
            </ul>
        
        </div>
    </main>

<?php require 'partials/footer.view.php' ?>