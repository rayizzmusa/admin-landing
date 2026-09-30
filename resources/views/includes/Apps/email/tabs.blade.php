@php
$tabs = [
    [
        'icon' => 'ri-inbox-line font-normal me-1',
        'title' => 'Inbox',
        'id' => 'index-tab',
        'target' => '#index',
        'controls' => 'index',
        'selected' => 'true',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full hover:text-primary duration-500 text-start',
    ],
    [
        'icon' => 'ri-mail-star-line font-normal me-1',
        'title' => 'Starred',
        'id' => 'stared-tab',
        'target' => '#stared',
        'controls' => 'stared',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ],
    [
        'icon' => 'ri-mail-close-line font-normal me-1',
        'title' => 'Spam',
        'id' => 'spam-tab',
        'target' => '#spam',
        'controls' => 'spam',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ],
    [
        'icon' => 'ri-mail-add-line font-normal me-1',
        'title' => 'Sent',
        'id' => 'sent-tab',
        'target' => '#sent',
        'controls' => 'sent',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ],
    [
        'icon' => 'ri-mail-settings-line font-normal me-1',
        'title' => 'Drafts',
        'id' => 'draft-tab',
        'target' => '#draft',
        'controls' => 'draft',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ],
    [
        'icon' => 'ri-delete-bin-line font-normal me-1',
        'title' => 'Delete',
        'id' => 'delete-tab',
        'target' => '#delete',
        'controls' => 'delete',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ],
    [
        'icon' => 'ri-sticky-note-line font-normal me-1',
        'title' => 'Notes',
        'id' => 'note-tab',
        'target' => '#note',
        'controls' => 'note',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-2 duration-500 text-start',
    ]
];
@endphp

@foreach ($tabs as $item)
    <li role="presentation">
        <button class="{{ $item['style'] }}" id="{{ $item['id'] }}" data-tabs-target="{{ $item['target'] }}" type="button" role="tab" aria-controls="{{ $item['controls'] }}" aria-selected="{{ $item['selected'] }}"><i class="{{ $item['icon'] }}"></i> {{ $item['title'] }}</button>
    </li>
@endforeach