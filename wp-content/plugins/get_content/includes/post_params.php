<?php
class PostParams
{
    private static $what_i_do_additional_fields = array(
        'element_type', 'description',
        'position_field' => array('position'),
    );


    /**
     * Get additional fields by post type
     * @param $post_type
     * @return null
     */
    public static function getAdditionalFields($post_type) {
        $fields_type = $post_type .'_additional_fields';

        return (isset(self::$$fields_type)) ? self::$$fields_type : null;
    }
}