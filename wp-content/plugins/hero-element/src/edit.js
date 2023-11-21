import { __ } from '@wordpress/i18n';
import { MediaUpload, RichText, useBlockProps, AlignmentControl, BlockControls, InspectorControls } from '@wordpress/block-editor';
import { Button, Dashicon, FocalPointPicker } from '@wordpress/components';
import { useState } from 'react';

import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
	console.log(attributes);

	const focalPoint = useState({
		x: 0.5,
		y: 0.5,
	});
		
	const onFocalPoint = (newFocalPoint) => {
		setAttributes({
			...attributes,
			focalPoint: newFocalPoint,
		});
	};

    const onSelectMedia = (media) => {
        setAttributes({
            mediaURL: media.url,
            mediaID: media.id,
        });
    };

    const onChangeCaption = (newCaption) => {
        setAttributes({
            caption: newCaption,
        });
    };

	const onChangeAlign = ( newAlign ) => {
		setAttributes( { 
			align: newAlign === undefined ? 'none' : newAlign, 
		} )
	};

	const blockProps = useBlockProps();

    return (
        <div { ...blockProps } 
		class="hero"
		style={{ 
			backgroundImage: `url(${attributes.mediaURL})`,         
			backgroundPosition: `${ attributes.focalPoint.x * 100 }% ${ attributes.focalPoint.y * 100 }%` }}>
			
			<InspectorControls>
				<FocalPointPicker
					url={ attributes.mediaURL }
					value={ focalPoint }
					onChange={ onFocalPoint }
					onDragStart={ onFocalPoint }
                	onDrag={ onFocalPoint }
				/>
			</InspectorControls>

			<BlockControls>
				<AlignmentControl
					value={ attributes.align }
					onChange={ onChangeAlign }
				/>
				 <MediaUpload
                    onSelect={onSelectMedia}
                    type="image"
                    render={({ open }) => (
                        <Button onClick={open}><div><Dashicon icon="format-image" /></div></Button>
                    )}
                />
				
			</BlockControls>
			<div class="container mx-auto">
				<RichText
					tagName="h1"
					placeholder={__('Add a caption', 'hero-element')}
					value={attributes.caption}
					onChange={onChangeCaption}
					style={ { textAlign: attributes.align } }
				/>
			</div>

        </div>
    );
}