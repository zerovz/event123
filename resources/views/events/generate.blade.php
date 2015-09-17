<link type="text/css" href="http://event.dev/css/theme.css" rel="stylesheet">
<link type="text/css" href="http://event.dev/images/icons/css/font-awesome.css" rel="stylesheet">
<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<p></p>
<p>Poštovani,<br />
u nastavku je Vaša karta.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend tristique semper. Integer id dui sit amet enim condimentum tincidunt.<br />
    Etiam fermentum magna non vehicula ultricies. Nunc fringilla augue et ullamcorper consectetur. Morbi volutpat, eros quis vulputate tristique, nisi tortor ornare nisl,<br />
    quis ultrices odio arcu id dui. Vestibulum sit amet faucibus nibh. Maecenas et mattis urna, eu tempus quam. Sed porta, tortor ut porttitor convallis,<br />
    sem nibh tristique purus, ac blandit ligula libero luctus quam. Suspendisse efficitur tellus non massa rhoncus bibendum. Ut laoreet nibh eget dui pellentesque ornare.</p>
<h1>{{ $event->title }}</h1>
<h3>{{ $event->date }} @ {{ $event->time }}</h3>
<h3>{{ $event->location }}</h3>
<hr />
<p>{!! $event->desc !!}</p>
<hr />

<?php
echo DNS1D::getBarcodeSVG($barcode1, "C128");
        ?><br />
{!! $barcode1 !!}
