<?
function redirect_to( $uri )
{
  header("Location: http://" . $_SERVER['HTTP_HOST']
                      . rtrim(dirname($_SERVER['PHP_SELF']), '/\\')
                      . "/" . $uri);
}

$redirects = array(
	"Zeitsparwerk" => "",
	"Zeitsparwerk:Grundriss" => "grundriss",
	"Zeitsparwerk:Newsletter" => "",
	"Medien" => "medien",
	"Projekte" => "projekte",
	"Projekte:Fitness_/_Krafttraining" => "projekte/fitness_kraft",
	"Projekte:Kletterwand" => "projekte/kletterwand",
	"Projekte:Herstellung_eines_Modellbaugetriebes" => "projekte/modellbaugetriebe",
	utf8_decode("Projekte:Querlenker_für_RC-car") => "projekte/querlenker_rc_car",
	"Projekte:Kupferdampfmaschine" => "",
	"Projekte:Feuertornado" => "",
	"Veranstaltungen,_Kurse_und_Workshops" => "",
	"Veranstaltungen,_Kurse_und_Workshops:Der_Kapitalistische_Roboter" => "",
	"Veranstaltungen,_Kurse_und_Workshops:Computerkurse" => "",
	"Verein" => "verein",
	"Verein:Vorstand_&amp;_Mitglieder" => "verein/vorstand_mitglieder",
	"Verein:Statuten" => "verein/statuten",
	"Verein:Mitglied_werden" => "verein/mitglied_werden",
	"Verein:Mitgliedsbeitrag" => "verein/mitgliedsbeitrag",
	"%D6ffnungszeiten" => "oeffnungszeiten",
	"Anfahrt" => "anfahrt",
	"Synergien_&amp;_Links" => "synergien_links",
	"on_Facebook" => "on_facebook"

);
echo "<pre>";
print_r($_GET);
echo "</pre>";

foreach ($redirects as $old => $new) {
	if (isset($_GET[$old])) {
		redirect_to($new);
		exit(0);
	}
}
?>
<?


require "header.php";
require "menu.php";
menuMain("");
?>
			<div class="pure-u-3-4">
				<div style="border: 0.2em dashed black;">
<?
menuZeitsparwerk("");
?>
				</div>
				<div id="main" style="padding: 1.5em;">
      <h1>Zeitsparwerk</h1><div style="text-align: center;"><img src="./images/zsw-logo-front.jpg"><br></div><br>Ein Raum mitten in Wörgl in dem die Zeit stehen bleibt, rückwärts läuft, und beschleunigt.<div><br></div><div><a href="http://www.slideshare.net/solarthermienator/wwwzeitsparwerkorg-jahresbericht-2010">Zeitsparwerk Jahresbericht 2010: ONLINE</a></div><div><div><a href="http://solarthermienator.com/sharingiscaring/2010-Zeitsparwerk-Jahresbericht-full-webscale.pdf">Zeitsparwerk Jahresbericht 2010: DOWNLOAD (PDF 11mb)</a></div><br>Im Januar des Jahres 2009 haben sich einige Freunde hier in Wörgl zusammen gefunden, und beschlossenen einen kreativen Freiraum für praktische Arbeiten einzurichten. Ein Raum der allen offensteht, und in dem man Projekte beliebigen Ausmaßes und beliebiger Zielsetzung realisieren kann. Angelehnt an Hackerspaces wie das Metalab in Wien, sollte ein Arbeitsplatz entstehen an dem der Phantasie keine Grenzen gesetzt sind.<br><br>Kurzentschlossen wurde eine größere Lagerhalle (130m²) angemietet, die auch praktischer weise einen angrenzenden Seminarraum beinhaltet. Als Trägerorganisation wurde ein Verein errichtet, (mit dem Treffenden Namen "Verein zur Förderung der HeimwerkerInnen Kultur") der die Finanzierung der Miete mittels Mitgliedsgebühren und Veranstaltungen übernimmt. Die Einrichtung und Ausstattung des Zeitsparwerks funktioniert hauptsächlich über Sachspenden der Mitglieder.<br><br>Wer die Arbeit im Zeitsparwerk unterstützen möchte, oder auch selbst dort arbeiten möchte ist eingeladen Mitglied zu werden. Alternativ freuen wir uns natürlich über jeden der einfach eine unserer Veranstaltungen besucht.<br><br>Woran wird gearbeitet im Zeitsparwerk? Grundsätzlich möglich und gewünscht ist alles, aber als Anregung zwei konkrete Projekte die unter anderem als Inspiration für die Einrichtung des Zeitsparwerks dienten.<br><ul><li><a href="http://propirate.net/betonboxen/">Betonboxen Bau von Markus Egger</a></li><li><a href="http://wakalixes.propirate.net/elektronik/audio-dac/">Audio DAC von Albert Frisch</a></li></ul>Viel Spaß, und bis hoffentlich bald wünscht:<br>Der Obmann,<br>Dipl.-Ing. Richard Spindler<br>
				</div>
			</div>


<?

require "footer.php";
?>
