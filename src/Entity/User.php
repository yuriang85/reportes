<?php

namespace App\Entity;

use DateTime;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    const REGISTRO_EXITOSO = "Usuario registrado con exito";
    const REGISTRO_EXIST = "El usuario ya está registrado";
    const EDIT_SUCCESS = "Usuario actualizado";
    const DELETE_SUCCESS = "Usuario eliminado";
    const DELETE_FAIL = "Error! no se pudo eliminar el usuario";
    const USER_FAIL = "Acceso denegado! escriba usuario y contraseña";
    const NO_PASS = "Escriba una contraseña válida por favor";
    const PASS_CHANGE = "La contraseña ha sido cambiada";

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="boolean")
     */
    private $activo;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     *
     */
    private $fechaAlta;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    private $fechaUpdate;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     * @Assert\Type(
     * type="numeric",
     *      message="El valor {{ value }} no es de tipo {{ type }}."
     * )
     */
    private $telef;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descripcion;
    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $ocupacion;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $usertype;

    public function __construct()
    {
        $this->fechaAlta = new \DateTime();
        $this->roles[] = 'ROLE_USER';
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of activo
     */ 
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set the value of activo
     *
     * @return  self
     */ 
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get the value of fechaAlta
     */ 
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set the value of fechaAlta
     *
     * @return  self
     */ 
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get the value of fechaUpdate
     */ 
    public function getFechaUpdate()
    {
        return $this->fechaUpdate;
    }

    /**
     * Set the value of fechaUpdate
     *
     * @return  self
     */ 
    public function setFechaUpdate($fechaUpdate)
    {
        $this->fechaUpdate = $fechaUpdate;

        return $this;
    }

    /**
     * Get type="numeric",
     */ 
    public function getTelef()
    {
        return $this->telef;
    }

    /**
     * Set type="numeric",
     *
     * @return  self
     */ 
    public function setTelef($telef)
    {
        $this->telef = $telef;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of ocupacion
     */ 
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /**
     * Set the value of ocupacion
     *
     * @return  self
     */ 
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;

        return $this;
    }

    /**
     * Get the value of usertype
     */ 
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set the value of usertype
     *
     * @return  self
     */ 
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;

        return $this;
    }
}
