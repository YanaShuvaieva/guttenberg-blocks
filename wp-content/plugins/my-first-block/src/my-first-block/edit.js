import { __ } from '@wordpress/i18n';
import { useBlockProps, MediaUpload, MediaUploadCheck, RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
	const { title, description, imageUrl } = attributes;
	const blockProps = useBlockProps();

	return (
		<div {...blockProps} className="service-card-editor">
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

			<RichText
				tagName="h2"
				value={title}
				onChange={(value) => setAttributes({ title: value })}
				placeholder={__('Введите заголовок...', 'my-first-block')}
				allowedFormats={['core/bold', 'core/italic']}
			/>

			<RichText
				tagName="p"
				value={description}
				onChange={(value) => setAttributes({ description: value })}
				placeholder={__('Введите описание...', 'my-first-block')}
				allowedFormats={['core/bold', 'core/italic']}
			/>
		</div>
	);
}
