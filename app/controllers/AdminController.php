<?php

class AdminController extends Controller {
	/**
     * Theme instance.
     *
     * @var \Teepluss\Theme\Theme
     */
    protected $theme;

    /**
     * Construct
     *
     * @return void
     */
    public function __construct()
    {
        // Using theme as a global.
        $this->theme = Theme::uses('admin')->layout('default');
        $this->theme->asset()->container('custom-css')->usePath()->add('DT_bootstrap', 'js/data-tables/DT_bootstrap.css');
       
        $this->theme->asset()->container('custom-js')->usePath()->add('dataTables', 'js/data-tables/jquery.dataTables.js');
        $this->theme->asset()->container('custom-js')->usePath()->add('DT_bootstrap', 'js/data-tables/DT_bootstrap.js', array('dataTables'));
        $this->theme->asset()->container('custom-js')->usePath()->add('table-editable', 'js/table-editable.js', array('dataTables'));
        // <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />
    }
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
