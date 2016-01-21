<h1>Twig with Huge</h1>

Huge is a fantastic back-end platform though I am sure not many front-end people deal with it.

I use Volt with a Phalcon project and Volt is based on Twig - so I decided to add Twig here.

You can read all about the advantages of Twig at thier website: http://twig.sensiolabs.org

Obviously you start by adding Twig with Composer "composer require twig/twig".

I came up with two approaches for using Twig.  

The vanilla way is to put it into the Controller or I modified a static function I found written by Gabriel Maftei for Simple MVC.

You can either use:  $this->twig($data) or Twig::render($data).

I prefer the second approach because you do not need to pass an empty $data and you can set and change your file extention.  (Twig can use many file extentions like .html, .php or .twig)

Biggest issue was the Alerts. There is a special feedback.twig file that is called from the base.twig file instead of the _feedback.php file.  (code is set up for Foundation 6)

You will have to set the alert session in the $data you pass to the view. This is done in the FlashAlert.php in for core folder.

I also created an array of directory paths in the config.development.php file just to be lazy.

Here is what I pass to the View in the Controller.

  $data = [

            'dir'            => Config::get('DIRS'),
            'pageTitle'      => 'Index Page',
            'feedback'       => FlashAlert::renderFeedbackMessages(),

        ];

        Twig::render('index/index', $data);


Now you have the ability to handle everything directly inside your pages. This includes both unique css and js - no more creating special header and footer files.

The only folder in my layouts is the Twig folder with the templates.  Simple and clean.

Remember Twig does not take PHP so be sure to get to know all the Twig filters, tags, functions and operators.  Pretty simple and straight foreward.

Example, <?php echo $data['dog']->name ?> is just {{ dog.name }}. 

A date funtion would look like:  {{ "now"|date("m/d/Y") }}

Also do not forget to create a cache folder in your app.  

This is not a complete template (nor do I claim to be a Twig expert) and things (like blocks) can still be added or subtracted.

I hope this helps! All comments welcomed.

Good karma to all.