<?

function menuMain($page)
{
	$links = array(
		"/" => "Zeitsparwerk",
		"medien" => "Medien",
		"projekte" => "Projekte",
		"verein" => "Verein",
		"oeffnungszeiten" => "Öffnungszeiten",
		"anfahrt" => "Anfahrt",
		"kontakte" => "Kontakt",
		"synergien_links" => "Synergien & Links",
		"on_facebook" => "on Facebook"

	);
?>
			<div class="pure-u-1-4">
				<div style="border: 0.2em dashed black;">
					<div class="pure-menu pure-menu-open" style="background-color: #ffe647; border: none;">
						<ul>
<?
	foreach( $links as $href => $label ) {
		if ($href=="/") { $href=""; }
		if ($page == $href) {
			echo '<li class="pure-menu-selected"><a href="/'.$href.'">'.$label.'</a></li>'."\n";
		} else {
			echo '<li><a href="/'.$href.'">'.$label.'</a></li>'."\n";
		}
	}
?>
						</ul>
					</div>
				</div>
			</div>

<?
}
function menuZeitsparwerk($page)
{
?>
	<div class="pure-menu pure-menu-open pure-menu-horizontal" style="background-color: #ffe647;">
		<a href="#" class="pure-menu-heading">Zeitsparwerk</a>
		<ul>
			<li<? if($page=="grundriss") echo ' class="pure-menu-selected"';?>><a href="/grundriss">Grundriss</a></li>
		</ul>
	</div>
<?
}

function menuMedien($page)
{
?>
	<div class="pure-menu pure-menu-open pure-menu-horizontal" style="background-color: #ffe647;">
		<a href="/medien" class="pure-menu-heading">Medien</a>
	</div>
<?
}


function menuProjekte($page)
{
	$links = array(
		"fitness_kraft" => "Fitness / Krafttraining",
		"kletterwand" => "Kletterwand",
		"modellbaugetriebe" => "Herstellung eines Modellbaugetriebes",
		"querlenkter_rc_car" => "Querlenker für RC-car"

	);
?>
					<div class="pure-menu pure-menu-open pure-menu-horizontal" style="background-color: #ffe647; ">
		<a href="/projekte" class="pure-menu-heading">Projekte</a>
						<ul>
<?
	foreach( $links as $href => $label ) {
		if ($page == $href) {
			echo '<li class="pure-menu-selected"><a href="/projekte/'.$href.'">'.$label.'</a></li>'."\n";
		} else {
			echo '<li><a href="/projekte/'.$href.'">'.$label.'</a></li>'."\n";
		}
	}
?>
						</ul>
					</div>

<?
}

function menuVerein($page)
{
	$links = array(
		"vorstand_mitglieder" => "Vorstand &amp; Mitglieder",
		"statuten" => "Statuten",
		"mitglied_werden" => "Mitglied werden",
		"mitgliedsbeitrag" => "Mitgliedsbeitrag"

	);
?>
					<div class="pure-menu pure-menu-open pure-menu-horizontal" style="background-color: #ffe647; ">
		<a href="/verein" class="pure-menu-heading">verein</a>
						<ul>
<?
	foreach( $links as $href => $label ) {
		if ($page == $href) {
			echo '<li class="pure-menu-selected"><a href="/verein/'.$href.'">'.$label.'</a></li>'."\n";
		} else {
			echo '<li><a href="/verein/'.$href.'">'.$label.'</a></li>'."\n";
		}
	}
?>
						</ul>
					</div>

<?
}

function menuOeffnungszeiten($page)
{
?>
	<div class="pure-menu pure-menu-open pure-menu-horizontal" style="background-color: #ffe647;">
		<a href="/oeffnungszeiten" class="pure-menu-heading">Öffnungszeiten</a>
	</div>
<?
}

function menuAnfahrt($page)
{
?>
	<div class="pure-menu pure-menu-open pure-menu-horizontal" style="background-color: #ffe647;">
		<a href="/anfahrt" class="pure-menu-heading">Anfahrt</a>
	</div>
<?
}

function menuKontakt($page)
{
?>
	<div class="pure-menu pure-menu-open pure-menu-horizontal" style="background-color: #ffe647;">
		<a href="/kontakt" class="pure-menu-heading">Kontakt</a>
	</div>
<?
}

function menuSynergienLinks($page)
{
?>
	<div class="pure-menu pure-menu-open pure-menu-horizontal" style="background-color: #ffe647;">
		<a href="/synergien_links" class="pure-menu-heading">Synergien &amp; Links</a>
	</div>
<?
}

function menuOnFacebook($page)
{
?>
	<div class="pure-menu pure-menu-open pure-menu-horizontal" style="background-color: #ffe647;">
		<a href="/on_facebook" class="pure-menu-heading">On Facebook</a>
	</div>
<?
}


?>
