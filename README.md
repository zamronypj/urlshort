# urlshort

<h2>What</h2>
This is a PHP web application to shorten long URL based on Laravel framework.

<h2>Features</h2>
It has 2 features:
<ol>
<li>Retrieve short URL from given URL. If it cannot find it in database, create new short URL from given URL.</li>
<li>Retrieve original URL using short URL and then redirect to original URL.</li>
</ol>

<h2>How</h2>
HTTP GET on http://[a domain name]/ will display main page with form to add a short URL.
HTTP POST on http://[a domain name]/ will handle adding short URL request, validate data and retrieve short URL. If no short URL found, then create new one and add it to database.
HTTP GET on http://[a domain name/{short_url_code} will retrieve original URL and redirect to it.

<h2>Info</h2>
Application UI use Bootstrap.

That's it.
