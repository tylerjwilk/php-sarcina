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
          private $_data = array(); // id, class, style
          
          // construct object
          function __construct ($id = '', $classes = '', $style = '')
          {
               $this->setId($id);
               $this->setClasses($class);
               $this->setStyle($style);
          }
          
          // set this objects style
          function setStyle($style)
          {
               $this->_data['style'] = trim($style);
               return $this;
          }
          
          // set this objects classes
          function setClasses($class)
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
          
          /*
          // add another class
          function addClass($class)
          {
               // test
               $class = trim($class);
                           
               // only 1 class and it is this class   
               if ($this->_data['class'] == $class) return $this;
               
               // blow up the class string and add new class
               $classes = explode(' ', $this->_data['class']);
               $classes[] = $class;
               
               // unique the array
               $classes = array_unique($classes);
               
               // implode the classes
               $classes = implode(' ', $classes);
               
               // update class
               $this->setClass($classes);

               return $this;
          }
          */
                  
     }




