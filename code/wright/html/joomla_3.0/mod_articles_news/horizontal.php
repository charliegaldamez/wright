<?php
// Wright v.3 Override: Joomla 3.2
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_news
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$cont = 0; // Wright v.3: Counter variable to get 4 horizontal columns
?>

<div class="newsflash-horiz<?php echo $params->get('moduleclass_sfx'); // Wright v.3: Changed ul for div element ?>">
	<?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
		$item = $list[$i]; ?>

		<?php // Wright v.3: Added row-fluid for each horizontal set of 4 columns ?>
			<?php if ($cont % 4 ==  0):?>
				<div class="row-fluid">
			<?php endif; ?>
		<?php // End Wright v.3: Added row-fluid for each horizontal set of 4 columns ?>

			<div class="span3"> 		<?php // Wright v.3: Added span3 class for each column ?>

				<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item');

				if ($n > 1 && (($i < $n - 1) || $params->get('showLastSeparator'))) : ?>

					<span class="article-separator">&#160;</span>

				<?php endif; ?>

			</div>						<?php // Wright v.3: Added span3 class for each column ?>

		<?php /* Wright v.3: Close row-fluid */ ?>

			<?php if ($cont % 4 ==  3 || $cont == $n - 1): ?>
				</div>
			<?php endif; ?>

			<?php
				$cont = $cont + 1;
			?>
		<?php /* End Wright v.3: Close row-fluid */ ?>

	<?php endfor; ?>
</div> <?php // Wright v.3: Changed ul for div element ?>
