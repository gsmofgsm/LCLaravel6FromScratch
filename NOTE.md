* First forward slash / in route/web.php is optional

* request('name')

* blade is laravel's templating engine
{{ $name }}
htmlspecialchars($name, ENT_QUOTES)

the compiled template files will be placed in storage/framework/views

If no escaping wanted, e.x. show retrieved html from database, use {!!  !!} 
