<?php

class FormBS
{
  // Criada por Ribamar FS
  // Todos os elementnos de um form do HTML5 e quase todos os atributos
  // Usando classes do BootStrap 4
  // https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
  public function formStart($name, $id='', $method='POST', $action='', $target='blank')
  {
    print '<div class="container">';
  	$form = '';
  	if ((!empty($name) && trim($name)!='')){
      $form = "<form name=\"$name\" method=\"$method\" id=\"$id\" action=\"$action\" target=\"$target\">";
  	}else {
  	    return 'Invalid Form';
  	}
  	    return $form."\n";
  }

 public function inputLabel($name)
  {
  	$label= '';
  	$name = trim(strip_tags(htmlspecialchars($name)));
  	$label ="<b><label for =\"$name\" class=\"form-check-label\">".ucFirst($name)."</label></b>";
  	return $label;
  }

  public function formEnd()
  {
  	$_formend = '';
  	$_formend = '</form>';
  	return $_formend.'<br>';
  }

  public function input($name='', $value=null, $size=20, $max=20, $readonly=1, $required=0, $placeholder='', $autofocus=1) 
  {
  	$_element = '';
  	
  	if ((!empty($name) && trim($name)!='')){
 	    $name=trim(strip_tags(htmlspecialchars($name)));
  		$value=trim(strip_tags(htmlspecialchars($value))); 
      if($readonly == 1) $readonly = 'readonly';
      if($required == 1) $required = 'required';
      if($autofocus == 1) $autofocus = 'autofocus';

 	    $_element .= $this->inputLabel($name)." <input type=\"text\" name=\"$name\" class=\"form-control\" size=\"$size\" maxlength=\"$max\" value=\"$value\" placeholder=\"$placeholder\"  $autofocus $readonly $required>"."\n<br>";
  	}
  	else {
  		return 'Invalid Element';
  	}  
    return $_element.'<br>';
   }  

  public function inputPassword($name='', $size=20, $max=20, $required=0, $placeholder='') 
  {
  	$_element = '';
  	
  	if ((!empty($name) && trim($name)!='')){
 	    $name=trim(strip_tags(htmlspecialchars($name)));
      if($required == 1) $required = 'required';

 	    $_element .= $this->inputLabel($name)." <input type=\"password\" name=\"$name\" class=\"form-control\" size=\"$size\" maxlength=\"$max\" placeholder=\"$placeholder\" $required>"."\n<br>";
  	}
  	else {
  		return 'Invalid Element';
  	}  
    return $_element.'<br>';
   }  

  public function inputEmail($name='', $size=20, $max=20, $required=0, $placeholder='', $value='') 
  {
  	$_element = '';
  	
  	if ((!empty($name) && trim($name)!='')){
 	    $name=trim(strip_tags(htmlspecialchars($name)));
      if($required == 1) $required = 'required';

 	    $_element .= $this->inputLabel($name)." <input type=\"email\" name=\"$name\" class=\"form-control\" size=\"$size\" maxlength=\"$max\" placeholder=\"$placeholder\" $required value=\"$value\">"."\n<br>";
  	}
  	else {
  		return 'Invalid Element';
  	}  
    return $_element.'<br>';
   }  

  public function inputHidden($name='', $value='') 
  {
  	$_element = '';
  	
  	if ((!empty($name) && trim($name)!='')){
 	    $name=trim(strip_tags(htmlspecialchars($name)));

 	    $_element .= $this->inputLabel($name)." <input type=\"hidden\" name=\"$name\" value=\"$value\">"."\n<br>";
  	}
  	else {
  		return 'Invalid Element';
  	}  
    return $_element.'<br>';
   }  

   public function inputTextArea($name='', $value=null, $rows='5', $cols='60')
   {
   	$_element = '';
   	if(!empty($name) && trim($name)!=''){
   	    $_element .= $this->inputLabel($name).'<br><textarea name=$name rows=$rows cols=$cols';
   	    $_element .= '>';
   	    $_element .= trim(strip_tags(htmlspecialchars($value)));
   	    $_element .= '</textarea>';
   	}else {
   		return 'Invalid Element';
   	}
   	
     	return $_element."\n<br>";
   }  

   public function inputSelect($name='', $id=null, $class='', $values=array(), $selected=null, $attributes=array())
   {
   	$_element = '';
    $_status = '';
    
   	if(!empty($values) && (!empty($name) && trim($name)!='')){
   		$_element .= $this->inputLabel($name)."\n".'<select name=$name id=$id';
   		$_element .= ' '.implode(' ', $attributes); //add any other additional html attributes, css styling or javascript functions for example
   		$_element .= '>';
   		
   	foreach($values as $val){
   		$val=trim(strip_tags(htmlspecialchars($val)));
   		
   		if($selected==$val){
   			$_status='selected';
   		}else {
   			$_status='';
   		}
   		$_element .= '\n<option value=$val';
   		$_element .= $_status.' >';  
   		$_element .= $val;
   		$_element .= '</option>';
   	}
   	}else {
   		return 'Invalid Element';
   	}

   	    $_element .= "\n".'</select>'."\n<br>";
   	    return $_element;
   }

  public function inputRadio($name, $label = 'Times',$values = array(), $id = '', $selected = '')
  {
    $radio = $this->inputLabel($name)."<br>\n";
    foreach($values as $value){
      if($selected == $value){
        $radio .="<input type=\"radio\" name=\"$name\" value=\"$value\" checked $selected>".$value."\n";
      }else{
        $radio .="<input type=\"radio\" name=\"$name\" value=\"$value\">".$value."\n";
      }
    }
     return $radio."<br>\n";
  }

