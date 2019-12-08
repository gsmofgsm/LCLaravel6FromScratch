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

@method('PUT')

* validation

request()->validate()
$errors
$errors->has('title')
$errors->first('title')
@error('title')
@enderror

Within the @error section

@error('tags')
    <p class="help is-danger">{{ $errors->first('tags') }}</p>
@enderror

is equivalent to 

@error('tags')
    <p class="help is-danger">{{ $message }}</p>
@enderror

* route model binding

wildcard must in this case match the controller variable name.
Though they do not need to match when no route model binding. (In this case the order matters)
And route model biding automatically find Or Fail

* Model::create()
When using Article::create(), be aware of mass assignment protection and add $fillable in the model

* Named routes

route('articles.index')
route('articles.show', $article->id)
route('articles.show', $article)
// when needing to pass id to wildcard in named route, we could also just pass the object

route('articles.index', ['tag' => $tag->name])
// this will add query string

* Eloquent relationships

hasOne
hasMany
belongsTo
belongsToMany
morphMany
morphToMany

* factory

timestamps are auto-populated, so we can ignore them in the factory 

* pivot table

$article->tags()->attach(1)
$article->tags()->attach([1, 2])
$article->tags()->attach(Tag::find(1))
$article->tags()->attach(Tag::findMany([1, 2]))

* auth

pa ui

Auth::user()
auth()->user()

@if( Auth::check() )
    Auth::user()->name
@else
    Laravel
@endif

is equivalent to 

@auth
    Auth::user()->name
@else
    Laravel
@endauth

opposite
@guest
    Auth::user()->name
@else
    Laravel
@endguest
