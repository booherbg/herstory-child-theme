# HerStory Child Theme

This is a wordpress theme for HerStory, derived from the work that the students did during the uCodeGirl 2019 Summer Tech Camp. The students designed and built a hand coded website utilizing Bootstrap 4. Once their website was complete, we migrated the site into an ultra minimal wordpress theme. Content Editing is possible through the use of the Code Snippets plugin.

## General Overview

The general overview is as follows. The primary goal was to find a wordpress template that is as unobtrusive as possible, while still lending the students enough tooling so that they can build the site outside of wordpress (for learning purposes, ease of development, and rapid testing). In the end, we want to deliver to the client a site built by the students with as little 'frill' and bloat from wordpress as possible (no extra widgets, side bars, etc).

The students were learning how to use bootstrap 4, so naturally it made sense to find a theme that started there. As it turns out, there is a perfect fit. The theme 'Understrap' is an open source theme built that takes the 'underscores' "Best Practices" theme (built by the company behind Wordpress) and adds full support for Bootstrap 4. 

The primary advantage with going this route is that the theme is ready to go with wordpress bindings (custom icons, colors, installable theme, updateable, etc), already has Bootstrap 4 available in CSS and Javascript, and is minimal and extensible. Having Bootstrap available is the best part because it allows us to essentially drop in the html and css that the students already built, and it should "just work".

One of the most powerful things about Wordpress Themes are that they are very easy to extend. This is called creating a 'Child Theme'. That's what this project actually is. It's a "child theme" that inherits from the parent Understrap theme. The way it works is that any file that exists in this repository takes precedent over the same named file in the parent theme. Thus, we can customize any part of the parent theme while leaving intact everything we like. Additionally, this allows us to still inherit security updates from the upstream parent theme without worrying about our changes being overwritten.

Thus, if you look in the root `style.css` file you'll see several common classes that were pulled out of all of the pages, plus a few wordpress-specific classes that we had to add to override some of the wordpress specific styles. This was mostly painless, but the nav bar (and brand logo) had a few deeply embedded styles that were a bit more tricky to remove.

The `css/` folder simply has css files that are specific to each page on the site. There's some overlap, but that's intentional because it keeps most of the student's original work intact. Each page is still mostly independent, except for the footer and header.

The footer and header have been pulled out into their respective `footer.php` and `header.php` files, which helps keep the navigation and footer consistent across all pages. Each page (found in the `page-templates/` folder) simply renders the header and footer via PHP server side functions. Each template has a respective `.css` file that is loaded automatically via a function call in `functions.php`.

Finally, `functions.php` (which gets executed by wordpress) takes care of some administrative tasks. There are three functions, each with a specific purpoes. `my_theme_enqueue_styles()` is executed when wordpress is loading scripts. All it does is make sure the child theme's `style.css` file is loaded after the parent style (so that anything in our `style.css` will override the matching parent style). This is standard boilerplate.

The `wpse_enqueue_page_template_styles` is a simple function that matches each template page with a corresponding CSS file. Thus if you load `home-template.php`, the corresponding `/css/home.css` stylesheet will be loaded as wel (but only on that page). If you add a new template, be sure to add a corresponding line to this function if you also want to load a separate css file (or just put all your CSS in the `style.css` file and skip this step).

Lastly, the `understrap_change_logo_class()` is just a function that overrides a corresponding parent theme function. This was the best way I could figure out to strip as much wordpress boilerplate as possible from the image logo (which gets uploaded through the theme itself). It just returns the passed in $html object without modifying it (see the parent theme folder for more info on what it would normally do).

The `header.php` is a simple html page that also has hooks for wordpress boilerplate. The biggest thing here is that it uses the `wp_nav_menu()` hook for generating the navbar with html that maps onto the expected bootstrap html format. The nice thing about this is that you can edit the menu via wordpress (it isnt hardcoded into the header). Also, the `the_custom_logo()` will print the image tag of the logo that is uploaded into the theme via the wordpress administrative area.

The `footer.php` is dead simple. Just html for the footer, nothing dynamic. You could add support for wordpress widgets here if you like (see the parent them for details). Widget support is removed from the child theme for simplicity.

## How the templates work

For each page on the site, a wordpress template page is created. This allows the user to select the template in the wordpress admin area. The template at first is fully hard coded, with all content and image URLs. The template also (via the `functions.php` explained earlier) loads its own css file that has all of the student defined styles in it.

