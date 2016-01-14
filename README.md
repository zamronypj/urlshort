# urlshort
URL shortener web application

This is a PHP web application to shorten long URL based on Laravel framework.

It has 2 functionalities:
1) Retrieve short URL from given URL. If it cannot find it in database, create new short URL from given URL.
2) Retrieve original URL using short URL and then redirect to original URL.

HTTP GET on http://[a domain name]/ will display main page with form to add a short URL.
HTTP POST on http://[a domain name]/ will handle adding short URL request, validate data and retrieve short URL. If no short URL found, then create new one and add it to database.
HTTP GET on http://[a domain name/{short_url_code} will retrieve original URL and redirect to it.

Application UI use Bootstrap.

That's it.
