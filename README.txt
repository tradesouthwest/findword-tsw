=== FindWord TSW ===
Contributors:      tradesouthwest
Donate link:       https://paypal.me/tradesouthwest
Tags:              search, list, find, words, text, form, count, keywords
Requires at least: 4.6
Tested up to:      6.1.1
Stable tag:        1.0.9
License:           GPLv3
License URI:       http://www.gnu.org/licenses/gpl-3.0.html

Search helper for on page article word search.

== Description ==

Search tool helper to find text on page. Can be used a a sidebar widget to cover any volume of text 
either on the page or in the content of the article itself. This is set as a default to find text specifically that is in a single post article. You can expand this by changing the name of the CSS class that your searchable text is enclosed in.

Let us say you are wanting to include the sidebars and the header and the footer of the page as part of your search. In this case, you would change the name of the Wrapper Class to the same name as your body class for example, in which the body tag element would get a new data type of "data-finder-content" once you save your Wrapper Class name to the plugin Options Settings page.

Helps your readers find text on the page if articles are long. Can also be used as a writting developer tool to count keywords in an article.

Upgrade link for this plugin: [FindWordPlus](https://tradesouthwest.com/findword/)
Why upgrade:

- Clipboard organizer to save keyword text to.
- Word counter for page text content.
- Clock for timing reads.
- Predefined text in Toolbox or add you own.
- Add promotion link or advert link to tool box.
- Change box-shadow and button colors as well as icons in buttons.
- Change pixel size inside findword content area.
- Select or remove modules you want readers to see.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `findword-tsw.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place widget FindWord or place shortcode `[findword]` to page.
4. Find class name of page content and add to Setting admin page.

== Screenshots ==

1. On page widget - shortcode also available
2. Admin options settings page

== Changelog ==
= 1.0.9 =
* Added context for premium version link

= 1.0.8 =
* fixed json error in shortcode

= 1.0.7 =
* fixed url path to script

= 1.0.6 =
* Changed file name to conventional

= 1.0.5 =
* corrections to sanitize outputs
* added main to github.com
* removed unused code 

= 1.0.4 =
* Initial release

== Upgrade Notice ==

Git latest https://github.com/tradesouthwest/findword-tsw/ main in Public/findword-tsw
Update only from A-L/findword-tsw/tags/.latest and copy to main in Public/findword-tsw

== Other ==

Highlight javascript for jQuery based on highlight v3 by Johann Burkard
scrollTo javascript for jQuery based on Ariel Flesler version 2.1.3 https://github.com/flesler/jquery.scrollTo
