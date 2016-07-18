<?php

// [antonia foo="foo-value"][/antonia]
function bartag_func( $atts ) {
	extract( shortcode_atts( 
    array(
  		'foo' => 'что-то',
  		'bar' => 'что-то ещё',
      'content' => !empty ($content) ? $content : 'Пустая строка'
	), $atts ) );

	return "foo = {$foo}";
}
add_shortcode( 'bartag', 'bartag_func' );

//	 этот шорткод инициализируется, но все скрипты подгружаются только при наличии шорткода на странице.
class foobar_shortcode {
  static $add_script;
  static function init () {
      add_shortcode('foobar2', array(__CLASS__, 'foobar_func'));
      add_action('init', array(__CLASS__, 'register_script'));
      add_action('wp_footer', array(__CLASS__, 'print_script'));
  }
  static function foobar_func( $atts ) {
      self::$add_script = true; 
      return "foo and bar";
  }
  static function register_script() {
      wp_register_script( 'foo-js', get_template_directory_uri() . '/includes/js/foo.js');
  } 
  static function print_script () {
      if ( !self::$add_script ) return;
      wp_print_scripts('foo-js');
  }
}
foobar_shortcode::init();

// Создание многоуровневого шорткода https:	habrahabr.ru/company/dataart/blog/265245/

// Повторяющиеся шорткоды
add_shortcode( 'column_half', 'column_half_code' );
add_shortcode( 'column_half_inner', 'column_half_code' );
function column_half_code ( $atts, $content ) {
    return "<div class='class'>".do_shortcode($content)."</div>";
}
?>
