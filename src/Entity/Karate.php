<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KarateRepository")
 */
class Karate
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FirstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DateOfBirth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Gender;

//    /**
//     * @ORM\Column(type="string", length=255)
//     *
//     */
//    private $Ethnicity;
    /**
     * @ORM\Column(type="json_array", nullable=true)
     */
    private $Ethnicity = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $HomeAddress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PostCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ContactNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FullNameOfMotherGuardian;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmergencyContactName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RelationshipToChild;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ContactNumberReference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Medication;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $YesMedication;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DeclarationOne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Consent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DeclareName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DeclareDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Permission;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PermitName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PermitDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MessageRead;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ref;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateCreated;

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): self
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getDateOfBirth(): ?string
    {
        return $this->DateOfBirth;
    }

    public function setDateOfBirth(string $DateOfBirth): self
    {
        $this->DateOfBirth = $DateOfBirth;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->Gender;
    }

    public function setGender(string $Gender): self
    {
        $this->Gender = $Gender;

        return $this;
    }

    public function getEthnicity(): ?array
    {
        return $this->Ethnicity;
    }

    public function setEthnicity(?array $Ethnicity): self
    {
        $this->Ethnicity = $Ethnicity;

        return $this;
    }

    public function getHomeAddress(): ?string
    {
        return $this->HomeAddress;
    }

    public function setHomeAddress(string $HomeAddress): self
    {
        $this->HomeAddress = $HomeAddress;

        return $this;
    }

    public function getPostCode(): ?string
    {
        return $this->PostCode;
    }

    public function setPostCode(string $PostCode): self
    {
        $this->PostCode = $PostCode;

        return $this;
    }

    public function getContactNumber(): ?string
    {
        return $this->ContactNumber;
    }

    public function setContactNumber(string $ContactNumber): self
    {
        $this->ContactNumber = $ContactNumber;

        return $this;
    }

    public function getFullNameOfMotherGuardian(): ?string
    {
        return $this->FullNameOfMotherGuardian;
    }

    public function setFullNameOfMotherGuardian(string $FullNameOfMotherGuardian): self
    {
        $this->FullNameOfMotherGuardian = $FullNameOfMotherGuardian;

        return $this;
    }

    public function getEmergencyContactName(): ?string
    {
        return $this->EmergencyContactName;
    }

    public function setEmergencyContactName(string $EmergencyContactName): self
    {
        $this->EmergencyContactName = $EmergencyContactName;

        return $this;
    }

    public function getRelationshipToChild(): ?string
    {
        return $this->RelationshipToChild;
    }

    public function setRelationshipToChild(string $RelationshipToChild): self
    {
        $this->RelationshipToChild = $RelationshipToChild;

        return $this;
    }

    public function getContactNumberReference(): ?string
    {
        return $this->ContactNumberReference;
    }

    public function setContactNumberReference(string $ContactNumberReference): self
    {
        $this->ContactNumberReference = $ContactNumberReference;

        return $this;
    }

    public function getMedication(): ?string
    {
        return $this->Medication;
    }

    public function setMedication(string $Medication): self
    {
        $this->Medication = $Medication;

        return $this;
    }

    public function getYesMedication(): ?string
    {
        return $this->YesMedication;
    }

    public function setYesMedication(string $YesMedication): self
    {
        $this->YesMedication = $YesMedication;

        return $this;
    }

    public function getDeclarationOne(): ?string
    {
        return $this->DeclarationOne;
    }

    public function setDeclarationOne(string $DeclarationOne): self
    {
        $this->DeclarationOne = $DeclarationOne;

        return $this;
    }

    public function getConsent(): ?string
    {
        return $this->Consent;
    }

    public function setConsent(string $Consent): self
    {
        $this->Consent = $Consent;

        return $this;
    }

    public function getDeclareName(): ?string
    {
        return $this->DeclareName;
    }

    public function setDeclareName(string $DeclareName): self
    {
        $this->DeclareName = $DeclareName;

        return $this;
    }

    public function getDeclareDate(): ?string
    {
        return $this->DeclareDate;
    }

    public function setDeclareDate(string $DeclareDate): self
    {
        $this->DeclareDate = $DeclareDate;

        return $this;
    }

    public function getPermission(): ?string
    {
        return $this->Permission;
    }

    public function setPermission(string $Permission): self
    {
        $this->Permission = $Permission;

        return $this;
    }

    public function getPermitName(): ?string
    {
        return $this->PermitName;
    }

    public function setPermitName(string $PermitName): self
    {
        $this->PermitName = $PermitName;

        return $this;
    }

    public function getPermitDate(): ?string
    {
        return $this->PermitDate;
    }

    public function setPermitDate(string $PermitDate): self
    {
        $this->PermitDate = $PermitDate;

        return $this;
    }

    public function getMessageRead(): ?string
    {
        return $this->MessageRead;
    }

    public function setMessageRead(string $MessageRead): self
    {
        $this->MessageRead = $MessageRead;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->Ref;
    }

    public function setRef(string $Ref): self
    {
        $this->Ref = $Ref;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->DateCreated;
    }

    public function setDateCreated(\DateTimeInterface $DateCreated): self
    {
        $this->DateCreated = $DateCreated;

        return $this;
    }


}
