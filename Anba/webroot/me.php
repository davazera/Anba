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
$anba['title'] = "Om mig";

$anba['main'] = <<<EOD

<article class="readable">
<h1>Om Mig</h1>

<p>Detta är min me-sida för kursen oophp och mitt namn är Anton Backe och jag är 21 år 
   gammal. Jag är född och uppvuxen i Uppsala och studerar för närvarande min sista termin 
   på kandidatprogrammet i systemvetenskap. "Varför läser du även en distans kurs på BTH då?"
   , anledningen är att jag efter 3 år in i programmet känner att jag saknar vissa programmeringskunskaper, speciellt med koppling mot databaser och servrar. De kurser som vi faktiskt
    har läst har enbart fokuserat på C# där uppgifterna har varit, minst sagt, omotiverande.</p>

<p>Förutom att jag studerar 125% för närvarande så arbetar jag även deltid på Nordea och 
   försöker, så gott det går, att träna på den fritid som blir över. Mitt mål för tillfället
    är att vidareutveckla mina kunskaper för att i framtiden nischa in mig på området 
    systemutveckling med inriktningen banksäkerhet.</p>

<p>Jag har alltid varit intresserad av teknik och mer precist, datorer (eller tja, datakommunikation rent generellt). Jag antar att det 
   kanske går i släkten då min far arbetar som IT-konsult. Det är i varje fall detta intresse
   som jag brinner för och som håller mig motiverad till att lära mig mer om allt som hör till
   området.
   </p>

<p>Avslutningsvis vill jag bara säga att jag har stora förhoppningar på kursen och att det
  jag sett hittils ser ut att stämma överens med de förväntningar jag har! Ser fram emot att lära mig mer! </p>

</article>

EOD;

// Finally, leave it all to the rendering phase of anba.
include(ANBA_THEME_PATH);
