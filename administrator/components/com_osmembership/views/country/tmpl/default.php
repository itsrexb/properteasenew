<?php
/**
 * @version        	1.6.6
 * @package        	Joomla
 * @subpackage		Event Booking
 * @author  		Tuan Pham Ngoc
 * @copyright    	Copyright (C) 2010 - 2014 Ossolution Team
 * @license        	GNU/GPL, see LICENSE.php
 */
// no direct access
defined( '_JEXEC' ) or die ;
?>

<form action="index.php?option=com_osmembership&view=country" method="post" name="adminForm" id="adminForm">
<div class="row-fluid">	
	<table class="admintable adminform">
		<tr>
			<td width="100" class="key">
				<?php echo  JText::_('OSM_COUNTRY_NAME'); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="name" id="name" size="40" maxlength="250" value="<?php echo $this->item->name;?>" />
			</td>
		</tr>	
		<tr>
			<td width="100" class="key">
				<?php echo  JText::_('OSM_COUNTRY_CODE_3'); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="country_3_code" id="country_3_code" maxlength="250" value="<?php echo $this->item->country_3_code;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" class="key">
				<?php echo  JText::_('OSM_COUNTRY_CODE_2'); ?>
			</td>
			<td>
				<input class="text_area" type="text" name="country_2_code" id="country_2_code" maxlength="250" value="<?php echo $this->item->country_2_code;?>" />
			</td>
		</tr>				
		<tr>
			<td class="key">
				<?php echo JText::_('OSM_PUBLISHED'); ?>
			</td>
			<td>
				<?php echo $this->lists['published']; ?>
			</td>
		</tr>
	</table>										
</div>		
<div class="clearfix"></div>	
	<?php echo JHtml::_( 'form.token' ); ?>
	<input type="hidden" name="cid[]" value="<?php echo $this->item->id; ?>" />
	<input type="hidden" name="task" value="" />
</form>