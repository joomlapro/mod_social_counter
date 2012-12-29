<?php
/**
 * @package     Social_Counter
 * @subpackage  mod_social_counter
 * @copyright   Copyright (C) 2012 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Load the tooltip bootstrap.
JHtml::_('bootstrap.tooltip');

// Load the Stylesheet.
JHtml::stylesheet('mod_social_counter/template.css', false, true, false);
?>
<script type="text/javascript">
	jQuery.noConflict();

	(function ($) {
		$(function () {
			// Twitter and facebook social counter.
			$(document).ready(function () {
			    var t_page = '<?php echo $twitter; ?>';
			    var f_page = '<?php echo $facebook; ?>';

			    // Grab from Twitter.
			    $.getJSON('http://api.twitter.com/1/users/show.json?screen_name=' + t_page + '&callback=?', function (data) {
			        twit_count = data['followers_count'].toString();
			        $('#twitter').html(twit_count);
			    });

			    // Grab from Facebook.
			    $.getJSON('https://graph.facebook.com/' + f_page + '?callback=?', function (data) {
			        var fb_count = data['likes'].toString();
			        $('#facebook').html(fb_count);
			    });
			});
		});
	})(jQuery);
</script>
<div class="social_counter<?php echo $moduleclass_sfx; ?>">
	<div class="row-fluid">
		<div class="span6">
			<i class="icon-twitter"></i>
			<a href="#" class="hasTooltip" title="<?php echo JText::_('MOD_SOCIAL_COUNTER_FOLLOW_US_ON_TWITTER'); ?>">Twitter</a>
			<span id="twitter"></span>
		</div>
		<div class="span6">
			<i class="icon-facebook"></i>
			<a href="#" class="hasTooltip" title="<?php echo JText::_('MOD_SOCIAL_COUNTER_LIKE_US_ON_FACEBOOK'); ?>">Facebook</a>
			<span id="facebook"></span>
		</div>
	</div>
</div>
