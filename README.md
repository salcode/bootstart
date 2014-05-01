Bootstart
=========
Bootstrap 3.0 Starter/Parent Theme

No Longer Under Active Development
----------------------------------
This theme is no longer under active development. It has been superceded by
[Bootstrap Genesis](https://github.com/salcode/bootstrap-genesis)
a Bootstrap based child theme built on the Genesis Framework.

Bootstrap Classes
-----------------

You've probably noticed that I'm adding lots of classes to get
Bootstrap to display properly and you're likely asking, "Why didn't he
just use mixins to assign the css to the revelant elements?"
Great question. I'm not 100% certain but I've got a couple of
reasons (which I'm listing both for you and to convince my future self
that I'm not entirely insane).
* I've gone down the mixin path using Bootstrap 2.3.2, Genesis, and the
[Sass port of Bootstrap by Thomas McDonald](https://github.com/thomas-mcdonald/bootstrap-sass).
In that case, I found the headache of making sure everything inherited the correct rules
(particuarly the responsive rules) to be unpleasant. Perhaps all these problems go away with 3.0.0
but at this point, I'm not chasing this down to find out.
* I'm assuming using classes will make it easier to apply a
[Bootstrap Theme](http://getbootstrap.com/examples/theme/)
* I'm hoping this makes it easier for other developers (to understand the css
being applied and make modifications)

### `bstart_class()`
The function `bstart_class()` is used throughout the theme to apply the appropriate classes
to the appropriate markup. All classes are assigned through filters.
Filters are in the form
bstart_{id}_class


`bstart_class('example-class exclass2 !comment');`

#### filter hooks include
* `bstart_main_class`
* `bstart_primary_class`

#### e.g. if you want to change #main from the default number of columns to span to 5

```php
// disable default filter
remove_filter( 'bstart_main_class', 'do_bstart_main_class' );
// add new class for 5 columns instead
add_filter( 'bstart_main_class', 'change_main_class' );
function change_main_class( $classes ) {
    $classes[] = 'col-sm-5';
    return $classes;
}
```

HTML Comments
-------------

Theme comments are added via `bstart_comment()` function. By default this function will
display the comment inside html comment tags but ONLY when WP_DEBUG is set to true.
e.g. `bstart_comment('loop starts here');`
would render the markup `<!-- loop starts here -->`
when WP_DEBUG is set to true in `wp-config.php`

### Revelant Hooks
This default behavior can be overridden via filters.

#### e.g. if you want to ALWAYS display comments regardless of WP_DEBUG

```php
add_filter('bstart_comment_active', 'bstart_comment_active_true');
function bstart_comment_active_true( $active ) {
    return true;
}
```

#### e.g. if you want to output NOT as a comment but in <STRONG> tags

```php
remove_filter('bstart_comment', 'bstart_comment_html');
function bstart_comment_strong( $output ) {
    return '<strong>' . $output . '</strong>';
}
add_filter('bstart_comment', 'bstart_comment_strong');
```



