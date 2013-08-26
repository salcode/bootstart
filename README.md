Bootstart
=========

Bootstrap 3.0 Starter/Parent Theme

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

###`bstart_get_html_classes()`
The function `bstart_get_html_classes()` is used throughout the theme to
apply the appropriate classes to the appropriate markup. All classes are assigned through filters.
Filters are in the form
bstart_{id}_class

#### filter hooks include
* `bstart_main_class`
* `bstart_primary_class`

#### e.g. if you want to change #main from the default number of columns to span to 5
`
// disable default filter
remove_filter( 'bstart_main_class', 'do_bstart_main_class' );
// add new class for 5 columns instead
add_filter( 'bstart_main_class', 'change_main_class' );
function change_main_class( $classes ) {
    $classes[] = 'col-sm-5';
    return $classes;
}
`



