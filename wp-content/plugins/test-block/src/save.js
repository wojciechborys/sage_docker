/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function save({ attributes }) {
	return (
		<RichText.Content 
		{ ...useBlockProps.save() }
		tagName="p" 
		value={attributes.content}
		
		/>
	);
}
