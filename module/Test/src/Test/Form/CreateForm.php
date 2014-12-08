<?php

namespace Test\Form;

use Test\Form\Filter\Create;
use Zend\Form\Form;

class CreateForm extends Form
{
    public function __construct($name = null, array $options = [])
    {
        parent::__construct('form-create');
        $this->setAttribute('method', 'post')->setAttribute('role', 'form')
            ->setAttribute('class', 'form-create form-horizontal');
        $this->setInputFilter(new Create($options['sm']));
        $this->add(
            [
                'name' => 'email',
                'type' => 'email',
                'options' => [
                    'min' => 3,
                    'max' => 225,
                    'label' => 'email',
                ],
                'attributes' => ['class' => 'form-control']
            ]
        );

        $this->add(
            [
                'name' => 'name',
                'type' => 'text',
                'options' => [
                    'min' => 3,
                    'max' => 255,
                    'label' => 'name',
                ],
                'attributes' => ['class' => 'form-control']
            ]
        );
    }
}
