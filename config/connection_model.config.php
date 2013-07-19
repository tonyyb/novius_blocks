<?php

return array(
    'pages' => array(
        'model'                         => 'Nos\Page\Model_Page',
        'label'                         => 'Une page',
        'search_autocomplete_fields'    => array(
            'page_title',
        ),
        'autocomplete_value'            => 'page_id',
        'autocomplete_label'            => 'page_title',
        'display_label'                 => 'page_title',
        'data_mapping'                  => array(
            'title'                     => array(
                'field' => 'page_title',
                'label' => 'Titre',
            ),
            'description'               => array(
                'field' => 'content',
                'label' => 'Description',
                'type'  => 'wysiwyg',
            ),
//            'description'               => 'page_title',
        ),
    ),
);