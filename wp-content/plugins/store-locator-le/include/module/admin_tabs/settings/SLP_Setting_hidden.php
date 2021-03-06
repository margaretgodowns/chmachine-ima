<?php
if ( ! class_exists( 'SLP_Setting_hidden' ) ) {
	/**
	 * The hidden setting.
	 */
	class SLP_Setting_hidden extends SLP_Setting {
		public function display() {
			?>
			<input type='hidden'
			       id='<?php echo $this->id; ?>' name='<?php echo $this->name; ?>'
			       data-field='<?php echo $this->data_field; ?>'
			       value='<?php echo $this->display_value; ?>'
				>
			<?php
		}
	}
}