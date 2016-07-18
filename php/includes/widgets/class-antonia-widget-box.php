<?php
/**
 * Widget API: Antonia_Widget_Box class
 *
 * @package antonia
 */

class antonia_widget_box extends WP_Widget
{
    public function __construct() {
      parent::__construct("text_widget2", "Download Image Box",
        array("description" => "Banner"));
    }
		public function form($instance) {
	    $img = "";
	    $description = "";
	    // если instance не пустой, достанем значения
	    if (!empty($instance)) {
	        $img = $instance["img"];
	        $description = $instance["description"];
	        $downloadlink = $instance["downloadlink"];
	    }
	 
	    $tableId = $this->get_field_id("img");
	    $tableName = $this->get_field_name("img");
	    echo '<label for="' . $tableId . '">Img Path</label><br>';
	    echo '<input id="' . $tableId . '" type="text" name="' .
	    $tableName . '" value="' . $img . '"><br>';
	 
	    $textId = $this->get_field_id("description");
	    $textName = $this->get_field_name("description");
	    echo '<label for="' . $textId . '">Description</label><br>';
	    echo '<textarea id="' . $textId . '" name="' . $textName .
	    '">' . $description . '</textarea><br>';

	    $linkId = $this->get_field_id("downloadlink");
	    $linkName = $this->get_field_name("downloadlink");
	    echo '<label for="' . $linkId . '">downloadlink</label><br>';
	    echo '<input id="' . $linkId . '" type="text" name="' .
	    $linkName . '" value="' . $downloadlink . '">';
		}
		public function update($newInstance, $oldInstance) {
	    $values = array();
	    $values["img"] = htmlentities($newInstance["img"]);
	    $values["description"] = htmlentities($newInstance["description"]);
	    $values["downloadlink"] = htmlentities($newInstance["downloadlink"]);
	    return $values;
		}
		public function widget($args, $instance) {
			$img = $instance["img"];
			$description = $instance["description"];
			$downloadlink = $instance["downloadlink"];

			echo "<img src='$img' alt='$description'>";
			echo "<h2>$description</h2>";
			echo "<a href='$downloadlink'>Скачать каталог</a>";
		}
}