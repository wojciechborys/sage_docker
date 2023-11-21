/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { __ } from '@wordpress/i18n';
import { RichText, useBlockProps } from '@wordpress/block-editor';
import './editor.scss';


export default function save({ attributes }) {
	console.log(attributes)
    return (
        <div
			class="hero"
			style={{ backgroundImage: `url(${attributes.mediaURL})`,
			backgroundPosition: `${ attributes.focalPoint.x * 100 }% ${ attributes.focalPoint.y * 100 }%` }}>
			<div class="container mx-auto">

				<RichText.Content
					tagName="h1"
					value={attributes.caption}
				/>
			</div>
        </div>
    );
}