<?php include("inc_header.php"); ?>

<img src="images/Gold.png" alt="golden crown" />
<h1>SYNTACTICALLY AWESOME STYLESHEETS (SASS) </h1>
<p>SASS is een extensie van CSS3, deze pagina is gemaakt om te leren SASS code te schrijven. Hieronder een aantal belangrijke functies binnen SASS die ook zijn toegepast op deze pagina. </p>

<p>
	<a href="sass/style.scss"> SASS stijlen</a><br/>
	<a href="css/style.css">CSS output</a>
</p>


<ul class="skills-container">
	<li>
		<h2>Nesting</h2>
		<p>Net zoals HTML een duidelijke hi&euml;rarchie heeft in elementen kan dit ook met SASS gerealiseerd worden. Waar in CSS elementen herhaald moeten worden kan dit met SASS genest worden voor duidelijkere code en gemakkelijkere aanpasbaarheid. Het niet hoeven herhalen van onderdelen zorgt ook voor kortere ontwikkeltijd. De output blijft een normale stylesheet.</p>
	</li>
	<img src="images/nesting.jpg" alt="example nesting" />
	<li>
		<h2>Variabelen</h2>
		<p>Dit is misschien wel de beste functionaliteit binnen SASS. In variabelen kunnen CSS waardes geplaatst worden, de variabelen kunnen gebruikt worden in het opmaken van de stylesheet. Mocht er een aanpassing komen dan moest er bij CSS een waarde op meerdere plekken gewijzigd worden, in het geval van SASS hoeft dit maar eenmalig door een variabel aan te passen.</p>
	</li>
	<img src="images/variabelen.jpg" alt="example variabelen" />
	<li>
		<h2>Mixins</h2>
		<p>Mixins zijn een SASS functie die op elk moment kan worden op geroepen. Binnen in een mixin zit een stuk code die eerder gedefinieerd is. Door het gebruik van mixins kunnen veel gebruikte brokken code gemakkelijk herhaalt worden. Het voordeel van een mixins is dan ook dat er waardes voor de code gemakkelijk ingevoerd kunnen worden. Dit zorgt ook weer voor kortere ontwikkeltijd.</p>
	</li>
	<img src="images/mixins.jpg" alt="example mixins" />
	<li>
		<h2>Extends</h2>
		<p>Extend is een manier om code van een element te reproduceren en te &ldquo;extenden&rdquo; naar specifiek element. Dit zorgt ervoor dat code niet gedupliceerd hoeven worden en de maker uiteindelijk minder ontwikkeltijd nodig heeft.</p>
	</li>
	<img src="images/extends.jpg" alt="example extends" />
</ul>	

<?php include("inc_footer.php"); ?>		