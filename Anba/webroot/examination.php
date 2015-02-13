<?php 
/**
 * This is a anba pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anba variable with its defaults.
include(__DIR__.'/config.php'); 


// Define what to include to make the plugin to work
$anba['stylesheets'][]        = 'css/style.css';
$anba['jquery']               = true;

// Do it and store it all in variables in the anba container.
$anba['title'] = "Redovisning";

$anba['main'] = <<<EOD

<article class="readable">
<h1>Redovisnings sida</h1>

<h1><b>Kursmoment 01:</b></h1>

<p>  - <b>Vilken utvecklingsmiljö använder du?</b> <i>Jag använder WAMPP samt Sublime Text 2. Anledningen till varför jag använder Sublime framför det kurs rekommenderade jEdit är för att jag arbetat med Sublime sen jag började programmera för fyra år sedan och det har således blivit min "go-to" text-editor.</i></p>

<p>  - <b>Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”, var något nytt eller kan du det?</b> <i>Just guiden "20 steg för att komma igång med PHP" kände jag inte gav mig särskilt mycket, jag har redan programmerat på grund nivå med PHP samt javascript som erhåller liknande syntax.</i> </p>

<p>  - <b>Vad döpte du din webbmall Anax till?</b> <i>Anba, mina första två bokstäver ur för- och efternamn.</i></p>

<p>  - <b>Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller något du hoppade över?</b> <i>Jag är fullkomligt kär i strukturen för att vara ärlig. Den är lätt överskådlig, förenklar felsökning och ser väldigt schysst ut (är något pedantisk av mig). Hmm.. jag tror inte att jag hoppade över något, möjligtvis att jag hade velat ha lite mer tid till att gå igenom och kommentera all kod. Men jag gick miste om en vecka då jag var senanmäld till kursen.</i></p>

<p>  - <b>Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?</b>  <i>Att inkludera source.php var inga problem, jag måste dock tyvärr erkänna att jag troligtvis hade haft stora svårigheter att komma fram till en liknande lösning på egen hand. Men jag antar att det delvis är därför jag läser kursen!</i></p>

<p>  - <b>Gjorde du extrauppgiften med GitHub?</b> <i>Yesbox! Slänger in en länk i min footer om någon vill kolla!</i></p>

<p> <b>Allmäna tankar om momentet: </b></p>

<p> <i>Jag är lite fundersam över uppgift 3, "Lägg till funktionen dump() i ditt Anax", var tanken här att vi skulle byta ut den mer graciösa lösningen med echo requesten i myExceptionHandler eller att vi skulle implementera en var_dump bara för att visa att det är det ultimata verktyget för felhantering i PHP?</i></p> 

<p> <i>Oavsett fallet implementerade jag en egen metod, varDumpPrint, i bootstrap.php som hämtar informationen och skriver ut den i .txt filen output, som jag placerade i /src. Detta utifall att utskriften från echo requesten är otillräcklig och man är i behov av ytterligare information. Jag valde att göra detta då jag tyckte att myExceptionHandler funktionen gav en mer överskådlig blick på det fångade exception(et?).
  Jag valde dessutom att använda var_export framför var_dump som metod för detta då export kan skrivas 'one-line' och sköter utskriften som det ser ut i PHP (snyggt). Oftast räcker detta, så länge man inte 'dumpar' något rekursivt.</i></p>

<h1><b>Kursmoment 2</b></h1>

<p>  - <b>Hur väl känner du till objektorienterade koncept och programmeringssätt?</b> <i>Någorlunda bra om man kan uttrycka sig så, jag har tidigare arbetat med C# och java och då har man ju oftast en trevlig IDE som hjälper en på traven vilket underlättar något enormt. Sen var det ju ett tag sen man faktiskt programmerade så det är nog dags att sätta igång igen så man kommer in i det!</i></p> 

<p>  - <b>Jobbade du igenom oophp20-guiden eller skumläste du den?</b> <i>Jag jobbade igenom hela ”guiden” om man säger så, alltså upp till steg 12. Därefter så var det ett flertal saker jag kände igen, t.ex. statiska medlemmar, Singleton och Scope Resolution så då blev det att jag skumläste igenom resten, alltid bra att repetera!</i></p>

<p>	 - <b>Berätta om hur du löste uppgiften med tärningsspelet 100, hur tänkte du och hur gjorde du, hur organiserade du din kod?</b> <i>Jag baserade väldigt mycket på det som guiden gick igenom. Koden är organiserad enligt Anax strukturen och det är därför varje klass ligger separat i varsin mapp i src mappen.  Jag valde att ha en klass som erhåller själva logiken bakom spelet, _DiceLogic, och därefter klasser som alla representerar varsitt objekt med diverse funktioner. Dessa klasser är _Dice (observera att jag även lade in _DicePlayer här då den klassen är så liten),  och _DiceDie. _DicePlayer erhåller egentligen enbart spelarens poäng samt en GET metod för spelarens summa. _DiceDie är själva tärningen och innehåller därför dess 'core-funktionalitet' som faces, roll och GET value. _Dice klassen kopplar samman dessa två klasser och har core-funktionaliteten för hela tärningsspelet. Det är denna klass som _DiceLogic skapar ett objekt utav i samband med att spelet startas. 

Det tog tid och ett flertal var_dumps innan man kom fram till en helt OK lösning. Tyvärr så fick jag aldrig SetName för player att fungera (vet fortfarande inte varför den inte riktigt ville), men jag lämnade ett par kodsnuttar som jag kan arbeta med på fritiden för att vidare utveckla kunskaper. Man börjar känna sig riktigt bortskämd från när man arbetade i Visual Studio med C#. Firebug i all ära, men den är inte riktigt lika pedagogisk. </i></p>

</article>

EOD;

// Finally, leave it all to the rendering phase of anba.
include(ANBA_THEME_PATH);
