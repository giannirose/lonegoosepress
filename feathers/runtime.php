<?php	
PerchSystem::register_feather('lonegoose');

class PerchFeather_lonegoose extends PerchFeather
{
	public function get_css($opts, $index, $count)
	{	
		$out = array();

		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/lonegoose.css',
					'type'=>'text/css'
				));

		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/lonegoose-gridflex.css',
					'type'=>'text/css'
				));

		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/accordion_cp01.css',
					'type'=>'text/css'
				));

		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/shop-lg.css',
					'type'=>'text/css'
				));

	$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/modalhf.css',
					'type'=>'text/css'
				));

	$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/blog.css',
					'type'=>'text/css'
				));					
		
		return implode("\n\t", $out)."\n";
	}

	public function get_javascript($opts, $index, $count)
	{
		$out = array();
		
		if (!$this->component_registered('jquery')) {
			$out[] = $this->_script_tag(array(
				'src'=>$this->path.'/js/jquery-1.8.2.min.js'
			));
			$this->register_component('jquery');
		}
		
		if (!$this->component_registered('respond.js')) {
			$out[] = $this->_conditional_comment('lt IE 9', $this->_script_tag(array(
					'src'=>$this->path.'/js/respond.min.js'
				)));
			$this->register_component('respond.js');
		}

		if (!$this->component_registered('accordioncp01.js')) {
			$out[] = $this->_conditional_comment('lt IE 9', $this->_script_tag(array(
					'src'=>$this->path.'/js/accordion_cp01.js'
				)));
			$this->register_component('accordioncp01.js');
		}

		return implode("\n\t", $out)."\n";
	}
}
?>
