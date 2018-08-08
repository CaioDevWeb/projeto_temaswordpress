<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style>
        :root {
            --white: #fff;
            --black: #000;
            --orange: orange;
        }

        /*a {
            color: var(--white) !important;
        }

        a:hover {
            color: var(--black) !important;
        }*/
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <header>
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                        </div>


                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <?php
                                $pages = get_pages([
                                    'sort-column' => 'post-title',
                                    'sort_order' => 'desc',
                                    'parent' => 0
                                ]);
                                foreach ($pages as $p):
                                    $children = get_pages(['child_of' => $p->ID]);
                                    if (!count($children)) {
                                        $link = get_page_link($p->ID);
                                        $title = $p->post_title;
                                        printf('<li><a href="%s">%s</a></li>', $link, $title);
                                    } else {
                                        echo '<li>';
                                        printf('<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">%s <span class="caret"></span></a>', $p->post_title);
                                        echo '<ul class="dropdown-menu">';
                                        foreach ($children as $child) {
                                            $link = get_page_link($child->ID);
                                            $title = $child->post_title;
                                            printf('<li><a href="%s">%s</a></li>', $link, $title);
                                        }

                                        echo '</li></ul>';
                                    }
                                endforeach;
                                ?>
                            </
                            >
            </header>
        </div>
    </div>
</div>

