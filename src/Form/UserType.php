<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            //->add('roles', )
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Los campos de contraseña deben coincidir.',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => true,
                'first_options'  => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password'],
            ])
            ->add('nombre', TextType::class)
            ->add('apellidos', TextType::class)
            ->add('activo', CheckboxType::class, [
                'required' => false,
            ])
            //->add('fechaAlta')
            //->add('fechaUpdate')
            ->add('telef', TelType::class, [
                'required' => false,
            ])
            ->add('descripcion', TextareaType::class, [
                'required' => false,
            ])
            ->add('ocupacion', TextType::class)
            ->add('usertype', ChoiceType::class, [
                'choices'  => [// Usuario: Todos, Administrativos: Aprueban solicitudes, Admiistrador: Admin Gral
                    'ROL' => '', 'Usuario' => 'ROLE_USER', 'Tecnico' => 'ROLE_TEC', 'Administrador' => 'ROLE_ADMIN'
                ],
            ])
            ->add('Registrar', SubmitType::class)
            ->add('Cancelar', ResetType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
