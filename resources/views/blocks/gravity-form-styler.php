<section id='<?php echo esc_attr($attributes['cssId']); ?>' class='<?php echo esc_attr($attributes['className']); ?>'>
	<?php if (!$attributes['id']): ?>
		<div id="wpt-gf-block-styler-placeholder">
			<svg width="150" height="150" enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:xlink="http://www.w3.org/1999/xlink"><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><defs><linearGradient id="linearGradient864" x1="24.405" x2="175.6" y1="197" y2="197" gradientTransform="matrix(.57174 0 0 .57174 -7.1737 -62.632)" gradientUnits="userSpaceOnUse"><stop stop-color="#0575e6" offset="0"/><stop stop-color="#021b79" offset="1"/></linearGradient></defs><circle cx="50" cy="50" r="43.221" fill="url(#linearGradient864)" stroke-width="0"/><text x="49.234684" y="59.319096" fill="#ffffff" fill-opacity=".94118" font-family="'Source Code Pro'" font-size="62.755px" font-weight="bold" letter-spacing="-2.9908px" stroke-width=".14262" word-spacing="0px" style="line-height:1.25" xml:space="preserve"><tspan x="47.739265" y="59.319096" fill="#ffffff" fill-opacity=".94118" font-family="'Source Code Pro'" font-size="62.755px" font-weight="bold" letter-spacing="-2.9908px" stroke-width=".14262" text-align="center" text-anchor="middle" style="line-height:1.25">g</tspan></text>
			</svg>


			<div>
				<h4><strong>Gravity Form Styler</strong></h4>
				<p>
					Get started by selecting a gravity form, from the <b>Shortcode Params</b> panel in block options.
				</p>
			</div>
		</div>
	<?php endif?>
<?php echo do_shortcode($shortcode); ?>

</section>