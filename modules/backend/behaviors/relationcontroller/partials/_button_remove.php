<?php if ($relationViewMode == 'single'): ?>
    <button
        class="btn btn-sm btn-secondary wn-icon-minus"
        data-request="onRelationButtonRemove"
        data-request-success="$.wn.relationBehavior.changed('<?= e($relationField) ?>', 'removed')"
        data-stripe-load-indicator>
        <?= e(trans($text)) ?>
    </button>
<?php else: ?>
    <button
        class="btn btn-sm btn-secondary wn-icon-minus"
        onclick="$(this).data('request-data', {
            checked: $('#<?= $this->relationGetId('view') ?> .control-list').listWidget('getChecked')
        })"
        disabled="disabled"
        data-request="onRelationButtonRemove"
        data-request-success="$.wn.relationBehavior.changed('<?= e($relationField) ?>', 'removed')"
        data-trigger-action="enable"
        data-trigger="#<?= $this->relationGetId('view') ?> .control-list input[type=checkbox]"
        data-trigger-condition="checked"
        data-stripe-load-indicator>
        <?= e(trans($text)) ?>
    </button>
<?php endif ?>
