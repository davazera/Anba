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

<p>Detta är min redovisnings sida för kursen oophp.</p>

<p><b>Kursmoment 01:</b></p>

<p>  - <b>Vilken utvecklingsmiljö använder du?</b> <i>Jag använder WAMPP samt Sublime Text 2. Anledningen till varför jag använder Sublime framför det kurs rekommenderade jEdit är för att jag arbetat med Sublime sen jag började programmera för fyra år sedan och det har således blivit min "go-to" text-editor.</i></p>

<p>  - <b>Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”, var något nytt eller kan du det?</b> <i>Just guiden "20 steg för att komma igång med PHP" kände jag inte gav mig särskilt mycket, jag har redan programmerat på grund nivå med PHP samt javascript som erhåller liknande syntax.</i> </p>

<p>  - <b>Vad döpte du din webbmall Anax till?</b> <i>Anba, mina första två bokstäver ur för- och efternamn.</i></p>

<p>  - <b>Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller något du hoppade över?</b> <i>Jag är fullkomligt kär i strukturen för att vara ärlig. Den är lätt överskådlig, förenklar felsökning och ser väldigt schysst ut (är något pedantisk av mig). Hmm.. jag tror inte att jag hoppade över något, möjligtvis att jag hade velat ha lite mer tid till att gå igenom och kommentera all kod. Men jag gick miste om en vecka då jag var senanmäld till kursen.</i></p>

<p>  - <b>Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?</b>  <i>Att inkludera source.php var inga problem, jag måste dock tyvärr erkänna att jag troligtvis hade haft stora svårigheter att komma fram till en liknande lösning på egen hand. Men jag antar att det delvis är därför jag läser kursen!</i></p>

<p>  - <b>Gjorde du extrauppgiften med GitHub?</b> <i>Jag planerar att göra den!</i></p>

<p> <b>Allmäna tankar om momentet: </b></p>

<p> <i>Jag är lite fundersam över uppgift 3, "Lägg till funktionen dump() i ditt Anax", var tanken här att vi skulle byta ut den mer graciösa lösningen med echo requesten i myExceptionHandler eller att vi skulle implementera en var_dump bara för att visa att det är det ultimata verktyget för felhantering i PHP?</i></p> 

<p> <i>Oavsett fallet implementerade jag en egen metod, varDumpPrint, i bootstrap.php som hämtar informationen och skriver ut den i .txt filen output, som jag placerade i /src. Detta utifall att utskriften från echo requesten är otillräcklig och man är i behov av ytterligare information. Jag valde att göra detta då jag tyckte att myExceptionHandler funktionen gav en mer överskådlig blick på det fångade exception(et?).
  Jag valde dessutom att använda var_export framför var_dump som metod för detta då export kan skrivas 'one-line' och sköter utskriften som det ser ut i PHP (snyggt). Oftast räcker detta, så länge man inte 'dumpar' något rekursivt.</i></p>

</article>

EOD;

// Finally, leave it all to the rendering phase of anba.
include(ANBA_THEME_PATH);
