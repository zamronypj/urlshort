# urlshort

What
----

This is a PHP web application to shorten long URL. It is inspired  by web application such as <a href="http://bit.ly">http://bit.ly</a> or <a href="http://goo.gl">http://goo.gl</a>.

Features
--------

It has 2 features:
<ol>
<li>Retrieve short URL from given URL. If it cannot find it in database, create new short URL from given URL.</li>
<li>Retrieve original URL using short URL and then redirect to original URL.</li>
</ol>

How
---

<ul>
<li><em>HTTP GET</em> on http://[a domain name]/ will display main page with form to add a short URL.</li>
<li><em>HTTP POST</em> on http://[a domain name]/ will handle adding short URL request, validate data and retrieve short URL. If no short URL found, then create new one and add it to database.</li>
<li><em>HTTP GET</em> on http://[a domain name]/{short_url_code} will retrive short_url_code, validates it and then retrieve original URL and redirect to it.</li>
</ul>

Installation
------------

<ul>
 <li>Clone this repository and then <code>cd urlshort/urlshort</code></li>
 <li>Make sure you have <a href="https://getcomposer.org">Composer</a> installed somewhere.</li>
 <li>Run <code>composer install</code> to install all software packages dependencies.</li>
 <li>Create a virtual host on your web server then point <em>public</em> directory as Document Root.</li>
 <li>Rename <code>.env.sample</code> file to <code>.env</code> file</li>
 <li>From shell run <code>php artisan app:key</code> to generate application key (see <code>APP_KEY</code> in .env file)</li>
 <li>Create a MySQL database and user that has priviledge to basic CRUD, and create table.</li>
 <li>Edit .env file and change <code>DB_HOST</code>, <code>DB_DATABASE</code>, <code>DB_USERNAME</code>, <code>DB_PASSWORD</code> according to your database configuration.</li>
 <li>From shell run <code>php artisan migrate:install</code> to setup table.</li>
 <li>From shell run <code>composer dumpautoload</code> to generate autoload file (optional).</li>
</ul>

Info
----
Application is built on top of Laravel framework 5.2. Application UI use Bootstrap.

That's it. If you add new features, please feel free to submit PR.


Zamrony P. Juhara
zamronypj@yahoo.com
<a href="https://twitter.com/zpjuhara">@zpjuhara</a>
