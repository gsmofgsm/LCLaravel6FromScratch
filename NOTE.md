* First forward slash / in route/web.php is optional

* request('name')

* blade is laravel's templating engine
{{ $name }}
htmlspecialchars($name, ENT_QUOTES)

the compiled template files will be placed in storage/framework/views

If no escaping wanted, e.x. show retrieved html from database, use {!!  !!} 

* My first simple PostsController
it works also without extending the Controller class

* Jeffrey uses TablePlus

* Query builder

* Eloquent

* migration

pa make:migration create_posts_table --create=posts
$table->timestamp('published_at')->nullable()
if no nullable, get this Exception
PDOException::("SQLSTATE[42000]: Syntax error or access violation: 1067 Invalid default value for 'published_at'")

* pa make:model Post -mc

* when dump a model in tinker, the null properties are not shown

* Jeffrey uses templated.co/simplework

* 
Request::path() === '/'

Request::path() === 'about'
Request::is('about')
it could also be a wildcard with in is()
Request::is('about*')

* build process
laravel provide out of box laravel-mix, which is a wrapper on top of webpack
helper function mix('css/app.css') will also do the versioning work

* App\Article::all()
App\Article::take(2)
App\Article::paginate(2)
App\Article::latest()->get()

* when submitting form
we get 
419 Page Expired
this is due to cross site request forgery
@csrf

request()->all()
request('title')