    public function inputCheckbox($name, $label = '', $values = array(), $id = '', $selected = '')
    {
      $check = $this->inputLabel($name)."<br>\n";
      foreach($values as $value){
        if($selected == $value){
          $check .="<input type=\"checkbox\" name=\"$name\" value=\"$value\" checked $selected>".$value."\n";
        }else{
          $check .="<input type=\"checkbox\" name=\"$name\" value=\"$value\">".$value."\n";
        }
      }
       return $check."<br>\n";
    }

    public function inputColor($name, $value = '#fff')
    {
      $color = $this->inputLabel($name)."<br>";
      $color .="<input type=\"color\" name=\"$name\" value=\"$value\">\n";
       return $color."<br>\n";
    }

    public function inputDate($name,$value = '')
    {
      $date = $this->inputLabel($name)."<br>";
      $date .="<input type=\"date\" name=\"$name\" value=\"$value\">\n";
       return $date."<br>\n";
    }

    public function inputDateTime($name, $value = '')
    {
      $date = $this->inputLabel($name)."<br>";
      $date .="<input type=\"datetime\" name=\"$name\" value=\"$value\">\n";
       return $date."<br>\n";
    }

    public function inputMonth($name,$value = '')
    {
      $month = $this->inputLabel($name)."<br>";
      $month .="<input type=\"month\" name=\"$name\" value=\"$value\">\n";
       return $month."<br>\n";
    }
    
    public function inputNumber($name, $min,$max,$value = '')
    {
      $number = $this->inputLabel($name)."<br>";
      $number .="<input type=\"number\" name=\"$name\" value=\"$value\" \"$min\" \"$max\" required>\n";
      return $number."<br>\n";
    }
    
    public function inputRange($name, $min, $max, $value = '')
    {
      $range = $this->inputLabel($name)."<br>";
      $range .="<input type=\"range\" name=\"$name\" min=\"$min\" max=\"$max\" value=\"$value\">\n";
      return $range."<br>\n";
    }
    
    public function inputSearch($name)
    {
      $search = $this->inputLabel($name)."<br>";
      $search .="<input type=\"search\" name=\"$name\">\n";
      return $search."<br>\n";
    }
    
    public function inputTel($name, $pattern = '[0-9]{3}-[0-9]{4}-[0-9]{4}')// Ex: 085-3391-2356
    {
      $tel = $this->inputLabel($name)."<br>";
      $tel .="<input type=\"tel\" name=\"$name\" pattern=\"$pattern\" required>\n";
      return $tel."<br>\n";
    }
    
    public function inputTime($name, $min, $max)
    {
      $time = $this->inputLabel($name)."<br>";
      $time .="<input type=\"time\" name=\"$name\" min=\"$min\" max=\"$max\" required>\n";
      return $time."<br>\n";
    }
    
    public function inputUrl($name,$placeholder,$pattern, $size)
    {
      $url = $this->inputLabel($name)."<br>";
      $url .="<input type=\"url\" name=\"$name\" placeholder=\"$placeholder\" pattern=\"$pattern\" required>\n";
      return $url."<br>\n";
    }
    
    public function inputWeek($name, $min, $max)
    {
      $week = $this->inputLabel($name)."<br>";
      $week .="<input type=\"week\" name=\"$name\" min=\"$min\" max=\"$max\" required>\n";
      return $week."<br>\n";
    }

    public function inputButton($type,$name,$value)
    {
      $but .="<br><input type=\"$type\" name=\"$name\" class=\"btn btn-primary\" value=\"$value\">\n";
      return $but."<br>\n";
      print '</div>';
    }
}
print '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">';

$form = new FormBS();
print $form->formStart('frmTeste', $id='', $class='',$method='POST',$target='_blank');
print $form->input($name='nome', $value=null, $size=40, $max=50, $readonly=0, $required=1, $placeholder='Teste', $autofocus=1);
print $form->inputTextArea($name='txtAr', $id=null, $value='$name');
print $form->inputSelect($name='sel', $id=null, $class='', $values=array(0=>'zero', 1=>'um', 2=>'dois'), $selected='dois', $attributes=array(0=>'zero',1=>'um', 2=>'dois'));
print $form->inputRadio('times', $label = 'Times de futebol', $values = ['Ceará', 'Fortaleza', 'Tiradentes'], $id = '', $selected = 'Tiradentes');
print $form->inputCheckbox('paises', $label = 'Países', $values = ['Brasil', 'EUA', 'África do Sul'], $id = '', $selected = 'África do Sul');
print $form->inputColor('cor', $value = '#f00');
print $form->inputDate('data','2020-05-21');
print $form->inputDateTime('dt', $value = '2020--5-21 19:31');
print $form->inputMonth('mes',$value = 'december');
print $form->inputNumber('num', '10','120','70');
print $form->inputRange('ran', '5', '85', '45');
print $form->inputSearch('busca');
print $form->inputTel('tel', '[0-9]{3}-[0-9]{4}-[0-9]{4}');
print $form->inputTime('time', '09:20', '12:34');
print $form->inputUrl('url','https://ribafs.github.io',"https://.*", '30');
print $form->inputWeek('wee', '2020-W18', '2020-W26');
print $form->inputButton('submit','enviar','Enviar');
print $form->formEnd();
