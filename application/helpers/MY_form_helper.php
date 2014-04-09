<?php

// --------------------------------------------------------------------

/**
 * Drop-down Menu
 *
 * @access	public
 * @param	string
 * @param	array
 * @param	string
 * @param	string
 * @return	string
 */

	function form_dropdown($name = '', $options = array(), $selected = array(), $extra = '',$default_value = FALSE,$inital_value="")
	{
		if ( ! is_array($selected))
		{
			$selected = array($selected);
		}

		// If no selected state was submitted we will attempt to set it automatically
		if (count($selected) === 0)
		{
			// If the form name appears in the $_POST array we have a winner!
			if (isset($_POST[$name]))
			{
				$selected = array($_POST[$name]);
			}
		}

		if ($extra != '') $extra = ' '.$extra;

		$multiple = (count($selected) > 1 && strpos($extra, 'multiple') === FALSE) ? ' multiple="multiple"' : '';

		$form = '<select name="'.$name.'"'.$extra.$multiple.">\n";

		$form .= ($default_value) ? '<option value="'.$inital_value.'">'.$default_value.'</option>\n' : '';

		foreach ($options as $key => $val)
		{
			$key = (string) $key;

			if (is_array($val))
			{
				$form .= '<optgroup label="'.$key.'">'."\n";



				foreach ($val as $optgroup_key => $optgroup_val)
				{
					$sel = (in_array($optgroup_key, $selected)) ? ' selected="selected"' : '';

					$form .= '<option value="'.$optgroup_key.'"'.$sel.'>'.(string) $optgroup_val."</option>\n";
				}

				$form .= '</optgroup>'."\n";
			}
			else
			{
				$sel = (in_array($key, $selected)) ? ' selected="selected"' : '';

				$form .= '<option value="'.$key.'"'.$sel.'>'.(string) $val."</option>\n";
			}
		}

		$form .= '</select>';

		return $form;
	}


/**
  * Radio Button
  *
  * @access  public
  * @param   mixed
  * @param   string
  * @param   bool
  * @param   string
  * @return  string
  */
	if ( ! function_exists('form_radio'))
	{
	      function form_radio($data = '', $value = '', $checked = FALSE, $extra = '')
	     {
	         if ( ! is_array($data))
	        {
	             $data = array('name' => $data);
	         }

			/*if (count($checked) === 0)
			{
				// If the form name appears in the $_POST array we have a winner!
				if (isset($_POST[$name]))
				{
					$selected = array($_POST[$name]);
				}
			}

			if (is_array($data) AND array_key_exists('checked', $data))
			{
				$checked = $data['checked'];

				if ($checked == FALSE)
				{
					unset($data['checked']);
				}
				else
				{
					$data['checked'] = 'checked';
				}
			}*/

	         $data['type'] = 'radio';
	        return form_checkbox($data, $value, $checked, $extra);
	     }
	 }


	/**
	  * Set Radio
	  *
	  * Let's you set the selected value of a radio field via info in the POST array.
	  * If Form Validation is active it retrieves the info from the validation class
	  *
	  * @access  public
	  * @param   string
	  * @param   string
	  * @param   bool
	  * @return  string
	  */
	 if ( ! function_exists('set_radio'))
	 {
	    function set_radio($field = '', $value = '', $default = FALSE)
	     {
	          $OBJ =& _get_validation_object();

	         if ($OBJ === FALSE)
	         {

	             if ( ! isset($_POST[$field]))
	             {
	                 if (count($_POST) === 0 AND $default == TRUE)
	                 {
	                      return ' checked="checked"';
	                  }
	                  return '';
	              }

	              if (is_array($field))
	              {
	                  if ( ! in_array($value, $field))
	                  {
	                      return '';
	                  }
	              }
	              else
	             {
	                  if (($field == '' OR $value == '') OR ($field != $value))
	                  {
	                     return '';
	                 }
	             }

	             return ' checked="checked"';
	         }

	         return $OBJ->set_radio($field, $value, $default);
	     }
	 }




?>