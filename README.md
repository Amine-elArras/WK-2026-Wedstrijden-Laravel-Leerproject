WK 2026 Wedstrijden - Laravel Leerproject

Over dit project

Dit project is gemaakt als leerproject om kennis te maken met Laravel en het werken met externe API's. Het is onderdeel van mijn voorbereiding op mijn stage, die start na het laatste half jaar van mijn laatste schooljaar.

Het doel is niet om een perfect afgewerkt eindproduct te bouwen, maar om praktijkervaring op te doen met:


Het opzetten van een Laravel-project
Het ophalen en verwerken van data via een externe API (football-data.org)
Blade templating
Basisstructuur van MVC (Model-View-Controller)
Git en GitHub workflow (branches, commits, pushes)


Functionaliteit

De applicatie toont een overzicht van de wedstrijden van het WK 2026, opgesplitst in:


Live wedstrijden (bezig)
Aankomende wedstrijden (nog te spelen)
Gespeelde wedstrijden (met eindstand)


Status van het project

Let op: dit project is nog in ontwikkeling en dient als leeromgeving. Niet alle functionaliteit is af of foutloos.

Wat werkt al:


Wedstrijden ophalen via API
Onderverdeling in live, aankomend en gespeeld
Basis styling


Wat nog moet gebeuren:


Foutafhandeling bij API-problemen
Filteren op groep of land
Verbeterde responsive styling
Caching van API-resultaten


Gebruikte technologieen


Laravel
Blade templating
football-data.org API
Vite (voor CSS/JS bundling)


Installatie (lokaal draaien)

bashgit clone https://github.com/jouw-gebruikersnaam/jouw-repo.git
cd jouw-repo
composer install
npm install && npm run build
cp .env.example .env
php artisan key:generate

Voeg je API-key toe aan .env:

API_KEY=API_KEY 

Start de development server:

bashphp artisan serve

Branches


main - stabiele versie
develop - actieve ontwikkeling (huidige werkbranch)


Waarom dit project

Dit project is bedoeld als leertraject, niet als productieklare applicatie. Fouten, work-in-progress code en experimentele oplossingen maken bewust deel uit van het leerproces richting mijn stage.