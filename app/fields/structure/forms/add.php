<?php 

return function($page, $store) {

  $form = new Kirby\Panel\Form($store->fields());
  $form->cancel($page, 'show');
  $form->buttons->submit->value = l('add');

  return $form;

};