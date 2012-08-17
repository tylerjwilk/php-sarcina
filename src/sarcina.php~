<?php

/*

     Object Inheritance Tree
     -----------------------------
     Sarcina
          SObject
               SControl
                    SButton
                    SSelect
                    SRadio
                    SCheckbox
                    SInput
                    STextArea
                                  

*/





     #doc
     #     classname:     SObject
     #     scope:          PUBLIC
     #
     #/doc
     
     class SObject
     {
          // obj vars
          protected $_data = array(); // id, class, style
          
          var $tag  = 'object';
          
          // construct object
          function __construct ($id = '', $class = '', $style = '')
          {
               $this->setId($id);
               $this->setClass($class);
               $this->setStyle($style);
          }
          
          // getters
          function getId()    { return $this->_data['id']; }
          function getStyle() { return $this->_data['style']; }
          function getClass() { return $this->_data['class']; }
          function getClick() { return $this->_data['click']; }
          
          // set this objects style
          function setStyle($style)
          {
               $this->_data['style'] = trim($style);
               return $this;
          }
          
          // set this objects classes
          function setClass($class)
          {
               $this->_data['class'] = trim($class);
               return $this;
          }
          
          // set the objects id
          function setId($id)
          {
               $this->_data['id'] = trim($id);
               return $this;
          }
          
          function setClick($javascript)
          {
               $this->_data['click'] = $javascript;
          }    
          
          function render() 
          { 
               $tag = $this->tag;
               ?><<?=$tag;?> class="<?=$this->getClass();?>" 
                    style="<?=$this->getStyle();?>" 
                         id="<?=$this->getId();?>" 
                              onclick="<?=$this->getClick();?>"></<?=$tag;?>><?
          }
                            
     }




     #doc
     #     classname:     SObject
     #     scope:          PUBLIC
     #
     #/doc
     
     class SButton extends SObject
     {
          var $tag = 'button';
                    
     }


