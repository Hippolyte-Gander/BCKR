<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'adresse' => [parent::class, 'adresse', null],
        "\0".parent::class."\0".'commentaires' => [parent::class, 'commentaires', null],
        "\0".parent::class."\0".'cp' => [parent::class, 'cp', null],
        "\0".parent::class."\0".'dateNaissance' => [parent::class, 'dateNaissance', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'isVerified' => [parent::class, 'isVerified', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        "\0".parent::class."\0".'numLicence' => [parent::class, 'numLicence', null],
        "\0".parent::class."\0".'numTelephone' => [parent::class, 'numTelephone', null],
        "\0".parent::class."\0".'participantEntrainements' => [parent::class, 'participantEntrainements', null],
        "\0".parent::class."\0".'participe' => [parent::class, 'participe', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'photo' => [parent::class, 'photo', null],
        "\0".parent::class."\0".'prenom' => [parent::class, 'prenom', null],
        "\0".parent::class."\0".'pseudo' => [parent::class, 'pseudo', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'ville' => [parent::class, 'ville', null],
        'adresse' => [parent::class, 'adresse', null],
        'commentaires' => [parent::class, 'commentaires', null],
        'cp' => [parent::class, 'cp', null],
        'dateNaissance' => [parent::class, 'dateNaissance', null],
        'email' => [parent::class, 'email', null],
        'id' => [parent::class, 'id', null],
        'isVerified' => [parent::class, 'isVerified', null],
        'nom' => [parent::class, 'nom', null],
        'numLicence' => [parent::class, 'numLicence', null],
        'numTelephone' => [parent::class, 'numTelephone', null],
        'participantEntrainements' => [parent::class, 'participantEntrainements', null],
        'participe' => [parent::class, 'participe', null],
        'password' => [parent::class, 'password', null],
        'photo' => [parent::class, 'photo', null],
        'prenom' => [parent::class, 'prenom', null],
        'pseudo' => [parent::class, 'pseudo', null],
        'roles' => [parent::class, 'roles', null],
        'ville' => [parent::class, 'ville', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
