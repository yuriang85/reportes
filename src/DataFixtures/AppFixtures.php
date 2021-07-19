<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;
    private $manager;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        // pasar interface a atributos
        $this->encoder = $encoder;
    }

    // Ejecutar todos los load
    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;
        $this->loadAll();

    }


    // Llamar a todo lo que se va a cargar
    public function loadAll()
    {
        // usuarios internos
        $this->loadUserIn($this->getManager());

    }

        // Crear user admin
        public function loadUserIn(ObjectManager $manager)
        {
            $user = new User();
            $user->setEmail('admin@ltu.sld.cu');
            $user->setNombre('Administrador');
            $user->setApellidos('NODO UCM Las Tunas');
            $plainPassword = "123456";
            $password = $this->encoder->encodePassword($user, $plainPassword);
            $user->setPassword($password);
            $user->setTelef('56907766');
            $user->setRoles(["ROLE_ADMIN"]);
            $user->setActivo(true);
            $user->setOcupacion("Administrador de la red");
            $user->setUserType("ROLE_ADMIN");
            $manager->persist($user);
            $manager->flush();
        }


    /**
     * Get the value of manager
     */ 
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set the value of manager
     *
     * @return  self
     */ 
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }
}
