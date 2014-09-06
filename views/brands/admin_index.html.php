<?php

$this->set([
	'page' => [
		'type' => 'multiple',
		'object' => $t('brands')
	]
]);

?>
<article class="view-<?= $this->_config['controller'] . '-' . $this->_config['template'] ?>">

	<div class="top-actions">
		<?= $this->html->link($t('new brand'), ['action' => 'add', 'library' => 'ecommerce_brand'], ['class' => 'button add']) ?>
	</div>

	<?php if ($data->count()): ?>
		<table>
			<thead>
				<tr>
					<td>
					<td class="emphasize"><?= $t('Name') ?>
					<td class="date created"><?= $t('Created') ?>
					<td class="actions">
			</thead>
			<tbody>
				<?php foreach ($data as $item): ?>
				<tr>
					<td>
						<?php if (($media = $item->logo()) && ($version = $media->version('fix3admin'))): ?>
							<?= $this->media->image($version, ['class' => 'media']) ?>
						<?php endif ?>
					<td class="emphasize"><?= $item->name ?: '–' ?>
					<td class="date created">
						<time datetime="<?= $this->date->format($item->created, 'w3c') ?>">
							<?= $this->date->format($item->created, 'date') ?>
						</time>
					<td class="actions">
						<?= $this->html->link($item->is_published ? $t('unpublish') : $t('publish'), ['id' => $item->id, 'action' => $item->is_published ? 'unpublish': 'publish', 'library' => 'ecommerce_brand'], ['class' => 'button']) ?>
						<?= $this->html->link($t('open'), ['id' => $item->id, 'action' => 'edit', 'library' => 'ecommerce_brand'], ['class' => 'button']) ?>
				<?php endforeach ?>
			</tbody>
		</table>
	<?php else: ?>
		<div class="none-available"><?= $t('No items available, yet.') ?></div>
	<?php endif ?>
</article>