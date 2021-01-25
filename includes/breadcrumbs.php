<?php
function custom_dimox_breadcrumbs() {
        /* === OPTIONS === */
        $text['home']     = 'Home'; // text for the 'Home' link
        $text['category'] = 'Archive by Category "%s"'; // text for a category page
        $text['search']   = 'Search Results for "%s" Query'; // text for a search results page
        $text['tag']      = 'Posts Tagged "%s"'; // text for a tag page
        $text['author']   = 'Articles Posted by %s'; // text for an author page
        $text['404']      = 'Error 404'; // text for the 404 page
        $show_current   = 1; // 1 - show current post/page/category title in breadcrumbs, 0 - don't show
        $show_on_home   = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
        $show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
        $show_title     = 1; // 1 - show the title for the links, 0 - don't show
        $delimiter      = ''; // delimiter between crumbs
        $thepath = $_SERVER['REQUEST_URI'];
        $theuri = site_url() . $thepath;
        $before         = '<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'; // tag before the current crumb
        $after          = '</span><link itemprop="url" href="' . $theuri . '" /></div>'; // tag after the current crumb
        /* === END OF OPTIONS === */

        global $post;
        $home_link    = home_url('/');
        $link_before  = '<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
        $link_after   = '</div>';
        $link_attr    = ' itemprop="url"';
        $link         = $link_before . '<a href="%1$s" ' . $link_attr . '><span itemprop="title">%2$s</span></a>' . $link_after;
        $parent_id    = $parent_id_2 = $post->post_parent;
        $frontpage_id = get_option('page_on_front');

        $output = '';
        $output .= '<div id="breadcrumbs"><div class="inner">';

        if (is_home() || is_front_page()) {
            if ($show_on_home == 1) $output .= '<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . $home_link . '" itemprop="url">' . $text['home'] . '</a></div>';
        } else {
            $output .= '<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
            if ($show_home_link == 1) {
                $output .= '<a href="' . $home_link . '" itemprop="url"><span itemprop="title">' . $text['home'] . '</span></a>';
                $output .= '</div>';
                if ($frontpage_id == 0 || $parent_id != $frontpage_id) $output .= $delimiter;
            }

            if ( is_category() ) {
                $this_cat = get_category(get_query_var('cat'), false);
                if ($this_cat->parent != 0) {
                    $cats = get_category_parents($this_cat->parent, TRUE, $delimiter);
                    if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                    $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                    $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                    if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                    $output .= $cats;
                }
                if ($show_current == 1) $output .= $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            } elseif ( is_search() ) {
                $output .= $before . sprintf($text['search'], get_search_query()) . $after;
            } elseif ( is_day() ) {
                $output .= sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
                $output .= sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
                $output .= $before . get_the_time('d') . $after;
            } elseif ( is_month() ) {
                $output .= sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
                $output .= $before . get_the_time('F') . $after;
            } elseif ( is_year() ) {
                $output .= $before . get_the_time('Y') . $after;
            } elseif ( is_single() && !is_attachment() ) {
                if ( get_post_type() != 'post' ) {
                    $post_type = get_post_type_object(get_post_type());
                    $slug = $post_type->rewrite;
                    printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
                    if ($show_current == 1) $output .= $delimiter . $before . get_the_title() . $after;
                } else {
                    $cat = get_the_category(); $cat = $cat[0];
                    $cats = get_category_parents($cat, TRUE, $delimiter);
                    if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                    $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                    $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                    if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                    $output .= $cats;
                    if ($show_current == 1) $output .= $before . get_the_title() . $after;
                }
            } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
                $post_type = get_post_type_object(get_post_type());
                $output .= $before . $post_type->labels->singular_name . $after;
            } elseif ( is_attachment() ) {
                $parent = get_post($parent_id);
                $cat = get_the_category($parent->ID); $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $delimiter);
                $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                $output .= $cats;
                printf($link, get_permalink($parent), $parent->post_title);
                if ($show_current == 1) $output .= $delimiter . $before . get_the_title() . $after;
            } elseif ( is_page() && !$parent_id ) {
                if ($show_current == 1) $output .= $before . get_the_title() . $after;
            } elseif ( is_page() && $parent_id ) {
                if ($parent_id != $frontpage_id) {
                    $breadcrumbs = array();
                    while ($parent_id) {
                        $page = get_page($parent_id);
                        if ($parent_id != $frontpage_id) {
                            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                        }
                        $parent_id = $page->post_parent;
                    }
                    $breadcrumbs = array_reverse($breadcrumbs);
                    for ($i = 0; $i < count($breadcrumbs); $i++) {
                        $output .= $breadcrumbs[$i];
                        if ($i != count($breadcrumbs)-1) $output .= $delimiter;
                    }
                }
                if ($show_current == 1) {
                    if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) $output .= $delimiter;
                    $output .= $before . get_the_title() . $after;
                }
            } elseif ( is_tag() ) {
                $output .= $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            } elseif ( is_author() ) {
                global $author;
                $userdata = get_userdata($author);
                $output .= $before . sprintf($text['author'], $userdata->display_name) . $after;
            } elseif ( is_404() ) {
                $output .= $before . $text['404'] . $after;
            }
            if ( get_query_var('paged') ) {
                if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) $output .= ' (';
                $output .= __('Page') . ' ' . get_query_var('paged');
                if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) $output .= ')';
            }
        }

        $output .= '</div></div><!-- end breadcrumbs -->';

        return $output;
    } // end custom_dimox_breadcrumbs
    add_shortcode('print_breadcrumbs', 'custom_dimox_breadcrumbs');
?>
