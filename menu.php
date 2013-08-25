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

function menuMedien()
{
}


function menuProjekte()
{
}

function menuVeranstaltungenKurseUndWorkshops()
{
}

function menuVerein()
{
}

function menuOeffnungszeiten()
{
}

function menuAnfahrt()
{
}

function menuKontakt()
{
}

function menuSynergienUndLinks()
{
}

function menuOnFacebook()
{
}


?>