The template has to have a few things to work as expected:
	- The template needs to have the right header, like 'Template Name:' in a comment field at the start of the file. This is what shows up in the wordpress admin under 'template' drop down.
	- The template needs to call the `get_header()` hook to generate the header html and css (including the nav bar). The header itself also has the bootstrap `container` div, so that doesnt need to be included in the templates. The `footer` is what actually closes this div.
	- The template needs to have all of the content needed to render the page (body html, usually wrapped in a row)
	- The template should have all image URLs updated to the corresponding wordpress upload URL. For each image, I just uploaded it directly into the wordpress media manager, then pasted the URL into the HTML. There are smarter ways to do this (like 'searching' for the right image based on filename or tags) but this is by far the simplest.
	- The template should end with a call to generate the footer: `get_footer()`, which renders the footer, the closing html tag, and also the closing div for the bootstrap `container` that is opened in the header.
	- Finally, each template should have corresponding Code Snippets for areas that should be editable by the client. Ideally only what is absolutely necessary should be editable, but the obvious thing is any paragraph or content text, and possibly any image URLs (so that the client could upload a new image, and simply update the snippet to point to the new image). It is highly recommended not to include HTML in the expected editable content, since the client user could easily overwrite the HTML which would cause page breaking side effects.

Finally, the header and footer should be updated to point to the corresponding URLs where the content pages will live. For this child theme, this is actually managed via the wordpress 'menu' editor which allows for dynamically adding new pages (if desired). These pages will be set up in wordpress (see the next section). 

## How to use the templates

Once the templates are all set up properly, you simply go into wordpress and create the pages. In our case, we create one page that works with each template (home, about, free-products, how-to-donate, volunteer). In theory you could also create a 'generic' template that could be used for new pages (but then you'd also have to manage how to get that page into the header by adding a new menu link).

Once you've created your page, just be sure to select the appropriate template (from the page sidebar). Also be sure the 'permalink' matches what you would expect (like '/about' and 'donate/'). While the menu may be auto-generated with the proper links, you'll want to be sure that any pages that have hardcoded links so a URL are correct.

Finally, once you save the page you should be able to verify that everything is working as expected. Be sure that you have a nav menu set up in the wordpress settings, and that each page is added to the menu (which will be populated in the header of the site).

At this point the site should be perfect. The only thing missing is the ability to edit the page.

## How to enable client editing
To enable editing of content by a client, we can use the Post Snippets plugin. This basically allows for the creation of snippets that can be edited and updated by a wordpress admin, and then pulled in to the PHP templates by name.

For example, let's say you wanted to allow for the editing of a paragraph of text on an about page. You could create a snippet called `about_paragraph1` and seed it with the text from the original template. Then simply load and print the snippet directly in the php template. To create a snippet, just go into the wordpress plugin admin (Plugins -> Post Snippets) and create the appropriate snippet.

Before:
``` html
<div class="row">
   <div class="col-md-6">
      <p class="my-paragraph">This is my first paragraph on the about page. This has a ton of information about this website!</p>
   </div>
</div>
```

After:
``` html
<div class="row">
   <div class="col-md-6">
      <p class="my-paragraph"><?php echo PostSnippets::getSnippet( 'about_paragraph1', ''); ?></p>
   </div>
</div>
```

See the 'help' section on the Post Snippets plugin for more details.

## Deployment

Deploying is relatively straight forward. First, install the parent `understrap` theme (download the zip file and upload it directly in the wordpress admin). Then install the child theme, either by uploading a zip file of this repository, or by using FTP to upload this folder directly into the `wp-content/themes` folder.

For ease of use, the following shell script will copy up the files to the right location easily. Just call this from the folder above the `understrap-child` folder on your local machine. The `[!.]*` part just ensure you don't also copy the `.git` folder up as well.

```
scp -r understrap-child/[!.]* rewrite7@rewriteherstory.org:public_html/wp-content/themes/understrap-child/
```

When you're done it should look like this on the remote server:
```
/wp-content/themes/
	understrap/
		css/
		page-templates/
		functions.php
		header.php
		footer.php
		... etc (all other files in the parent theme)
	understrap-child/ (our folder)
		css/
		page-templates/
		footer.php
		functions.php
		header.php
		style.css
```

In the wordpress admin, be sure that you're actually using the child theme! The parent theme must be installed, but the child theme is what you should have selected.

Note: In the child theme itself, feel free to use the 'logo' and 'favicon' image uploads, which wordpress will handle for you (by dumping the appropriate html in the header).