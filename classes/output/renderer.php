<?php
namespace local_quickchat\output;

defined('MOODLE_INTERNAL') || die();

class renderer extends \plugin_renderer_base {
    public function render_quickchat_modal() {
        return $this->render_from_template('local_quickchat/quickchat_modal', []);
    }
}