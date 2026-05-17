<?php

/**
 * CECAM site content shape.
 *
 *   pages         — generic CMS pages, /{slug}
 *   posts         — News, /news, /news/{slug}
 *   events        — Workshops, Schools, Conferences, /program, /program/{slug}
 *   activities    — Recurring programs, /activities, /activities/{slug}
 *   about         — single-purpose collection that powers /about (static)
 *   contact       — single-purpose collection that powers /contact (static)
 *   mailing_list  — public-submission form
 *
 * The `about` and `contact` collections render `about.twig` / `contact.twig`
 * as list_templates so the URL works with no database entries — admins can
 * add entries later but the public page renders from the template itself.
 */

return [

    'pages' => [
        'label'          => 'Pages',
        'label_singular' => 'Page',
        'icon'           => 'file',
        'route'          => '/{slug}',
        'template'       => 'page.twig',
        'order_by'       => 'updated_at DESC',
        'fields' => [
            'title'            => ['type' => 'text', 'required' => true, 'label' => 'Title'],
            'slug'             => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'body'             => ['type' => 'markdown', 'label' => 'Body'],
            'meta_description' => ['type' => 'textarea', 'label' => 'Meta description'],
        ],
    ],

    'posts' => [
        'label'          => 'News',
        'label_singular' => 'News item',
        'icon'           => 'edit',
        'route'          => '/news/{slug}',
        'template'       => 'post.twig',
        'list_template'  => 'post-list.twig',
        'order_by'       => 'publish_at DESC',
        'fields' => [
            'title'       => ['type' => 'text', 'required' => true, 'label' => 'Title'],
            'slug'        => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'eyebrow'     => ['type' => 'text', 'label' => 'Eyebrow'],
            'excerpt'     => ['type' => 'textarea', 'label' => 'Dek'],
            'cover_image' => ['type' => 'url', 'label' => 'Cover image URL'],
            'body'        => ['type' => 'markdown', 'required' => true, 'label' => 'Body'],
            'author'      => ['type' => 'text', 'label' => 'Byline'],
        ],
    ],

    'events' => [
        'label'          => 'Events',
        'label_singular' => 'Event',
        'icon'           => 'calendar',
        'route'          => '/program/{slug}',
        'template'       => 'event.twig',
        'list_template'  => 'program.twig',
        'order_by'       => 'created_at DESC',
        'list_limit'     => 100,
        'fields' => [
            'title'        => ['type' => 'text', 'required' => true, 'label' => 'Title'],
            'slug'         => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'event_type'   => ['type' => 'select', 'required' => true, 'label' => 'Type',
                'options' => ['Workshop', 'School', 'Conference', 'Event']],
            'start_date'   => ['type' => 'datetime', 'required' => true, 'label' => 'Start date'],
            'end_date'     => ['type' => 'datetime', 'required' => true, 'label' => 'End date'],
            'venue'        => ['type' => 'text', 'required' => true, 'label' => 'Venue'],
            'organizers'   => ['type' => 'textarea', 'required' => true, 'label' => 'Organizers'],
            'summary'      => ['type' => 'textarea', 'required' => true, 'label' => 'Summary'],
            'body'         => ['type' => 'markdown', 'required' => true, 'label' => 'Body'],
            'external_url' => ['type' => 'url', 'label' => 'External CECAM page'],
            'cover_image'  => ['type' => 'url', 'label' => 'Cover image URL'],
            'featured'     => ['type' => 'boolean', 'label' => 'Feature on home page'],
        ],
    ],

    'activities' => [
        'label'          => 'Recurring activities',
        'label_singular' => 'Activity',
        'icon'           => 'star',
        'route'          => '/activities/{slug}',
        'template'       => 'activity.twig',
        'list_template'  => 'activities.twig',
        'order_by'       => 'created_at ASC',
        'list_limit'     => 50,
        'fields' => [
            'title'         => ['type' => 'text', 'required' => true, 'label' => 'Title'],
            'slug'          => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'short_label'   => ['type' => 'text', 'required' => true, 'label' => 'Short label'],
            'summary'       => ['type' => 'textarea', 'required' => true, 'label' => 'Summary'],
            'body'          => ['type' => 'markdown', 'required' => true, 'label' => 'Body'],
            'external_url'  => ['type' => 'url', 'label' => 'External page'],
            'display_order' => ['type' => 'number', 'required' => true, 'label' => 'Display order'],
        ],
    ],

    'about' => [
        'label'          => 'About page',
        'label_singular' => 'About entry',
        'icon'           => 'info',
        'route'          => '/about/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'about.twig',
        'fields' => [
            'title' => ['type' => 'text', 'required' => true, 'label' => 'Title'],
            'slug'  => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'body'  => ['type' => 'markdown', 'label' => 'Body'],
        ],
    ],

    'contact' => [
        'label'          => 'Contact page',
        'label_singular' => 'Contact entry',
        'icon'           => 'mail',
        'route'          => '/contact/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'contact.twig',
        'fields' => [
            'title' => ['type' => 'text', 'required' => true, 'label' => 'Title'],
            'slug'  => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'body'  => ['type' => 'markdown', 'label' => 'Body'],
        ],
    ],

    'mailing_list' => [
        'label'          => 'Mailing list',
        'label_singular' => 'Subscriber',
        'is_form'        => true,
        'fields' => [
            'email' => ['type' => 'text', 'required' => true, 'label' => 'Email'],
        ],
    ],

];
