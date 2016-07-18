<?php
/**
 * Widget API: Antonia_Widget_ImgBanner class
 *
 * @package antonia
 */

class antonia_img_banner extends WP_Widget
{
    public function __construct() {
      parent::__construct("text_widget", "Image Banner",
        array("description" => "Banner"));
    }
		public function form($instance) {
	    $alt = "";
	    $img = "";
	    // если instance не пустой, достанем значения
	    if (!empty($instance)) {
	        $alt = $instance["alt"];
	        $img = $instance["img"];
	    }
	 
	    $tableId = $this->get_field_id("alt");
	    $tableName = $this->get_field_name("alt");
	    echo '<label for="' . $tableId . '">Alt</label><br>';
	    echo '<input id="' . $tableId . '" type="text" name="' .
	    $tableName . '" value="' . $alt . '"><br>';
	 
	    $textId = $this->get_field_id("img");
	    $textName = $this->get_field_name("img");
	    echo '<label for="' . $textId . '">Img</label><br>';
	    echo '<textarea id="' . $textId . '" name="' . $textName .
	    '">' . $img . '</textarea>';
		}
		public function update($newInstance, $oldInstance) {
	    $values = array();
	    $values["alt"] = htmlentities($newInstance["alt"]);
	    $values["img"] = htmlentities($newInstance["img"]);
	    return $values;
		}
		public function widget($args, $instance) {
			$alt = $instance["alt"];
			$img = $instance["img"];

			echo "<h2>$alt</h2>";
			echo "<img src='$img' alt='brand'>";
		}
}