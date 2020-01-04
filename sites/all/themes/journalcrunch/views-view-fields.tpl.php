<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div about="/node/<?php print $row->nid; ?>"
	class="node node-webinar node-promoted node-teaser contextual-links-region node-front "
	id="node-<?php print $row->nid; ?>">

	<div class="nodeInner">


		<h2 datatype="">
			<a href="/node/<?php print $row->nid; ?>"><?php print $row->node_title; ?></a>
		</h2>
		<div class="content clearfix">
			<div
				class="field field-name-field-image field-type-image field-label-hidden">
				<div class="field-items">
					<div class="field-item even">
						<?php echo $fields['field_image']->content ?>
					</div>
				</div>
			</div>
			<div
				class="field field-name-field-date field-type-text field-label-inline clearfix">
				<div class="field-label">Date:&nbsp;</div>
				<div class="field-items">
					<div class="field-item even"><?php echo $fields['field_date']->content ?></div>
				</div>
			</div>
			<div
				class="field field-name-body field-type-text-with-summary field-label-hidden">
				<div class="field-items">
					<div property="content:encoded" class="field-item even">
						<?php echo $row->field_body[0]['raw']['summary'] ?>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix">
			<div class="links">
				<ul class="links inline">
					<li class="node-readmore first last"><a
						title="<?php print $row->node_title; ?>"
						rel="tag" href="/node/<?php print $row->nid; ?>">Read more<span class="element-invisible">
								about <?php print $row->node_title; ?></span></a></li>
				</ul>
			</div>

		</div>

	</div>

</div>