import { __ } from '@wordpress/i18n';
import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextControl, TextareaControl, Button } from '@wordpress/components';
import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
	const { title, description, imageUrl } = attributes;

	return (
		<div {...useBlockProps()} className="service-card-editor">
			<MediaUploadCheck>
				<MediaUpload
					onSelect={(media) => setAttributes({ imageUrl: media.url })}
					allowedTypes={['image']}
					render={({ open }) => (
						<Button onClick={open} variant="secondary">
							{imageUrl ? (
								<img src={imageUrl} alt="" style={{ maxWidth: '100%' }} />
							) : (
								__('Загрузить изображение', 'my-first-block')
							)}
						</Button>
					)}
				/>
			</MediaUploadCheck>

			<TextControl
				label={__('Заголовок', 'my-first-block')}
				value={title}
				onChange={(value) => setAttributes({ title: value })}
			/>

			<TextareaControl
				label={__('Описание', 'my-first-block')}
				value={description}
				onChange={(value) => setAttributes({ description: value })}
			/>
		</div>
	);
}
