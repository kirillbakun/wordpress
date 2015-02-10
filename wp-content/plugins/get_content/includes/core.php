<?php
    function get_content_get_posts($post_type = 'post', $additional_fields = array(), $position_field = null, $offset = 0, $limit = null) {
        global $wpdb;

        if(!empty($position_field)) {
            $query = "SELECT p.ID, p.post_title, pm.meta_key, pm.meta_value
                        FROM wp_posts p
                        INNER JOIN wp_postmeta pm ON pm.post_id = p.ID
                        WHERE p.post_status = 'publish'
                        AND p.post_type = '" .$post_type ."'" ."
                        AND pm.meta_key = 'wpcf-" .$position_field ."'" ."
                        ORDER BY pm.meta_value ASC, p.post_date DESC";
        } else {
            $query = "SELECT p.ID, p.post_title
                        FROM wp_posts p
                        WHERE p.post_status = 'publish'
                        AND p.post_type = '" .$post_type ."'" ."
                        ORDER BY p.post_date DESC";
        }

        if(((int)$limit) || ((int)$offset)) {
            $query .= ' LIMIT ';
            if(!empty($offset)) {
                $query .= (int)$offset .', ';
            }
            if(!empty($limit)) {
                $query .= (int)$limit;
            } else {
                $query .= 9999999;
            }
        }

        $posts_main_data = $wpdb->get_results($query);

        if(!empty($additional_fields) && !empty($posts_main_data)) {
            $items_keys = '';
            foreach($posts_main_data as $key => $posts_main_data_item) {
               $items_keys .= $posts_main_data_item->ID .', ';

                $posts_main_data[$posts_main_data_item->ID] = $posts_main_data_item;
                unset($posts_main_data[$key]);
            }
            $items_keys = trim($items_keys, ', ');

            $additional_fields_values = '';
            foreach($additional_fields as $additional_field) {
                $additional_fields_values .= " OR pm.meta_key = 'wpcf-" .$additional_field ."'";
            }

            $additional_fields_values = 'AND (' .trim($additional_fields_values, ' OR ') .')';

            $query = "SELECT pm.post_id, pm.meta_key, pm.meta_value
                        FROM wp_postmeta pm
                        WHERE pm.post_id IN (" .$items_keys .")"
                        .$additional_fields_values;
            $posts_additional_data = $wpdb->get_results($query);

            foreach($posts_additional_data as $additional_data_item) {
                $post_id = $additional_data_item->post_id;
                if(isset($posts_main_data[$post_id])) {
                    $additional_data_item_key = str_replace('wpcf-', '', $additional_data_item->meta_key);
                    $posts_main_data[$post_id]->$additional_data_item_key = $additional_data_item->meta_value;
                }
            }
        }

        return $posts_main_data;
    }