<header>
	<div class="fixed-header">
		<div class="container">
			<h1><a href="/"><img class="logo" src="/sites/all/themes/spirit/assets/images/logo.png" alt="The Spirit of the Rivewards" /></a></h1>
			<div class="left-links">
				<div id="sectionsToggle" class="btn sections">Sections</div>
				<div id="locationsToggle" class="btn locations">Neighborhoods</div>
			</div>
			<div id="headerSearchToggle" class="search btn">Search</div>
		</div>
	</div>
	<div class="search-wrap">
	  <div>
  	  <div class="container">
  		  <form>
  		    <input type="text" placeholder="Search" />
  		    <input type="Submit" value="Search" />
  		  </form>
  	  </div>
	  </div>
	</div>
	<nav>
      <?php if ($main_menu_links): ?>
        <?php print $main_menu_links; ?>
      <?php endif; ?>
	</nav>
</header>

<div id="sectionsSidebar" class="sections toggle-sidebar">
  <h5><div class="icon"></div>Sections</h5>
  <?php $menu = menu_navigation_links('menu-sectionssidebar'); ?>

  <ul>
  <?php foreach ($menu as $link): ?>
    <li><a href="<?php print($link['href']); ?>"><?php print($link['title']); ?></a></li>
  <?php endforeach ?>
  </ul>
</div>

<div id="locationsSidebar" class="sections toggle-sidebar">
  <h5><div class="icon"></div>Neighborhoods</h5>
  <?php $menu = menu_navigation_links('menu-locationssidebar'); ?>

  <ul>
  <?php foreach ($menu as $link): ?>
    <li><a href="<?php print($link['href']); ?>"><?php print($link['title']); ?></a></li>
  <?php endforeach ?>
  </ul>
</div>
<div class="overlay"></div>
<div class="search-overlay"></div>
