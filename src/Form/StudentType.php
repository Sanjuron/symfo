<?php

namespace App\Form;

use App\Entity\Student;
use App\Entity\Project;
use App\Entity\SchoolYear;
use App\Entity\Tag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', EntityType::class, [
                // looks for choices from this entity
                'class' => Student::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'firstname',
            
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                // 'expanded' => true,
            ])
            ->add('lastname', EntityType::class, [
                // looks for choices from this entity
                'class' => Student::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'lastname',
            
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                // 'expanded' => true,
            ])
            ->add('email', EntityType::class, [
                // looks for choices from this entity
                'class' => Student::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'email',
            
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                // 'expanded' => true,
            ])
            ->add('schoolYear', EntityType::class, [
                // looks for choices from this entity
                'class' => SchoolYear::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'schoolYear',
            
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                'expanded' => true,
            ])
            ->add('tags', EntityType::class, [
                // looks for choices from this entity
                'class' => Tag::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'tags',
            
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                'expanded' => true,
            ])
            ->add('projects', EntityType::class, [
                // looks for choices from this entity
                'class' => Project::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'projects',
            
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                'expanded' => true,
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
