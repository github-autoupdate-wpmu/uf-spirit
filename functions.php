<?php

include_once get_template_directory() . '/library/upfront_functions.php';
include_once get_template_directory() . '/library/class_upfront_debug.php';
include_once get_template_directory() . '/library/class_upfront_server.php';
include_once get_template_directory() . '/library/class_upfront_theme.php';

class Spirit extends Upfront_ChildTheme {
	public function initialize() {
		add_filter('upfront_augment_theme_layout', array($this, 'augment_layout'));
		$this->add_actions_filters();
		$this->populate_pages();
		//update_option('date_format', "d");
		//update_option('time_format', "M");
	}

	public function get_prefix(){
		return 'Spirit';
	}

	public static function serve(){
		return new self();
	}

	public function populate_pages() {
		
	}

	protected function add_actions_filters() {
		// Include current theme style
		add_action('wp_head', array($this, 'enqueue_styles'), 200);
	}

	public function enqueue_styles() {
		wp_enqueue_style('current_theme', get_stylesheet_uri());
	}
    public function augment_layout ($layout) {
        if (empty($layout['regions'])) return $layout;
        $layout['regions'] = $this->augment_regions($layout['regions']);
        return $layout;
    }

    public function augment_regions ($regions) {
        if (isset( $this->_slider_imported ) && $this->_slider_imported) return $regions;

        if (empty($regions) || !is_array($regions)) return $regions;
        foreach ($regions as $idx => $region) {
            if (empty($region['properties']) || !is_array($region['properties'])) continue;
            foreach($region['properties'] as $pidx => $prop) {
                if (empty($prop['name']) || empty($prop['value']) || 'background_slider_images' !== $prop['name']) continue;
                foreach ($prop['value'] as $order_id => $attachment_src) {
                    if (is_numeric($attachment_src)) continue; // A hopefully existing image.
                    $regions[$idx]['properties'][$pidx]['value'][$order_id] = $this->_import_slider_image($attachment_src);
                }
            }
        }

        $this->_slider_imported = true;
        return $regions;
    }

}

Spirit::serve();



/**
 * Temporary version check nag
 */
if (!is_admin()) {
    function upfront_version_check_script () {
        if (function_exists('upfront_exporter_is_running') && upfront_exporter_is_running()) return false; // Not in exporter
        if (version_compare(wp_get_theme('upfront')->Version, '1.0-alpha-1', 'ge')) return false;
?>
<style type="text/css">
.upfront-version_compatibility-nag {
    font-size: 16px;
    margin: 0 auto;
    width: 90%;
    max-width: 600px;
    background: #fff;
    text-align: center;
    padding: 20px;
    box-shadow: 0 0 15px 5px #222;
}
.upfront-version_compatibility-nag p {
    text-align: center;
    font-size: 16px;
    margin-bottom: 2em;
    line-height: 1.8em;
}
.upfront-version_compatibility-nag a {
    font-size: 16px;
    width: 40%;
    border-radius: 4px;
    margin: 0 10px;
    text-decoration: none;
    display: inline-block;
    padding: 10px 0;
}
.upfront-version_compatibility-nag a.update {
    background: rgb(29, 195, 136);
    color: #fff;
    
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(31, 205, 143)), to(rgb(29, 195, 136)));
    background: -webkit-linear-gradient(top, rgb(31, 205, 143), rgb(29, 195, 136));
    background: -moz-linear-gradient(top, rgb(31, 205, 143), rgb(29, 195, 136));
    background: -ms-linear-gradient(top, rgb(31, 205, 143), rgb(29, 195, 136));
    background: -o-linear-gradient(top, rgb(31, 205, 143), rgb(29, 195, 136));
}
.upfront-version_compatibility-nag a.boot {
    background: rgb(238, 238, 238);
    color: rgb(119, 125, 170);

    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(228, 228, 228)), to(rgb(228, 228, 228)));
    background: -webkit-linear-gradient(top, rgb(238, 238, 238), rgb(228, 228, 228));
    background: -moz-linear-gradient(top, rgb(238, 238, 238), rgb(228, 228, 228));
    background: -ms-linear-gradient(top, rgb(238, 238, 238), rgb(228, 228, 228));
    background: -o-linear-gradient(top, rgb(238, 238, 238), rgb(228, 228, 228));
}
</style>
<script type="text/javascript">
;(function ($, undefined) {

    /**
     * Overridden Upfront.Application.start
     *
     * Actual application starting.
     *
     * @return {Boolean}
     */
    function application_override () {
        _nag = $.magnificPopup.open({
            items: {
                src: '' + 
                    '<div class="upfront-version_compatibility-nag">' +
                        '<p>You have recently upgraded your theme. Please Upgrade to <b>Upfront 1.0</b> in order to be able to edit this theme.</p>' +
                        '<div>' +
                            '<a class="update" href="<?php echo esc_url(admin_url("themes.php")); ?>">Update</a>' +
                        '</div>' +
                    '</div>' +
                '',
                type: 'inline'
            },
            mainClass: 'uf-upgrade-notice'
        });
        return false;
    }

    (function boot () {
        if (!((window.Upfront || {}).Events || {}).on) return setTimeout(boot);
        Upfront.Events.on("application:loaded:layout_editor", function () {
            // Monkeypatch the Application.start method so we can't run whatsoever
            Upfront.Application.start = application_override;
        });
    })();

})(jQuery);
</script>
<?php
    }
    add_action('wp_footer', 'upfront_version_check_script');
}
