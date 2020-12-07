<?php
/**
 * Class SampleTest
 *
 * @package Github_Actions_Wordpress_Phpunit
 */

/**
 * Sample test case.
 */
class PluginTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	public function test_insert_post() {
        $my_post = array(
            'post_title'    => 'My post',
            'post_content'  => 'This is my post.',
            'post_status'   => 'publish',
            'post_author'   => 1,
        );
        $post_id = wp_insert_post( $my_post );

		$this->assertInternalType( 'int', $post_id );
	}
}
