<?php
/**
 * Search Form for the theme.
 *
 * @package bootstart
 */
?>
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo site_url(); ?>">
    <div class="row">
        <div class="<?php bstart_class('search-field-div', array('form-group', 'col-lg-8', 'col-md-7') ); ?>">
            <label class="sr-only" for="s">Search for:</label>
            <input type="text" class="form-control" value="" name="s" id="s" placeholder="Search">
        </div>
        <div class="<?php bstart_class('search-button-div', array('col-lg-4', 'col-md-5') ); ?>">
            <input type="submit" id="searchsubmit" class="btn btn-primary" value="Search">
        </div>
    </div><!-- .row -->
</form>
